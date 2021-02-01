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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/altaconciertos','AltaConciertosController@index')->name('eventos.index');
Route::get('/altaconciertos/create','AltaConciertosController@create')->name('eventos.create');
Route::post('/altaconciertos','AltaConciertosController@store')->name('eventos.index');

