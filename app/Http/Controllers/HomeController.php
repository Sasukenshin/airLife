<?php

namespace App\Http\Controllers;

use App\Metier\HomeModel;
use App\metier\Users;
use App\metier\notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Datetime;
use DateInterval;
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



    public function getNotificationsUser(Request $request)
    {

        $uneN = new notification();
        $mesNotifications = "";
        $today = date("Y-m-d H:i:s");

        $today = DateTime::createFromFormat("Y-m-d H:i:s", $today);
        $today->add(new DateInterval('PT2H'));
        if(Auth::user()->iduser)
        {

           $mesNotifications = $uneN->getNotifications(Auth::user()->iduser);



        }
      
        foreach ($mesNotifications as $uneNotification)

        {
           // echo $uneNotification->datenotif;

            $dateTwo = DateTime::createFromFormat("Y-m-d H:i:s", $uneNotification->datenotif);
            $interval = date_diff($today, $dateTwo);

            if ($interval->h < 1)
            {
                $uneNotification->datenotif = "Il y a " . $interval->i . " minute(s)";
            }
            elseif ($interval->d <1)
            {
                $uneNotification->datenotif = "Il y a " . $interval->h . " heure(s)";
            }
            elseif ($interval->m<1)
            {
                $uneNotification->datenotif = "Il y a " . $interval->j . " jour(s)";
            }

        }


      //  return response()->json($mesNotifications);
        return response()->json($mesNotifications);
    }
}