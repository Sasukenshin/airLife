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

Route::get('/info-capteurs', 'InformationController@info_capteurs');

Route::get('/info-air', 'InformationController@info_air');

Route::get('/about', 'AboutController@about');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscriptions', 'InscriptionController@traitement');


Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/statistique', 'StatistiqueController@getStatistiques');
Route::get('/capteur', 'CapteurController@info_capteur');
Route::post('/delete_capteur', 'CapteurController@delete_capteur');

Route::get('/connexion', 'ConnexionController@formulaire')->name("connexion");

Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/deconnexion', 'ConnexionController@deconnexion');



Route::get('/confirm/{id}/{token}', 'InscriptionController@confirm');

Route::get('/ajout_capteur', 'AjoutCapteurController@formAjoutCapteur');


Route::post('/enregistrerCapteur', 'AjoutCapteurController@enregistrerCapteur');


//Get
Route::get('/profil', 'InscriptionController@getProfil');

//Post
Route::post('/postmodificationProfil', 'InscriptionController@postModifierProfil');
Route::post('/modifierProfil', 'InscriptionController@modifierProfil');

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




//add panier
Route::post('/addpanier','PanierController@addPanier');
Route::get('/panier', 'PanierController@getPanier')->name("panier");
Route::post('/addQte','PanierController@addQte');
Route::post('/lessQte','PanierController@lessQte');
Route::post('/deleteLignePanier','PanierController@deleteLignePanier');

//Session
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


//boutique
Route::get('/boutique', 'HomeController@getBoutique')->name("boutique");
