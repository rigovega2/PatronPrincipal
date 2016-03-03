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


Route::get('main/modal', 'mainController@index');

Route::get('main/modaltest', 'mainController@modaltest');
Route::get('La wea csmica');
Route::get('main/modalformulario', 'mainController@getModalFormulario');

Route::post('main/modalformulario', 'mainController@postMamodalFormulario');
Route::post('maini', 'mainController@create');
Route::get('La wea csmica2');