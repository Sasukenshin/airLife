<?php

namespace App\Http\Controllers;

use App\Metier\HomeModel;

use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller 
{
    public function HomeController() 
    {
        $model = new HomeModel();
    }

    public function home() 
    {
       // Session::put('sessionClient', $value);
        $articles = DB::table('articles')->get();
        if(auth()->guest()) 
        {

           // return redirect('/connexion');
            return view('home', compact('articles'));
        }      
        
        $user_firstname = Auth::user()->firstname;
        $user_lastname = Auth::user()->lastname;
        
        $model = new HomeModel();
        $datas = $model->getDatas();
        $sensors = $model->getSensors();
        $datastype = $model->getDatasType();
        $datastypesensor = $model->getDatasTypeSensor();

        if(count($sensors) >0)
            return view('accueil', ['datas' => $datas, 'sensors' => $sensors, 'datastype' => $datastype, 'datastypesensor' => $datastypesensor, 'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname]);
        else
            return view('home', compact('articles'));

    }
    public function getBoutique()
    {

        $articles = DB::table('articles')->get();



            return view('home', compact('articles'));


    }




}