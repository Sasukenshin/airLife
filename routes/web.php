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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/info-capteurs', function () {
    return view('info-capteurs');
});

Route::get('/info-air', function () {
    return view('info-air');
});

Route::post('/login', 'ConnexionController@signIn');

Route::get('/getLogout', 'ConnexionController@signOut');
