<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Datetime;
use Session;
use DB;
use DateInterval;


class PanierController extends Controller {

    public function addPanier(Request $request) //fonction pour add un article à un panier
    {
        $today = date("Y-m-d");
        $today2 = date("Y-m-d");
        // $dateLivraison = date("Y-m-d");
        $today = DateTime::createFromFormat("Y-m-d", $today);
        $today2 = DateTime::createFromFormat("Y-m-d", $today2);
        $today2=$today2->add(new DateInterval('PT1H'));
        $artid=$request['artid'];

        $article = DB::table('articles')->where('artid', '=', $artid)->first();
        $ajoutJour = 'P'.$article->delai.'D';

        $dateLivraison = $today->add(new DateInterval($ajoutJour));
        $dateLivraison = $dateLivraison->format('Y-m-d');

        $today = $today->format('Y-m-d');

        if(!auth()->guest())
        {
            $panierExist = DB::table('panier')->where('iduser' ,Auth::user()->iduser)->first();


            if(empty($panierExist)) {
                $id = DB::table('panier')->insertGetId([
                    'datepanier' => $today2, 'iduser' => Auth::user()->iduser, 'sessionid' => Session::getId(), 'done' => '0',

                ]);
            }
            else
            {
                $articleExist = DB::table('lignespanier')->where('artid',$artid)->where('idpanier', $panierExist->idpanier)->first();
                $id = $panierExist->idpanier;
            }


            if(empty($articleExist)){
            DB::table('lignespanier')->insert([
                'idpanier' => $id, 'artid' => $artid, 'dateLivraison' => $dateLivraison, 'prix' => $article->prix,

            ]);
            }else
            {
                DB::table('lignespanier')->where('lignepanierid', $articleExist->lignepanierid)->increment('qte');
            }

        }
        else
        {

            $panierExist = DB::table('panier')->where('sessionid' ,Session::getId())->first();

            if(empty($panierExist) ) {

                $id = DB::table('panier')->insertGetId([
                    'datepanier' => $today2, 'sessionid' => Session::getId(), 'done' => '0',

                ]);
            }
            else
            {
                $articleExist = DB::table('lignespanier')->where('artid',$artid)->where('idpanier', $panierExist->idpanier)->first();
                $id = $panierExist->idpanier;
            }
            if(empty($articleExist)) {
                DB::table('lignespanier')->insert([
                    'idpanier' => $id, 'artid' => $artid, 'dateLivraison' => $dateLivraison, 'prix' => $article->prix,

                ]);
            }
            else{
                DB::table('lignespanier')->where('lignepanierid', $articleExist->lignepanierid)->increment('qte');
            }


        }

        return response()->json($article->libelle);
    }


    public function getPanier() //fonction pour retourner le panier d'un client
    {

       if(!auth()->guest())
       {
           $panier = DB::table('panier')->where('iduser', '=', Auth::user()->iduser)->first();
           if(!is_null($panier) && isset($panier) && !empty($panier) )
           $lignespanier = DB::table('lignespanier')->join('articles', 'lignespanier.artid', '=', 'articles.artid')->where('idpanier', '=', $panier->idpanier)->get();

       }
       else
       {
           $panier = DB::table('panier')->where('sessionid', '=', Session::getId())->first();
           if(!is_null($panier) && isset($panier) && !empty($panier) )
           $lignespanier = DB::table('lignespanier')->join('articles', 'lignespanier.artid', '=', 'articles.artid')->where('idpanier', '=', $panier->idpanier)->get();

       }


        if(isset($lignespanier) && !is_null($lignespanier) && !empty($lignespanier) && count($lignespanier)>0)
        {

            $sousTotalTcc=0;
            foreach ($lignespanier as $uneLignepanier)
            {
                $sousTotalTcc += $uneLignepanier->prix * $uneLignepanier->qte;
                $uneLignepanier->prix = $uneLignepanier->prix * $uneLignepanier->qte;
            }

            $moyenlivraison = DB::table('panier')->select('moyenlivraisonid')
                ->where('idpanier', $panier->idpanier)->first();

            $fraisport = DB::table('moyenlivraison')->select('prix')
                ->where('moyenlivraisonid', $moyenlivraison->moyenlivraisonid)->first();

            $totalTtc = $sousTotalTcc + $fraisport->prix;
            $totalTva = round(($totalTtc)/120*20);
            $data = array('fraisport' => $fraisport->prix, 'totalTtc'=> $totalTtc, 'totalTva'=>$totalTva, 'sousTotalTcc'=>$sousTotalTcc);
            return view("panier", compact('lignespanier','data'));
        }
        else {

            return view("panier");
        }



    }

    public function deleteLignePanier(Request $request) //fonction pour delete une ligne panier d'un client
    {
        $lignepanierid=$request['lignepanierid'];
        DB::table('lignespanier')->where('lignepanierid', $lignepanierid)->delete();

        //return response()->json($lignepanierid);
        return redirect('/panier');
    }




    public function addQte(Request $request) //fonction pour add une quantité
    {
        $lignepanierid=$request['lignepanierid'];
        $article = DB::table('lignespanier')->select('idpanier','qte','artid','prix')->where('lignepanierid' ,$lignepanierid)->first();
        if ($article->qte<100) {
           // $prix = DB::table('articles')->select('prix')->where('artid', $article->artid)->first();
            DB::table('lignespanier')->where('lignepanierid', $lignepanierid)->increment('qte');
           // DB::table('lignespanier')
             //   ->where('lignepanierid', $lignepanierid)
               // ->update(['prix' => $article->prix + $prix->prix]);
            $article = DB::table('lignespanier')->select('idpanier','qte', 'prix')->where('lignepanierid', $lignepanierid)->first();
        }


        //calcultotalpanier
        $lesLignesPaniers= DB::table('lignespanier')
            ->where('idpanier', $article->idpanier)->get();
        $sousTotalTcc =0;
        foreach($lesLignesPaniers as $laLigne)
        {
            $sousTotalTcc += $laLigne->prix * $laLigne->qte;
        }
        $moyenlivraison = DB::table('panier')->select('moyenlivraisonid')
            ->where('idpanier', $article->idpanier)->first();

        $fraisport = DB::table('moyenlivraison')->select('prix')
            ->where('moyenlivraisonid', $moyenlivraison->moyenlivraisonid)->first();

        $totalTtc = $sousTotalTcc + $fraisport->prix;
        $totalTva = round(($totalTtc)/120*20);
        return response()->json([
            'qte' => $article->qte,
            'prix' => $article->prix * $article->qte,
            'sous_total_ttc' => $sousTotalTcc,
            'frais_port_ttc' => $fraisport->prix,
            'total_tva' => $totalTva,
            'total_ttc' => $totalTtc

        ]);
    }

    public function lessQte(Request $request) //fonction pour add une quantité
    {
        $lignepanierid=$request['lignepanierid'];
        $article = DB::table('lignespanier')->select('qte','artid','prix')->where('lignepanierid' ,$lignepanierid)->first();
        if ($article->qte>1)
        {
       // $prix = DB::table('articles')->select('prix')->where('artid' ,$article->artid)->first();
        DB::table('lignespanier')->where('lignepanierid', $lignepanierid)->decrement('qte');
        //DB::table('lignespanier')
          //  ->where('lignepanierid', $lignepanierid)
            //->update(['prix' => $article->prix -$prix->prix]);
        $article = DB::table('lignespanier')->select('idpanier','qte','prix')->where('lignepanierid' ,$lignepanierid)->first();
        }
       // return response()->json($article->qte,$prix->prix);
        //calcultotalpanier
        $lesLignesPaniers= DB::table('lignespanier')
            ->where('idpanier', $article->idpanier)->get();
        $sousTotalTcc =0;
        foreach($lesLignesPaniers as $laLigne)
        {
            $sousTotalTcc += $laLigne->prix * $laLigne->qte;
        }
        $moyenlivraison = DB::table('panier')->select('moyenlivraisonid')
            ->where('idpanier', $article->idpanier)->first();

        $fraisport = DB::table('moyenlivraison')->select('prix')
            ->where('moyenlivraisonid', $moyenlivraison->moyenlivraisonid)->first();

        $totalTtc = $sousTotalTcc + $fraisport->prix;
        $totalTva = round(($totalTtc)/120*20);
        return response()->json([
            'qte' => $article->qte,
            'prix' => $article->prix * $article->qte,
            'sous_total_ttc' => $sousTotalTcc,
            'frais_port_ttc' => $fraisport->prix,
            'total_tva' => $totalTva,
            'total_ttc' => $totalTtc

        ]);
    }

}
