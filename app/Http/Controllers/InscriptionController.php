<?php

namespace app\http\controllers;

use app\metier\client;

use Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use Illuminate\Support\Facades\Hash;
use \App\Notifications\RegisteredUser;
use Illuminate\Support\Facades\Auth;
use App\Mail\InscriptionMail;
use App\Metier\CapteurModel;
use Mail;

class inscriptioncontroller extends controller
{
    public function formulaire()
    {
        if(!auth()->guest())
        {
            return redirect('/');
        }
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'login' => ['required', 'min:4','unique:users'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['email','unique:users'],
            'mdp' => ['required', 'confirmed', 'min:6'],
            'mdp_confirmation' => ['required'],
            'address' =>['required'],
            'postalCode' =>['required'],
            'city' =>['required','string'],
            'num_tel' =>['required','digits:10']

        ], [
            'mdp.min' => 'pour des raisons de sécurité, votre mot de passe doit faire au moins :min caractères.'
        ]);
        $utilisateur = Users::create([
            'login' => request('login'),
            'password' => hash::make(request('mdp')),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'num_tel' => request('num_tel'),
            'address' => request('address'),
            'postalCode' => request('postalCode'),
            'city' => request('city'),
            'player_id_navigateurs' => '',
            'player_id_mobile' => '',
          
        ]);

        // $utilisateur->notify(new registereduser());

        /*$utilisateur['texte']= "That a test";
        try {
            Mail::to(request('email'))->send(new InscriptionMail($utilisateur));
        } catch (Exception $e) {
            report($e);
            return false;
        }*/
        
        return redirect('/connexion')->withError("Votre inscription a bien été prise en compte.")->withInput();
        
       // $utilisateur->notify(new RegisteredUser());
    }

    public function confirm($id, $token)
    {
        $user = users::where('iduser', $id)->first();

        if($user)
        {
            $user->update(['confirmation_token' => null]);
            auth()->guard()->login($user);
            return redirect('/');
        } else
        {
            return redirect('/connexion')->with('error', 'ce lien ne semble plus valide');
        }
    }



    //modification profil
    public function getprofil() {
        $unclient = new users();

        $unC = $unclient->getclient(auth::user()->iduser);

        return view('profil', compact('unC'));
    }

    /* créer l'appel de récupération des données d'un client
     * et renvoie ces données au formulaire de modification d'un client.
     */

    public function postmodifierprofil() {

        $unclient = new users();
        $unC = $unclient->getclient(auth::user()->iduser);
        return view('formmodifierprofil', compact('unC'));
    }

    /* récupère en post les données du formulaire de modification d'un client
     * et créer l'appel de la modification des données d'un client
     * puis renvoie la page profil du client.
     */

    public function modifierprofil()
    {
        $unC = new Users();
        $adresse = Request::input('address');
        $numtel = Request::input('num_tel');
        $password = Request::input('password');
        $password_confirm = Request::input('password_confirm');
        $mail = Request::input('mail');
        $firstname = Request::input('firstname');
        $lastname = Request::input('lastname');
        $postalCode = Request::input('postalCode');
        $city = Request::input('city');

        $erreurPassword ="";
        $erreurTelephone = "";
        $erreurMail="";
        if ($password != $password_confirm) {
            $erreurPassword = "les mots de passes doivent être identiques <br>";
        }
        if (strlen($password) < 6) {
            $erreurPassword .= "le mot de passe doit contenir au moins 6 caractères";
        }
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $erreurMail = "l'adresse email n'est pas correcte";
        }

        if (strlen($numtel) != 10) {
            if (!preg_match('/^[0-9-+]$/', $numtel)) { // error } else { // good }
                $erreurTelephone ="le numero de téléphone n'est pas correcte";
            }
            $erreurTelephone ="le numero de téléphone n'est pas correcte";
        }


        if($erreurPassword != "" || $erreurMail != "" || $erreurTelephone != "" )
        {
            $unC->ADDRESS= $adresse;
            $unC->FIRSTNAME=$firstname;
            $unC->LASTNAME = $lastname;
            $unC->EMAIL = $mail;
            $unC->NUM_TEL = $numtel;
            $unC->POSTALCODE = $postalCode;
            $unC->CITY = $city;
            return view('formModifierProfil', compact('erreurPassword', 'erreurTelephone','erreurMail','unC'));

        }
        else {
            $unC->modificationProfil(Auth::user()->iduser, $adresse, $password, $mail, $firstname, $lastname, $numtel, $postalCode, $city);
            return redirect('/profil');
        }
    }

    /* créer l'appel de récupération des données d'un client
     * et renvoie ces données au formulaire de modification 
     * de préference d'un client.
     */

    public function postmodifierpreference() {
        $unclient = new users();
        $unC = $unclient->getclient(auth::user()->iduser);
        $seuils = $this->getAllSeuilUser();
        return view('formmodifierpreference', compact('seuils', 'unC'));
    }

    /* récupère en post les données du formulaire de modification d'un client
     * et créer l'appel de la modification des préférence client
     */

    public function modifierpreference()
    {
        $model = new CapteurModel();
        $pagination = Request::input('pagination');
        $erreurPagination ="";
        if($pagination > 99 || $pagination < 0) {
            $erreurPagination = "La pagination doit être compris entre 0 et 99.";
        }
        $seuils = $this->getAllSeuilUser();
        $warnings = [];
        $i = 0;
        foreach ($seuils as $key => $value) {
            $seuil = Request::input('seuil'.$value->iddatatype);     
            ${'seuil'.$value->iddatatype} = "";
            $seuilCommun = $model->getCommonSeuilGaz($value->iddatatype);
            if($seuil < $seuilCommun[0]->seuil-10) {
                ${'seuil'.$value->iddatatype} = "Definir un seuil si bas pourrait provoqué un surplus de notification";
            } else if ($seuil > $seuilCommun[0]->seuil+10) {
                ${'seuil'.$value->iddatatype} = "Definir un seuil si haut pourrait etre inutile en cas de danger";
            }
            $warnings['seuil'.$value->iddatatype] = ${'seuil'.$value->iddatatype};
            if($value->perso != 0){
                $model->updateSeuilGaz($value->iddatatype, $seuil);
            } else {
                $model->setSeuilGaz($value->iddatatype, $seuil);
                $seuils[$i]->perso = 1;
            }
            $seuils[$i]->seuil = $seuil;
            $i++;
        }
        $unC = new Users();
        $unC->modificationPagination($pagination);
        $unC = new Users();
        $unC = $unC->getclient(auth::user()->iduser);
        return view('formModifierPreference', compact('warnings','unC', 'seuils'));

    }

    public function getAllSeuilUser(){
        $unclient = new users();
        $unC = $unclient->getclient(auth::user()->iduser);
        $model = new CapteurModel();
        $capteurs_brut = $model->getAllCapteurUser();
        $gazs = [];

        foreach ($capteurs_brut as  $valeur) {
            if (!in_array($valeur->iddatatype, $gazs)) {
                $gazs[] = $valeur->iddatatype;
            }    
        }
        return $model->getAllSeuilUser($gazs);
    }
}
