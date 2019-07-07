<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;


/**
 * Description of Save_Sensor
 *
 * @author Nicolas
 */
class Save_Sensor extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['id', 'id_sensor', 'date_heure_ajout','name_sensor'];
    
    public function getDate_heure_ajout($id_sensor)
    {
        $date = DB::table('save_sensor')
            ->select('date_heure_ajout','name_sensor')                    
            ->where('id_sensor', '=', $id_sensor)
            ->first();
        return $date;
    }    
    
    public function ajout_capteur($id_sensor, $id_user, $name_sensor)
    {
        $result="";
        $sensor = DB::table('sensor')
            ->select()                        
            ->where('IDSENSOR', '=', $id_sensor)
            ->first();
        if($sensor != NULL){
            $result="Le capteur à déjà été ajouté";
        } else {
            $sensor2 = DB::table('sensor')
            ->insert(['IDUSER' => $id_user, 'IDSENSOR' => $id_sensor, 'NAMESENSOR' => $name_sensor]);
            $result = 'Le capteur a été bien ajouté';
        }
        return $result;
    } 
}
