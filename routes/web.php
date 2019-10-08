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

Route::get('/','InicioController@inicio');

Route::get('/primeira', 'PrimeiraController@primeira')->name('pri');
Route::get('/segunda', 'SegundaController@segunda')->name('seg');
Route::get('/terceira', 'TerceiraController@terceira')->name('terc');