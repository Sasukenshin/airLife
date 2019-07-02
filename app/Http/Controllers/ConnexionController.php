<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\metier\Users;

class ConnexionController extends Controller 
{
    protected $primaryKey = 'IDUSER';
    
    public function formulaire() 
    {
        if (!auth()->guest()) {
            return redirect('/');
        }
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
            'password' => request('mdp'),
            'confirmation_token' => null
        ]);
        
        if($resultat){
            return redirect('/');
        }
        
        return back()->withInput()->withErrors([
            'login' => 'Vos identifiants sont incorrects.',
        ]);
    }
    
    public function deconnexion()
    {
        auth()->logout();
        return(redirect('/'));
    }    
}
