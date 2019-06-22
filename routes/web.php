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
/*
Route::get('/', function () {
    $data = Route::any('/', 'HomeController@home');
    die("Route");
    return view('accueil', ['data' => $data]);
});*/

Route::get('/', 'HomeController@home');

Route::post('/login', 'ConnexionController@signIn');

Route::get('/getLogout', 'ConnexionController@signOut');
