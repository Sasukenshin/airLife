<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Datetime;
use Session;
use DB;
use DateInterval;
use PDF;


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
           $userinfo = DB::table('users')->where('iduser', '=', Auth::user()->iduser)->first();
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
            $moyenlivraisons = DB::table('moyenlivraison')->get();
            $moyenpaiements = DB::table('moyenpaiement')->get();

            $fraisport = DB::table('moyenlivraison')->select('prix')
                ->where('moyenlivraisonid', $moyenlivraison->moyenlivraisonid)->first();

            $totalTtc = $sousTotalTcc + $fraisport->prix;
            $totalTva = round(($totalTtc)/120*20,2);
            $totalHT = round($totalTtc/1.2,2);
            $data = array('fraisport' => $fraisport->prix, 'totalHT' => $totalHT, 'totalTtc'=> $totalTtc, 'totalTva'=>$totalTva, 'sousTotalTcc'=>$sousTotalTcc,'panierid' => $panier->idpanier, 'moyenlivraisonid' => $panier->moyenlivraisonid, 'moyenpaiementid' => $panier->moyenpaiementid  );
            if(isset($userinfo) && !is_null($userinfo) && !empty($userinfo)){

                return view("panier", compact('lignespanier','data', 'moyenlivraisons','moyenpaiements','userinfo'));
            }
            else
                return view("panier", compact('lignespanier','data', 'moyenlivraisons','moyenpaiements'));

        }
        else {

            return view("panier");
        }
    }
    public function deleteLignePanier(Request $request) //fonction pour delete une ligne panier d'un client
    {
        $lignepanierid=$request['lignepanierid'];
        DB::table('lignespanier')->where('lignepanierid', $lignepanierid)->delete();

        return redirect('/panier');
    }


     function calculTotalPanier($idpanier){
        $tableauTotalPanier = array();
         $tableauTotalPanier['totalHT']=0;
         $tableauTotalPanier['sousTotalTcc'] =0;
         $tableauTotalPanier['fraisport'] =0;
         $tableauTotalPanier['totalTtc']=0;
         $tableauTotalPanier['totalTva']=0;
        $lesLignesPaniers= DB::table('lignespanier')
            ->where('idpanier', $idpanier)->get();
        $sousTotalTcc =0;
        foreach($lesLignesPaniers as $laLigne)
        {
            $sousTotalTcc += $laLigne->prix * $laLigne->qte;
        }
        $moyenlivraison = DB::table('panier')->select('moyenlivraisonid')
            ->where('idpanier', $idpanier)->first();

        $fraisport = DB::table('moyenlivraison')->select('prix')
            ->where('moyenlivraisonid', $moyenlivraison->moyenlivraisonid)->first();

        $totalTtc = $sousTotalTcc + $fraisport->prix;
         $totalHT = round($totalTtc/1.2,2);
        $totalTva = round(($totalTtc)/120*20,2);
         $tableauTotalPanier['totalHT'] =$totalHT;
         $tableauTotalPanier['sousTotalTcc'] =$sousTotalTcc;
         $tableauTotalPanier['fraisport'] =$fraisport->prix;
         $tableauTotalPanier['totalTtc']=$totalTtc;
         $tableauTotalPanier['totalTva']=$totalTva;

        return $tableauTotalPanier;
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

        $tableauTotalPanier = self::calculTotalPanier($article->idpanier);
        return response()->json([
            'qte' => $article->qte,
            'prix' => $article->prix * $article->qte,
            'totalHT' => $tableauTotalPanier['totalHT'],
            'sous_total_ttc' =>$tableauTotalPanier['sousTotalTcc'],
            'frais_port_ttc' => $tableauTotalPanier['fraisport'],
            'total_tva' => $tableauTotalPanier['totalTva'],
            'total_ttc' => $tableauTotalPanier['totalTtc']

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

        $article = DB::table('lignespanier')->select('idpanier','qte','prix')->where('lignepanierid' ,$lignepanierid)->first();
        }
        //calcultotalpanier
        $tableauTotalPanier = self::calculTotalPanier($article->idpanier);
        return response()->json([
            'qte' => $article->qte,
            'prix' => $article->prix * $article->qte,
            'totalHT' => $tableauTotalPanier['totalHT'],
            'sous_total_ttc' =>$tableauTotalPanier['sousTotalTcc'],
            'frais_port_ttc' => $tableauTotalPanier['fraisport'],
            'total_tva' => $tableauTotalPanier['totalTva'],
            'total_ttc' => $tableauTotalPanier['totalTtc']

        ]);
    }

    public function updateTransport(Request $request) //fonction pour update le mode de transport
    {
        $moyenlivraisonid=$request['radioValue'];
        $idpanier = $request['idpanier'];
        $fraisport = DB::table('moyenlivraison')->select('prix')->where('moyenlivraisonid' ,$moyenlivraisonid)->first();

        if($fraisport->prix != 0) {
            DB::table('panier')->where('idpanier', '=', $idpanier)->update(['moyenlivraisonid' => $moyenlivraisonid]);
            //calcultotalpanier
            $tableauTotalPanier = self::calculTotalPanier($idpanier);
            return response()->json([
                'totalHT' => $tableauTotalPanier['totalHT'],
                'sous_total_ttc' =>$tableauTotalPanier['sousTotalTcc'],
                'frais_port_ttc' => $tableauTotalPanier['fraisport'],
                'total_tva' => $tableauTotalPanier['totalTva'],
                'total_ttc' => $tableauTotalPanier['totalTtc']

            ]);
        }
        else
            return "error";
    }

    public function updateMoyenPaiement(Request $request) //fonction pour mettre à jour le mode de paiement
    {
        $moyenpaiementid=$request['radioValue'];
        $idpanier = $request['idpanier'];
        $moyenP = DB::table('moyenpaiement')->where('moyenpaiementid' ,$moyenpaiementid)->first();
        if($moyenP->moyenpaiementid != null) {
            DB::table('panier')->where('idpanier', '=', $idpanier)->update(['moyenpaiementid' => $moyenpaiementid]);
        }
        else
            return "error";
    }


    public function traitement() // validation du panier
    {
        if(auth()->guest())
        {
            return back()->withError("Veuillez vous connecter afin de pouvoir valider votre panier.")->withInput();
        }else {
            request()->validate([
                'Flastname2' => ['required'],
                'Ffirstname2' => ['required'],
                'Faddress2' => ['required'],
                'Fville2' => ['required'],
                'Fcp2' => ['required'],
                'Ftel2' => ['required'],
            ], [
                'Flastname2.required' => 'Veuillez entrer votre nom.',
                'Ffirstname2.required' => 'Veuillez entrer votre prénom.',
                'Faddress2.required' => 'Veuillez entrer votre adresse.',
                'Fville2.required' => 'Veuillez entrer votre ville.',
                'Fcp2.required' => 'Veuillez entrer votre code postal.',
                'Ftel2.required' => 'Veuillez entrer votre numéro de téléphone.'
            ]);
            $panierid = request('panierid');
            $Flastname = request('Flastname2');
            $Ffirstname = request('Ffirstname2');
            $Faddress = request('Faddress2');
            $Fville = request('Fville2');
            $Fcp = request('Fcp2');
            $Ftel = request('Ftel2');
            $Fmail = request('Fmail');

            if($panierid != "" && !auth()->guest()){


                $tableauTotalPanier  = self::calculTotalPanier($panierid);

                //on passe le panier en "done = 1 et on met à jour les données (ttc, ht, adresse facturation ...)
                DB::table('panier')->where('idpanier', '=', $panierid)->update(['totalTTC' =>  $tableauTotalPanier['totalTtc'], 'totalHT' => $tableauTotalPanier['totalHT'] , 'totalTTC_sansfraisport' => $tableauTotalPanier['sousTotalTcc'], 'TVA' => $tableauTotalPanier['totalTva'] , 'fraisPort' =>$tableauTotalPanier['fraisport'], 'firstname' =>$Ffirstname , 'lastname' =>$Flastname, 'address' =>  $Faddress, 'postalCode' => $Fcp, 'city' => $Fville,'dateValidation' => time(),'num_tel' => $Ftel,'email' => $Fmail] );
                $panier = DB::table('panier')->where('idpanier', '=', $panierid)->first();
                return view("paypal", compact ('panier'));
            }
        }
    }

    public function retourCommande($panierid){


        DB::table('panier')->where('idpanier', '=', $panierid)->update(['done' =>1]);


        return redirect("/commandeValidee");
    }
    public function commandeValidee()
    {
        return view ('retourcommande');
    }


    public function orderPdf($idpanier)
    {
        $order= DB::table('panier')->join('moyenpaiement', 'panier.moyenpaiementid', '=', 'moyenpaiement.moyenpaiementid')
            ->join('moyenlivraison', 'panier.moyenlivraisonid', '=', 'moyenlivraison.moyenlivraisonid')
            ->join('users','panier.iduser','=','users.iduser')
            ->select('moyenpaiement.libelle as moyenpaiement'
                ,'moyenlivraison.libelle as moyenlivraison'
                ,'panier.firstname as Lfirstname'
                ,'panier.lastname as Llastname'
                ,'panier.email as Lemail'
                ,'panier.num_tel as Lnum_tel'
                ,'panier.address as Laddress'
                ,'panier.totalTTC','panier.totalHT'
                ,'panier.TVA','totalTTC_sansfraisport'
                ,'panier.city as Lcity'
                ,'panier.postalCode as LpostalCode'
                ,'users.firstname as Ffirstname'
                ,'users.lastname as Flastname'
                ,'users.email as Femail'
                ,'users.num_tel as Fnum_tel'
                ,'users.address as Faddress'
                ,'users.city as Fcity'
                ,'users.postalCode as FpostalCode'
                ,'panier.idpanier as idpanier')
            ->where('panier.idpanier', $idpanier)->first();

        $lignespanier = DB::table('lignespanier')->join('articles', 'lignespanier.artid', '=', 'articles.artid')->where('idpanier', '=', $idpanier)->get();
        $pdf = PDF::loadView('order_pdf', compact('order','lignespanier'));
        $name = "commandeNo-".$order->idpanier.".pdf";

        return $pdf->download($name);
    }

    public function getlescommandes()
    {

        if (!auth()->guest()) {

            $commandes = DB::table('panier')->join('moyenpaiement', 'panier.moyenpaiementid', '=', 'moyenpaiement.moyenpaiementid')->join('moyenlivraison', 'panier.moyenlivraisonid', '=', 'moyenlivraison.moyenlivraisonid')->where('iduser', '=', auth::user()->iduser)->where('done','=','1')->select('dateValidation', 'moyenpaiement.libelle as moyenpaiement','moyenlivraison.libelle as moyenlivraison','totalTTC','idpanier')->get();
            
            return view("commandes", compact ('commandes'));
        }

    }
}


