<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use DB;


class Articles extends Model implements Authenticatable
{
    protected $primaryKey = 'artid';

    use BasicAuthenticatable;
    use \Illuminate\Notifications\Notifiable;

    public $timestamps = false;

    protected $fillable = ['libelle', 'description', 'prix', 'delai'];


    }