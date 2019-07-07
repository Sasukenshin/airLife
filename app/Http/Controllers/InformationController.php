<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    public function info_air()
    {      
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }

        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        $user_email= Auth::user()->email;
       
        return view('info-air' , ['user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
    }
    
    public function info_capteurs()
    {               
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        
        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        
        return view('info-capteurs' , ['user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
    }
}
