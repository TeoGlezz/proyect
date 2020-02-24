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


Route::get('/map','MapController@index');
Route::get('/eventos','EventoController@index');
Route::get('/eventos/getData','EventoController@getData')->name("data");
Route::get('/eventos/delete','EventoController@delete');
Route::get('/eventos/update','EventoController@update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/EventoController','EventoController@store');