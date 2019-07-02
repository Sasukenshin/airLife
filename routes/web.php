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

Route::get('/', 'HomeController@home');

Route::get('/info-capteurs', 'InformationController@info_capteurs');

Route::get('/info-air', 'InformationController@info_air');

Route::get('/about', 'AboutController@about');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/connexion', 'ConnexionController@formulaire');

Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/deconnexion', 'connexionController@deconnexion');

Route::get('/confirm/{id}/{token}', 'InscriptionController@confirm');
