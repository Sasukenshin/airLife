<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\metier\Save_Sensor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AjoutCapteurController extends Controller
{
    public function formAjoutCapteur()
    {
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        
        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        
        return view('formAjoutCapteur' , ['user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
    }
    
    public function enregistrerCapteur()
    {
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        
        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
                
        request()->validate([
            'id_sensor' => ['required'],
        ]);
        
        $id_sensor = Request::input('id_sensor'); 
        $Save_Sensor = new Save_Sensor();
        
        $date_ajout_sensor = $Save_Sensor->getDate_heure_ajout($id_sensor);
        
        if($date_ajout_sensor != NULL)
        {
            $date_plus_cinq=$date_ajout_sensor->date_heure_ajout+300;
            if($date_plus_cinq < time())
            {
                $error = 'Ce capteur existe mais le délai de 5 minutes est dépassé ';
                return view('formAjoutCapteur',['error' => $error,'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
            } else {
                $succes = $Save_Sensor->ajout_capteur($id_sensor,Auth::user()->iduser,$date_ajout_sensor->name_sensor);
                return view('formAjoutCapteur',['succes' => $succes,'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
            }
        }else {
            $error = 'Ce numéro ne semble pas valide';
            return view('formAjoutCapteur',['error' => $error,'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
        }
    }
}   
