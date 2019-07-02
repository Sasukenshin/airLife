<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function about()
    {
        
        if(auth()->check()) 
        {
            $user_firstname = Auth::user()->firstname;
            $user_lastname = Auth::user()->lastname;
            
            return view('about' , ['user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
        } else {
            return view('about');
        }             
    }
}
