<?php

use Illuminate\Support\Facades\Route;

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
    return "welcome";
});

Route::get('contacto', function(){
	return "bienvenido a contacto";
});


Route::get('saludos/{$nombre?}', function($nombre="invitado"){
 return "welcome" . $nombre;
});
Route::get('saludoos', function(){
 return "welcome";
});