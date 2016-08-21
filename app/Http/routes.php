<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
    return view('index');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('inicio', function () {
    return view('inicio');
});
Route::get('principal', function () {
    return view('princi');
});
Route::get('welcome', function () {
    return view('welcome');
});
/*Route::get('admin', function(){
    return view('admin');
});
*/
//D.R.G
resource('sector','SectorController');
resource('grupo','GrupoController');
resource('luminaria','LuminariaController');
resource('lampara','LamparaController');

Route::get('admin','FrontController@admin');
//Route::get('london','FrontController@london');
Route::resource('pisos', 'PisoController', ['only' => ['index', 'store', 'show','edit', 'update', 'destroy']]);
