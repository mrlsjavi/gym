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
    return view('welcome');
});


Route::resource('cliente', 'clientController');
Route::resource('tipoMembresia', 'tipoMembresiaController');
Route::resource('membresia', 'membresiaController');
Route::resource('afiliacion', 'afiliacionController');

Route::resource('producto', 'productoController');