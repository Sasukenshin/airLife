<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class SessionController extends Controller {
    public function accessSessionData(Request $request) {

        echo Session::getId();
        if($request->session()->has('my_name'))
            echo $request->session()->get('my_name');
        else
            echo 'No data in the session';
    }
    public function storeSessionData(Request $request) {
       Session::getId();
        $request->session()->put('my_name','Virat Gandhi');
        echo "Data has been added to session";
    }
    public function deleteSessionData(Request $request) {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
    }
}