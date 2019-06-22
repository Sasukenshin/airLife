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
        $datas = $model->getDatas();
        $sensors = $model->getSensors();
        $datastype = $model->getDatasType();
        $datastypesensor = $model->getDatasTypeSensor();
        return view('accueil', ['datas' => $datas, 'sensors' => $sensors, 'datastype' => $datastype, 'datastypesensor' => $datastypesensor]);
    }

    
   

}
