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
     Nexmo::message()->send([
    'to'   => '56961765325 ',
    'from' => 'NEXMO' ,
    'text' => 'Hola, prueba sms'
]);
     
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
