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
        $model = new CapteurModel();
        $capteurs_brut = $model->getAllCapteurUser();
        foreach ($capteurs_brut as  $valeur) {
            if (isset($capteurs[$valeur->CAPTEUR])) {
                $capteurs[$valeur->CAPTEUR]->GAZ .= ", ";
                $capteurs[$valeur->CAPTEUR]->GAZ .= $valeur->GAZ;

            } else {
                $capteurs[$valeur->CAPTEUR] = (object) array('GAZ' => $valeur->GAZ, 'IDSENSOR' => $valeur->IDSENSOR);
            }
        }
        return view('capteur' , ['capteurs' => $capteurs]);
    }
    
    public function delete_capteur(Request $request)
    {
        $model = new CapteurModel();
        $retour = $model->deleteCapteurUser($request['idCapteur']);
        return response()->json($retour);
    }
}
