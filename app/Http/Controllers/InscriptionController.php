<?php

namespace App\Http\Controllers;

use App\metier\Client;
use App\User;
use Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use Illuminate\Support\Facades\Hash;
use \App\Notifications\RegisteredUser;
use Illuminate\Support\Facades\Auth;


class InscriptionController extends Controller
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
            'mdp.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au moins :min caractères.'
        ]);

        $utilisateur = Users::create([
            'login' => request('login'),
            'password' => Hash::make(request('mdp')),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'num_tel' => request('num_tel'),
            'address' => request('address'),
            'player_id_navigateurs' => '',
            'player_id_mobile' => '',
            'confirmation_token' => str_replace('/', '', bcrypt(str_random(16)))
        ]);

        $utilisateur->notify(new RegisteredUser());

        return redirect('/connexion');
    }

    public function confirm($id, $token)
    {
        $user = Users::where('iduser', $id)->first();

        if($user)
        {
            $user->update(['confirmation_token' => null]);
            auth()->guard()->login($user);
            return redirect('/');
        } else
        {
            return redirect('/connexion')->with('error', 'Ce lien ne semble plus valide');
        }
    }



    //modification profil
    public function getProfil() {
    $unClient = new Users();
    $unC = $unClient->getClient(Auth::user()->iduser);

    return view('profil', compact('unC'));
}

    /* Créer l'appel de récupération des données d'un client
     * et renvoie ces données au formulaire de modification d'un client.
     */

    public function postModifierProfil() {

        $unClient = new Users();
        $unC = $unClient->getClient(Auth::user()->iduser);

        $erreurPassword="";
        $erreurMail = "";
        $erreurTelephone="";
        return view('formModifierProfil', compact('erreurPassword','erreurMail','erreurTelephone', 'unC'));
    }

    /* Récupère en post les données du formulaire de modification d'un client
     * et créer l'appel de la modification des données d'un client
     * puis renvoie la page profil du client.
     */

    public function modifierProfil()
    {
        $unC = new Users();
        $adresse = Request::input('address');
        $numtel = Request::input('num_tel');
        $password = Request::input('password');
        $password_confirm = Request::input('password_confirm');
        $mail = Request::input('mail');
        $firstname = Request::input('firstname');
        $lastname = Request::input('lastname');

        $erreurPassword="";
        $erreurTelephone = "";
        $erreurMail="";
        if ($password != $password_confirm) {
            $erreurPassword = "Les mots de passes doivent être identiques <br>";
        }
        if (strlen($password) < 6) {
            $erreurPassword .= "Le mot de passe doit contenir au moins 6 caractères";
        }
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $erreurMail = "L'adresse email n'est pas correcte";
        }

        if (strlen($numtel) != 10) {
            if (!preg_match('/^[0-9-+]$/', $numtel)) { // error } else { // good }
                $erreurTelephone ="Le numero de téléphone n'est pas correcte";
            }
            $erreurTelephone ="Le numero de téléphone n'est pas correcte";
        }


        if($erreurPassword != "" || $erreurMail != "" || $erreurTelephone != "" )
        {
            $unC->ADDRESS= $adresse;
            $unC->FIRSTNAME=$firstname;
            $unC->LASTNAME = $lastname;
            $unC->EMAIL = $mail;
            $unC->NUM_TEL = $numtel;
            return view('formModifierProfil', compact('erreurPassword', 'erreurTelephone','erreurMail','unC'));

        }
        else {
            $unC->modificationProfil(Auth::user()->iduser, $adresse, $password, $mail, $firstname, $lastname, $numtel);
            return redirect('/profil');
        }
    }
}
