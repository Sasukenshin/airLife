<?php

namespace App\Http\Controllers;

use App\Metier\HomeModel;

use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller 
{
    private $model;
    public function __construct() 
    {
        $this->model = new HomeModel();
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
        $pagination = Auth::user()->pagination;
        
        $datas = $this->model->getDatas();
        $sensors = $this->model->getSensors();
        $datastype = $this->model->getDatasType();
        $datastypesensor = $this->model->getDatasTypeSensor();

        if(count($sensors) >0)
            return view('accueil', ['datas' => $datas, 'sensors' => $sensors, 'datastype' => $datastype, 'datastypesensor' => $datastypesensor, 'user_firstname' => $user_firstname, 'user_lastname' => $user_lastname, 'pagination' => $pagination]);
        else
            return view('home', compact('articles'));

    }
    public function refresh()
    {
        $datas = $this->model->getDatas(true);
        return response()->json($datas);
    }
    public function getBoutique()
    {
        $articles = DB::table('articles')->get();
            return view('home', compact('articles'));
    }




}