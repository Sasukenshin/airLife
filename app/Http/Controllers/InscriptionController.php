<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
