<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use DB;


class notification extends Model implements Authenticatable
{
    protected $primaryKey = 'idnotif';

    use BasicAuthenticatable;
    use \Illuminate\Notifications\Notifiable;

    public $timestamps = false;

    protected $fillable = ['userid', 'textnotification', 'datenotif'];


//renvoi la liste des notifications
    public function getNotifications($id) {
        $notifications = DB::table('notification')
            ->Select('textnotification', 'datenotif')
            ->Where('userid', '=', $id)
            ->get();
        return $notifications;
    }



    }