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
            ->select('sensor.IDSENSOR', 'sensor.NAMESENSOR as CAPTEUR', 'datatype.LIBELLE as GAZ', 'datatype.iddatatype')
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

    public function getAllSeuilUser($tab)
    {
        $seuils = [];
        foreach ($tab as $gaz) {
            $seuilPerso = DB::table('seuil')
            ->select('datatype.iddatatype', 'seuil.seuil', 'datatype.LIBELLE as gaz')
            ->leftJoin('datatype', 'seuil.iddatatype', '=', 'datatype.iddatatype')
            ->where('seuil.iduser', '=', Auth::user()->iduser)
            ->where('seuil.iddatatype', '=', $gaz)
            ->orderBy('datatype.LIBELLE')
            ->get();  
            $find = false;
            foreach ($seuilPerso as $key => $value) {
                $find = true;
            }
            if(!$find){
                $seuilCommun= DB::table('datatype')
                ->select('datatype.iddatatype','datatype.seuil', 'datatype.LIBELLE as gaz')
                ->where('datatype.iddatatype', '=', $gaz)
                ->orderBy('datatype.LIBELLE')
                ->get();  
                $seuilCommun[0]->perso = 0;
                $seuils[] = $seuilCommun[0];
            } else {
                $seuilPerso[0]->perso = 1;
                $seuils[] = $seuilPerso[0];
            }

        }
        return $seuils;
    }

    public function getCommonSeuilGaz($iddatatype)
    {
        $seuilCommun = DB::table('datatype')
        ->select('datatype.iddatatype', 'datatype.seuil', 'datatype.LIBELLE as gaz')
        ->where('datatype.iddatatype', '=', $iddatatype)
        ->get();  
        return $seuilCommun;
    }
    public function setSeuilGaz($iddatatype, $seuil)
    {
        $result = DB::table('seuil')
        ->insert(['IDUSER' => Auth::user()->iduser, 'IDDATATYPE' => $iddatatype, 'SEUIL' => $seuil]);
        return $result;
    }
    public function updateSeuilGaz($iddatatype, $seuil)
    {
        $result =DB::table('seuil')
        ->where('IDUSER', Auth::user()->iduser)
        ->where('IDDATATYPE', $iddatatype)
        ->update(['seuil' => $seuil]);
        return $result;
    }
}