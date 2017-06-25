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

Route::get('/cajero', function () {
  return view('cajero') ;
});
Route::post('retiro', 'Cajero@retiro');
Route::get('/intervalo', function () {
  return view('intervalo') ;
});
Route::post('ordenamiento', 'Intervalo@intervalo');
