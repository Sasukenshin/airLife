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

// sendMailContact

    public function contactCloudCaissesEnregistreusesMacApple() {

        $type = Request::input('type');
        if ($type == "HOSTNCAST") {
            $message = "Bonjour, je suis intéressé par votre hébergement HOSTNCAST";
            $objet = "HOSTNCAST";
            $typeM="informatique";
        } else

        if ($type == "HOUSING") {
            $message = "Bonjour, je suis intéressé par votre hébergement HOUSING";
            $objet = "HOUSING";
            $typeM="informatique";
        } else
        if ($type == "CLOUD") {
            $message = "Bonjour, je suis intéressé pas vos prestations de serveur en cloud privé ou dédié";
            $objet = "CLOUD";
            $typeM="informatique";
        } else
        if ($type == "DOMAINE") {
            $message = "Bonjour, j'aimerai des renseignements quant au nom de domaine";
            $objet = "DOMAINE";
            $typeM="informatique";
        } else
        if ($type == "SITE") {
            $message = "Bonjour, j'aimerai des renseignements quant à la location et la création de site internet et e-commerce";
            $objet = "SITE";
            $typeM="informatique";
        }else
        if ($type == "CAISSE ENREGISTREUSE") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente et dépannage des caisses enregistreuses";
            $objet = "Caisses enregistreuses";
            $typeM="informatique";
        }
        else
        if ($type == "iPhones reconditionnés") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente des iPhones reconditionnés";
            $objet = "iPhones reconditionnés";
            $typeM="telephonie";
        }else
          if ($type == "iPads reconditionnés") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente des iPads reconditionnés";
            $objet = "iPads reconditionnés";
            $typeM="telephonie";
        }else
          if ($type == "iMacs reconditionnés") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente des iMacs reconditionnés";
            $objet = "iMacs reconditionnés";
            $typeM="telephonie";
        }else
          if ($type == "iPods reconditionnés") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente des iPods reconditionnés";
            $objet = "iPods reconditionnés";
            $typeM="telephonie";
        }else
          if ($type == "Accessoires neufs") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente d'accessoires neufs Apple";
            $objet = "Accessoires neufs";
            $typeM="telephonie";
        }else
           if ($type == "MacBooks reconditionnés") {
            $message = "Bonjour, j'aimerai des renseignements quant à la vente des MacBooks reconditionnés";
            $objet = "MacBooks reconditionnés";
            $typeM="telephonie";
        }
        return view('contact', compact('message', 'objet','typeM'));
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
