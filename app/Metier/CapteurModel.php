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


    public function getAllCapteurUser()
    {
        $datas = DB::table('sensor')
            ->select('sensor.IDSENSOR', 'sensor.NAMESENSOR as CAPTEUR', 'datatype.LIBELLE as GAZ')
            ->leftJoin('users', 'sensor.IDUSER', '=', 'users.iduser')
            ->leftJoin('to_capture', 'sensor.IDSENSOR', '=', 'to_capture.IDSENSOR')
            ->leftJoin('datatype', 'datatype.IDDATATYPE', '=', 'to_capture.IDDATATYPE')
            ->where('users.IDUSER', '=', Auth::user()->iduser)  
            ->orderBy('sensor.NAMESENSOR')
            ->get();
        return $datas;
    }
    
    public function deleteCapteurUser($id) 
    {
        DB::beginTransaction();
 
        try{
            // Step 1 : Create User
            DB::table('sensor')
                ->where('IDSENSOR', '=', $id)  
                ->delete();
            DB::table('to_capture')
                ->where('IDSENSOR', '=', $id)  
                ->delete();
            DB::table('datas')
                ->where('IDSENSOR', '=', $id)  
                ->delete();
 
            DB::commit();
 
            return 1;
 
        }catch(\Exception $e){
            DB::rollback();
            return 0;
        }
    }

}