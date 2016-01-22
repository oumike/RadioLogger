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

Route::get('/', 'FrontController@index');

Route::get('observation', 'ObservationController@index');
Route::post('observation', 'ObservationController@add');
Route::post('observation', 'ObservationController@addStation');
Route::post('observation', 'ObservationController@addRadioShow');
