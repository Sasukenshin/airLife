<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model {

    protected $table = 'users';
    protected $primaryKey = 'IDUSER';
    public $timestamps = false;
    protected $fillable = [
        'IDUSERS',
        'FIRSTNAMEUSER',
        'NAMEUSER',
        'LOGIN',
        'PASSWORD',
   
        ];

       public function login($login, $pwd) {
        $connected = false;
        $admin = DB::table('users')
                ->select()
                ->where('LOGIN', '=', $login)                
                ->first();
                print_r($admin);
                die("Model User");
        if ($admin) {
            if ($admin->PASSWORD == $pwd) {
                Session::put('id', $admin->IDUSER);
                $connected = true;
            }
        }
        return $connected;
    }

    //Dialogue avec la bdd pour déconnecter un utilisateur
    public function logout() {
        Session::put('id', 0);
    }
}