<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeModel extends Model {

    protected $table = 'datas';
    protected $primaryKey = 'IDDATA';
    public $timestamps = false;
    protected $fillable = [
        'IDDATA',
        'IDSENSOR',
        'DATETIMEDATA',
        'DATASENSOR'   
        ];


    public function getDatas($recent = false) {
        if (!$recent) {
            $datas = DB::table('datas')
                ->select('datatype.IDDATATYPE', 'datas.DATETIMEDATA as DATE', 'datatype.LIBELLE as GAZ', 'datas.DATASENSOR as VALEUR', 'sensor.NAMESENSOR as CAPTEUR')
                ->leftJoin('datatype', 'datas.IDDATATYPE', '=', 'datatype.IDDATATYPE')
                ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'datas.IDSENSOR')
                ->where('IDUSER', '=', Auth::user()->iduser) 
                ->orderBy('datas.DATETIMEDATA','desc')
                ->get();
        } else {
            $time = date("Y-m-d H:i:s",time() - 30);
            $datas = DB::table('datas')
                ->select('datatype.IDDATATYPE', 'datas.DATETIMEDATA as DATE', 'datatype.LIBELLE as GAZ', 'datas.DATASENSOR as VALEUR', 'sensor.NAMESENSOR as CAPTEUR')
                ->leftJoin('datatype', 'datas.IDDATATYPE', '=', 'datatype.IDDATATYPE')
                ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'datas.IDSENSOR')
                ->where('IDUSER', '=', Auth::user()->iduser)
                ->where('DATETIMEDATA', '>', $time) 
                ->orderBy('datas.DATETIMEDATA','desc')
                ->get();
        }
        return $datas;
    }
    public function getSensors() {
        $datas = DB::table('sensor')
        ->select()
        ->where('IDUSER', '=', Auth::user()->iduser) 
        ->get(); 
 
         return $datas;
     }
     public function getDatasTypeSensor() {
        $datas = DB::table('to_capture')
        ->select('datatype.LIBELLE','sensor.NAMESENSOR')
        ->leftJoin('datatype', 'to_capture.IDDATATYPE', '=', 'datatype.IDDATATYPE')
        ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'to_capture.IDSENSOR')
        ->where('IDUSER', '=', Auth::user()->iduser) 
        ->groupBy('datatype.LIBELLE','sensor.NAMESENSOR')
        ->get(); 
 
         return $datas;        
     }
     public function getDatasType() {
        $datas = DB::table('to_capture')
        ->select('datatype.IDDATATYPE','datatype.LIBELLE')
        ->leftJoin('datatype', 'to_capture.IDDATATYPE', '=', 'datatype.IDDATATYPE')
        ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'to_capture.IDSENSOR')
        ->where('IDUSER', '=', Auth::user()->iduser)
        ->groupBy('datatype.IDDATATYPE','datatype.LIBELLE')
        ->get(); 
         return $datas;        
     }
}