<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use DB;

class Users extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    
    public $timestamps = false;
    
    protected $fillable = ['login', 'password', 'firstname', 'lastname', 'email'];   
    
}
