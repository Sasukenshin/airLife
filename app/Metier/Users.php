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
    
}
