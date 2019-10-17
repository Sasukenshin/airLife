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
            'mdp_confirmation' => ['required']
        ], [
            'mdp.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au moins :min caractères.'
        ]);

        $utilisateur = Users::create([
            'login' => request('login'),
            'password' => Hash::make(request('mdp')),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
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
        $erreur = "";
        return view('formModifierProfil', compact('erreur', 'unC'));
    }

    /* Récupère en post les données du formulaire de modification d'un client
     * et créer l'appel de la modification des données d'un client
     * puis renvoie la page profil du client.
     */

    public function modifierProfil() {
        $unClient = new Users();
//        $adresse = Request::input('adressecli');
//        $tel = Request::input('telcli');
        $adresse="";
        $password = Request::input('password');
        $mail = Request::input('mail');
        $firstname = Request::input('firstname');
        $lastname = Request::input('lastname');
        $unClient->modificationProfil(Auth::user()->iduser, $adresse, $password, $mail, $firstname,$lastname);

        return redirect('/profil');
    }
}
