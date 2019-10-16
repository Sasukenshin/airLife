<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use DB;


class Users extends Model implements Authenticatable
{
    protected $primaryKey = 'iduser';

    use BasicAuthenticatable;
    use \Illuminate\Notifications\Notifiable;

    public $timestamps = false;

    protected $fillable = ['login', 'password', 'firstname', 'lastname', 'email', 'confirmation_token'];

    public function getRememberTokenName()
    {
        return '';
    }

    public function setSession($user_email)
    {
        $iduser = DB::table('users')
          ->Select()
          ->where('email', '=', $user_email)
          ->first();

        if($iduser)
        {
            Session::put('id', $iduser->iduser);
        }
        return $iduser;
    }



    public function getClient($id) {
        $client = DB::table('users')
            ->Select('FIRSTNAME', 'LASTNAME',  'EMAIL')
            ->Where('IDUSER', '=', $id)
            ->first();
        return $client;
    }

    //Dialogue aves la bdd pour modifier le profil d'un utilisateur
    public function modificationProfil($id, $adresse, $password, $mail, $firstname,$lastname) {
        $password = password_hash($password,PASSWORD_DEFAULT);
        DB::table('users')->where('IDUSER', $id)
            ->update(['FIRSTNAME' => $firstname, 'LASTNAME' => $lastname, 'password' => $password, 'EMAIL' => $mail]);
    }




public function insertIDOneSignal($player_id_navigateurs,$id)
{
    DB::table('users')->where('IDUSER', $id)
        ->update(['player_id_navigateurs' => $player_id_navigateurs]);
}

    }