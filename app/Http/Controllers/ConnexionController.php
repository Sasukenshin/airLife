<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\metier\Users;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;


class ConnexionController extends Controller 
{
    protected $primaryKey = 'iduser';
    
    public function formulaire() 
    {
        if (!auth()->guest()) {
            return redirect('/');
        }

        return view('connexion');
    }

    public function traitement() 
    {
        request()->validate([
            'login' => ['required'],
            'mdp' => ['required']
        ]);

        $sessionid = Session::getId();

        $resultat = auth()->attempt([
            'login' => request('login'),
            'password' => request('mdp'),
            'confirmation_token' => null
        ]);

        if($resultat)
        {
            $panier = DB::table('panier')->where('sessionid', '=', $sessionid)->first();

            if(!is_null($panier) && isset($panier) && !empty($panier) )
            {
                DB::table('panier')->where('sessionid', '=', $sessionid)->update(['iduser' => Auth::user()->iduser]);
            }

            $user_email = Auth::user()->email;
             
            $connection = new Users();
            $connection->setSession($user_email);
             
            /* $user = new Users();
            $userId = $user->*/
            Session::put('email', Auth::user()->email);
            return redirect('/');
        }
        
        return back()->withInput()->withErrors([
            'login' => 'Vos identifiants sont incorrects.',
        ]);
    }
    
    public function deconnexion()
    {
        auth()->logout();
        return(redirect('/'));
    }    
}
