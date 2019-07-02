<?php

namespace App\Http\Controllers;
use Request;
use App\Metier\HomeModel;
use App\metier\Users;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller 
{
    public function HomeController() 
    {
        $model = new HomeModel();
    }
    
    public function home() 
    {
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }      
        
        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        
        $model = new HomeModel();
        $datas = $model->getDatas();
        $sensors = $model->getSensors();
        $datastype = $model->getDatasType();
        $datastypesensor = $model->getDatasTypeSensor();
        return view('accueil', ['datas' => $datas, 'sensors' => $sensors, 'datastype' => $datastype, 'datastypesensor' => $datastypesensor, 'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
    }
}