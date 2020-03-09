<?php

namespace app\http\controllers;

use app\metier\client;

use request;
use app\http\controllers\controller;
use app\metier\users;
use illuminate\support\facades\hash;
use \app\notifications\registereduser;
use illuminate\support\facades\auth;


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
            'login' => ['required', 'min:4'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['email'],
            'mdp' => ['required', 'confirmed', 'min:6'],
            'mdp_confirmation' => ['required'],
            'address' =>['required'],
            'num_tel' =>['required','digits:10']

        ], [
            'mdp.min' => 'pour des raisons de sécurité, votre mot de passe doit faire au moins :min caractères.'
        ]);

        $utilisateur = users::create([
            'login' => request('login'),
            'password' => hash::make(request('mdp')),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'num_tel' => request('num_tel'),
            'address' => request('address'),
            'player_id_navigateurs' => '',
            'player_id_mobile' => '',
            'confirmation_token' => str_replace('/', '', bcrypt(str_random(16)))
        ]);

        $utilisateur->notify(new registereduser());

        return redirect('/connexion');
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
        $unc = $unclient->getclient(auth::user()->iduser);

        return view('profil', compact('unc'));
    }

    /* créer l'appel de récupération des données d'un client
     * et renvoie ces données au formulaire de modification d'un client.
     */

    public function postmodifierprofil() {

        $unclient = new users();
        $unc = $unclient->getclient(auth::user()->iduser);

        $erreurpassword="";
        $erreurmail = "";
        $erreurtelephone="";
        return view('formmodifierprofil', compact('erreurpassword','erreurmail','erreurtelephone', 'unc'));
    }

    /* récupère en post les données du formulaire de modification d'un client
     * et créer l'appel de la modification des données d'un client
     * puis renvoie la page profil du client.
     */

    public function modifierprofil()
    {
        $unc = new users();
        $adresse = request::input('address');
        $numtel = request::input('num_tel');
        $password = request::input('password');
        $password_confirm = request::input('password_confirm');
        $mail = request::input('mail');
        $firstname = request::input('firstname');
        $lastname = request::input('lastname');

        $erreurpassword="";
        $erreurtelephone = "";
        $erreurmail="";
        if ($password != $password_confirm) {
            $erreurpassword = "les mots de passes doivent être identiques <br>";
        }
        if (strlen($password) < 6) {
            $erreurpassword .= "le mot de passe doit contenir au moins 6 caractères";
        }
        if (!filter_var($mail, filter_validate_email)) {
            $erreurmail = "l'adresse email n'est pas correcte";
        }

        if (strlen($numtel) != 10) {
            if (!preg_match('/^[0-9-+]$/', $numtel)) { // error } else { // good }
                $erreurtelephone ="le numero de téléphone n'est pas correcte";
            }
            $erreurtelephone ="le numero de téléphone n'est pas correcte";
        }


        if($erreurpassword != "" || $erreurmail != "" || $erreurtelephone != "" )
        {
            $unc->address= $adresse;
            $unc->firstname=$firstname;
            $unc->lastname = $lastname;
            $unc->email = $mail;
            $unc->num_tel = $numtel;
            return view('formmodifierprofil', compact('erreurpassword', 'erreurtelephone','erreurmail','unc'));

        }
        else {
            $unc->modificationprofil(auth::user()->iduser, $adresse, $password, $mail, $firstname, $lastname, $numtel);
            return redirect('/profil');
        }
    }


}
