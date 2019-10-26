<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\metier\Users;
use App\Metier\StatistiqueModel;
use Illuminate\Support\Facades\Auth;

class StatistiqueController extends Controller
{
    /*
        Statistique par Gaz
            Fonction du temp formulaire ajax
                Moyenne
                Médiane
                Mode
                Point Haut 
                Point Bas
        Statistique par capteur
            Nombre de relevé effectuer
            Durée de mise en service

     */
    public function getStatistiques()
    {      
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }
        $stat_par_capteurs = $this->getStatParCapteur();
        
        $dateFin= date("Y-m-d");
        $dateFin =  strtotime($dateFin);
        $dateFinBackEnd =  strtotime("+1 day",$dateFin);
        $dateDebut = strtotime("-1 year", $dateFin);
        $dateFin = date("Y-m-d", $dateFin);
        $dateFinBackEnd = date("Y-m-d", $dateFinBackEnd);
        $dateDebut = date("Y-m-d", $dateDebut);
        $stat_par_gaz = $this->getStatParGaz($dateDebut,$dateFinBackEnd);
        return view('statistique' , ['stat_par_gaz' => $stat_par_gaz, 'stat_par_capteurs' => $stat_par_capteurs,'dateFin' => $dateFin, 'dateDebut' => $dateDebut]);
    }
    public function getStatParCapteur()
    {  
        $model = new StatistiqueModel();
        $stat_par_capteurs_brut = $model->getStatParCapteur();
        return $stat_par_capteurs_brut;
    }
    public function getStatParGaz($dateDebut, $dateFin)
    {  
        $model = new StatistiqueModel();
        $stat_par_gaz_brut = $model->getStatParGaz($dateDebut, $dateFin);
        $id=0;
        $min=10000000000000;
        $max=-10000000000000;
        $moyenne=0;
        $mediane=[];
        $nombreReleve=0;
        $stat_par_gaz=[];

        foreach ($stat_par_gaz_brut as $counter => $valeur) {
            if (!isset($stat_par_gaz[$valeur->IDSENSOR])) {
                if (isset($stat_par_gaz[$id])) {
                    $stat_par_gaz[$id]->MOYENNE = round($moyenne / $nombreReleve,2);
                    $stat_par_gaz[$id]->MEDIANE = round($mediane[$nombreReleve/2]);
                    $stat_par_gaz[$id]->MAX = $max;
                    $stat_par_gaz[$id]->MIN = $min;
                    $stat_par_gaz[$id]->NB_RELEVE = $nombreReleve;
                    //RESET DES VARIABLES
                    $min=10000000000000;
                    $max=-10000000000000;
                    $moyenne=0;
                    $mediane=[];
                    $nombreReleve=0;
                }
                $id =$valeur->IDSENSOR;
                $stat_par_gaz[$valeur->IDSENSOR] = (object) array('CAPTEUR' => $valeur->CAPTEUR,'NB_RELEVE' => 0, 'MOYENNE' => 0, 'MEDIANE' => 0, 'MAX' => 0, 'MIN' => 0);
                $nombreReleve = 1;
                if($min>$valeur->RELEVE){
                    $min = $valeur->RELEVE;
                }
                if($max<$valeur->RELEVE){
                    $max = $valeur->RELEVE;
                }
                $moyenne = $moyenne + $valeur->RELEVE;
                $mediane[]=$valeur->RELEVE;                
            } else {
                $nombreReleve = $nombreReleve +1;
                if($min>$valeur->RELEVE){
                    $min = $valeur->RELEVE;
                }
                if($max<$valeur->RELEVE){
                    $max = $valeur->RELEVE;
                }
                $moyenne = $moyenne + $valeur->RELEVE;
                $mediane[]=$valeur->RELEVE;
            }
        }
        return $stat_par_gaz;
    }
}
