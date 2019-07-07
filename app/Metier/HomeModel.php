<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
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


    public function getDatas() {
       $datas = DB::table('datas')
            ->select('datas.IDDATA',	'datas.IDSENSOR',	'datas.IDDATATYPE',	'datas.DATETIMEDATA',	'datas.DATASENSOR',	'datatype.LIBELLE')
            ->leftJoin('datatype', 'datas.IDDATATYPE', '=', 'datatype.IDDATATYPE')
            ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'datas.IDSENSOR')
            ->where('IDUSER', '=', Session::get('id')) 
            ->orderBy('datas.DATETIMEDATA','desc')
            ->get();
        return $datas;
    }
    public function getSensors() {
        $datas = DB::table('sensor')
        ->select()
        ->where('IDUSER', '=', Session::get('id')) 
        ->get(); 
 
         return $datas;
     }
     public function getDatasTypeSensor() {
        $datas = DB::table('to_capture')
        ->select('datatype.LIBELLE','sensor.NAMESENSOR')
        ->leftJoin('datatype', 'to_capture.IDDATATYPE', '=', 'datatype.IDDATATYPE')
        ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'to_capture.IDSENSOR')
        ->where('IDUSER', '=', Session::get('id')) 
        ->groupBy('datatype.LIBELLE','sensor.NAMESENSOR')
        ->get(); 
 
         return $datas;        
     }
     public function getDatasType() {
        $datas = DB::table('to_capture')
        ->select('datatype.IDDATATYPE','datatype.LIBELLE')
        ->leftJoin('datatype', 'to_capture.IDDATATYPE', '=', 'datatype.IDDATATYPE')
        ->leftJoin('sensor', 'sensor.IDSENSOR', '=', 'to_capture.IDSENSOR')
        ->where('IDUSER', '=', Session::get('id'))
        ->groupBy('datatype.IDDATATYPE','datatype.LIBELLE')
        ->get(); 
         return $datas;        
     }
}