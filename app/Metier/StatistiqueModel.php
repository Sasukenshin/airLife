<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class StatistiqueModel extends Model {

    protected $table = 'datas';
    protected $primaryKey = 'IDDATA';
    public $timestamps = false;
    protected $fillable = [
        'IDDATA',
        'IDSENSOR',
        'DATETIMEDATA',
        'DATASENSOR'   
        ];

        
    public function getStatParCapteur()
    {
        $datas = DB::select(
            DB::raw(
                "SELECT rr.IDSENSOR ,rr.NAMESENSOR as CAPTEUR,NB_RELEVE, DATEDIFF(rr.MaxTime,ss.MinTime) AS DUREE_VIE
                FROM (
                    SELECT sensor.IDSENSOR,sensor.NAMESENSOR,count(*) as NB_RELEVE, MAX(DATETIMEDATA) AS MaxTime
                    FROM sensor
                    LEFT JOIN users ON sensor.IDUSER = users.IDUSER
                    LEFT JOIN datas ON sensor.IDSENSOR = datas.IDSENSOR
                    GROUP BY sensor.IDSENSOR,sensor.NAMESENSOR
                ) AS rr
                LEFT JOIN
                (
                    SELECT sensor.IDSENSOR,sensor.NAMESENSOR, MIN(DATETIMEDATA) AS MinTime
                    FROM sensor
                    LEFT JOIN users ON sensor.IDUSER = users.IDUSER
                    LEFT JOIN datas ON sensor.IDSENSOR = datas.IDSENSOR
                    GROUP BY sensor.IDSENSOR,sensor.NAMESENSOR
                ) AS ss ON rr.IDSENSOR = ss.IDSENSOR;"
            )
        );
        return $datas;
    }
    public function getStatParGaz($dateDebut,$dateFin)
    {
        $datas = DB::table('sensor')
            ->select('sensor.IDSENSOR', 'sensor.NAMESENSOR as CAPTEUR', 'datas.DATASENSOR as RELEVE')
            ->leftJoin('users', 'sensor.IDUSER', '=', 'users.iduser')
            ->leftJoin('datas', 'sensor.IDSENSOR', '=', 'datas.IDSENSOR')
            ->where('DATETIMEDATA', '>', $dateDebut)  
            ->where('DATETIMEDATA', '<', $dateFin)  
            ->orderBy('sensor.IDSENSOR','datas.DATASENSOR')
            ->get();
        return $datas;
    }
    

}