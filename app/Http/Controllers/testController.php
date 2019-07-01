<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testController extends Controller
{
    public function accueil()
    {
        var_dump(auth()->check());
        var_dump(auth()->guest());
        
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        
        return view('test');
    }
}
