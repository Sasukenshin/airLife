<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\metier\Users;

class ConnexionController extends Controller 
{
    public function formulaire() 
    {
        return view('connexion');
    }

    public function traitement() 
    {
        request()->validate([
            'login' => ['required'],
            'mdp' => ['required']
        ]);
        
        $resultat = auth()->attempt([
            'login' => request('login'),
            'password' => request('mdp')
        ]);
        
        if($resultat){
            return redirect('/test');
        }
        
        return back()->withInput()->withErrors([
            'login' => 'Vos identifiants sont incorrects.',
        ]);
    }    
}
