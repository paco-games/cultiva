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

Route::resource('admin','FrontController');
Route::resource('registro','IndexController');
Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');

Route::resource('terreno','TerrenoController');
Route::resource('cultivo','CultivoController');
Route::get('terreno/vincular/cultivo/{id}', ['as' => 'cultivo.vinc', 'uses' => 'CultivoController@vincular']);

Route::get('importMunicipality','ExcelController@importMunnicipalities');

Route::resource('indexSeeds','SeedController');

Route::get('createSeeds/{id}', ['as' => 'create.seeds', 'uses' => 'SeedController@create']);
