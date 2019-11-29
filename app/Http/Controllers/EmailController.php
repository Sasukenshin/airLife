<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller {

    public function sendMailContact() { //fonction pour le mail contact
        $title = Request::input('objet');
        if ($title == null)
            $title = "Contact";




        $nom = Request::input('nom');
        $prenom = Request::input('prenom');
        $user_mail = Request::input('mail');
        $tel = Request::input('tel');
        $content = Request::input('message');
        $carbon = Carbon::today();
        $timestamp = $carbon->timestamp;
        $Date = $carbon->format('y/m/d');
        $format = $carbon->format('d/m/y');
        $captcha = Request::input('g-recaptcha-response');
        $erreur = "Veuillez certifier que vous n'êtes pas un robot ";

//        if ($captcha == true) {
            $erreur = "Le message a bien été envoyé";
            $data = ['email' => $user_mail, 'nom' => $nom, 'prenom' => $prenom, 'tel' => $tel, 'subject' => $title, 'content' => $content, 'date' => $format]; // ici ce sont les données qui sont transmis dans le view utilisé lors de l'envoi du mail
            Mail::send('mailContact', $data, function($message) use($data) { //fonction send qui va envoyer la view " mailContact "
                $subject = $data['subject'];
                $message->from('noreply.airlife@gmail.com');  //Adresse email de l'emetteur
                $message->to('jeremycosta21@gmail.com');
            });
//        }
        return view('contact', compact('erreur'));
    }




    public function validerCommande() {
        $client = new llx_societe();
        $uneCommande = new rw_netcdes();
        $unProduit = new rw_netcdes_det();
        $error = "";
        $idClient = Session::get('idcli');
        $NumCommande = $uneCommande->getIdCommandeClient($idClient);
        $total_ttc = 0;
        $infosClient= $client->getLesInfosClient($idClient);


        $lesProduits = $unProduit->getlesProduitsCommande($NumCommande);
        foreach ($lesProduits as $unP) {
            $total_ttc += $unP->price_ttc * $unP->quantite;
        }
        $uneCommande->majBDD($NumCommande);
        $carbon = Carbon::today();
        $format = $carbon->format('d/m/y');
        $subject = "Recapitulatif commande numéro $NumCommande->rowid";

        //email pour Riotware
        $data = ['idCommande' => $NumCommande->rowid, 'total' => $total_ttc, 'date' => $format, 'lesProduits' => $lesProduits, 'subject' => $subject,'NomCli'=>$infosClient->nom, 'EmailCli'=>$infosClient->email, 'TelCli'=>$infosClient->phone ];
        Mail::send('mailRecapEntreprise', $data, function($message) use($data) {
            $subject = $data['subject'];
            $message->from('riotware.recuperation@gmail.com');
            $message->to('riotware.recuperation@gmail.com')->subject($subject);
        });


        Mail::send('mailRecapClient', $data, function($message) use($data) {
             $client = new llx_societe();
              $idClient = Session::get('idcli');
            $infosClient= $client->getLesInfosClient($idClient);
            $subject = $data['subject'];
            $message->from('riotware.recuperation@gmail.com');
            $message->to( $infosClient->email)->subject($subject);
        });
        return redirect('/');
    }

}
