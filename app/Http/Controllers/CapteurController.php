<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use App\Metier\CapteurModel;
use Illuminate\Support\Facades\Auth;

class CapteurController extends Controller
{
    public function info_capteur()
    {      
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }

        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        $user_email= Auth::user()->email;
        $model = new CapteurModel();
        $capteurs = $model->getAllCapteurUser();
        return view('capteur' , ['user_firstname' => $user_firstname, 'user_lastname' => $user_lastname, 'capteurs' => $capteurs]);
    }
}
