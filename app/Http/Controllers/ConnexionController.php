<?php
namespace App\Http\Controllers;

use Request;

use App\Metier\Users;



class ConnexionController extends Controller {

  

    

    public function signIn() {
       
     
        $login = Request::input('login');
        $pwd = Request::input('pwd');
        $unUtilisateur = new Users();
       
        $connected = $unUtilisateur->login($login, $pwd);
        
        if($connected)
        {
         return redirect('/');
            
        } else {
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }

    /* Créer l'appel de déconnexion d'un utilisateur 
     * et renvoie sur la page d'accueil.
     */
       
    public function signOut() {
       $unUtilisateur = new Users();
        $unUtilisateur->logout();
        return redirect('/');
    }

    
   

}
