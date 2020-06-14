<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::auth();

Route::get('/', 'HomeController@home')->name("accueil");
Route::get('accueil', 'HomeController@home')->name("accueil");
Route::post('refresh-accueil', 'HomeController@refresh');

Route::get('/info-capteurs', 'InformationController@info_capteurs');

Route::get('/info-air', 'InformationController@info_air');

Route::get('/about', 'AboutController@about');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscriptions', 'InscriptionController@traitement');


Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/statistique', 'StatistiqueController@getStatistiques');
Route::post('/statistique', 'StatistiqueController@getStatistiques');
Route::get('/capteur', 'CapteurController@info_capteur');
Route::post('/delete_capteur', 'CapteurController@delete_capteur');

Route::get('/connexion', 'ConnexionController@formulaire')->name("connexion");

Route::post('/connexion', 'ConnexionController@traitement');
Route::post('/connexionPanier', 'ConnexionController@traitement2');

Route::get('/deconnexion', 'ConnexionController@deconnexion');
Route::post('/deconnexionPanier', 'ConnexionController@deconnexionPanier')->name("deconnexionPanier");



Route::get('/confirm/{id}/{token}', 'InscriptionController@confirm');

Route::get('/ajout_capteur', 'AjoutCapteurController@formAjoutCapteur');


Route::post('/enregistrerCapteur', 'AjoutCapteurController@enregistrerCapteur');


//Get
Route::get('/profil', 'InscriptionController@getProfil');
Route::get('/modificationProfil', 'InscriptionController@postModifierProfil');
Route::get('/modificationPreference', 'InscriptionController@postModifierPreference');

//Post
Route::post('/modifierProfil', 'InscriptionController@modifierProfil');
Route::post('/modifierPreference', 'InscriptionController@modifierPreference');

//Getcontact
Route::get('/contact', function () {
    return view('contact');
})->name("contact");

//cgu
Route::get('/cgu', function () {
    return view('conditionsGenerales');
})->name("cgu");

Route::post('/contactMail','EmailController@sendMailContact');

//add player id pour onesignal
Route::post('/addIdOneSignal','OneSignalController@addIdOneSignal');

//get notification
Route::post('/getNotificationsUser', 'NotificationController@getNotificationsUser');

Route::get('/getNotifications', 'NotificationController@getNotificationsUserTotal')->name("notifications");




//panier
Route::post('/addpanier','PanierController@addPanier');
Route::get('/panier', 'PanierController@getPanier')->name("panier");
Route::post('/addQte','PanierController@addQte');
Route::post('/lessQte','PanierController@lessQte');
Route::post('/deleteLignePanier','PanierController@deleteLignePanier');
Route::post('/updateTransport','PanierController@updateTransport');
Route::post('/updateMoyenPaiement','PanierController@updateMoyenPaiement');
Route::post('/validerPanier', 'PanierController@traitement');
Route::post('/retourcommande', 'PanierController@retourCommande');
Route::get('/retourcommande/{panierid}', 'PanierController@retourCommande');
Route::get('/commandeValidee', 'PanierController@commandeValidee');
//Session
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


//boutique
Route::get('/boutique', 'HomeController@getBoutique')->name("boutique");



Route::get('/Commandes', 'PanierController@getlescommandes')->name("commandes");


Route::get('/pdf/{order}','PanierController@orderPdf')->name("downloadPDF");