<?php
namespace App\Http\Controllers;

use Request;
use App\Metier\HomeModel;

class HomeController extends Controller {

    public function HomeController() {
        $model = new HomeModel();
    }

    

    public function home() {
        $model = new HomeModel();
        $datas = $model->getData();
        die("Controller");
        return view('accueil', ['datas' => $datas]);
    }

    
   

}
