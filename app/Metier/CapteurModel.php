<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class CapteurModel extends Model {

    protected $table = 'datas';
    protected $primaryKey = 'IDDATA';
    public $timestamps = false;
    protected $fillable = [
        'IDDATA',
        'IDSENSOR',
        'DATETIMEDATA',
        'DATASENSOR'   
        ];


    public function getAllCapteurUser() {
       $datas = DB::table('sensor')
            ->select('sensor.NAMESENSOR as CAPTEUR')
            ->leftJoin('users', 'sensor.IDUSER', '=', 'users.iduser')
            ->where('users.IDUSER', '=', Auth::user()->iduser) 
            ->get();
        return $datas;
    }

}