<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testController extends Controller
{
    public function accueil()
    {
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        
        return view('test');
    }
    
    public function deconnexion()
    {
        auth()->logout();
        return(redirect('/'));
    }
}

