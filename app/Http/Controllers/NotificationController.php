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



class NotificationController extends Controller
{

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
                $uneNotification->datenotif = "Il y a " . $interval->d . " jour(s)";
            }

        }

        return response()->json($mesNotifications);
    }

    public function getNotificationsUserTotal()
    {

        $uneN = new notification();
        $mesNotifications = "";
        if(Auth::user()->iduser)
        {
            $mesNotifications = $uneN->getToutesLesNotifications(Auth::user()->iduser);
        }
    return view("notifications", compact('mesNotifications'));
    }
}
