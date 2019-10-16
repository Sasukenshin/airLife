<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\metier\Users;
use Illuminate\Support\Facades\Auth;


class OneSignalController extends Controller
{
    public function addIdOneSignal(Request $request) //recupere un appel ajax afin de mettre à jour le playerid navigateur d'un user
    {


        $response = array(
            'status' => 'success',
            'idsginal' => $request->id_onesignal,
        );

        $player_id_navigateurs = $response['idsginal'];

        if(Auth::user()->iduser)
        {
          $unC = new Users();
          $unC->insertIDOneSignal($player_id_navigateurs,Auth::user()->iduser);
        }

        return response()->json($response['idsginal']);
    }


}
