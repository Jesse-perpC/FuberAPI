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

Route::post('userReg','userController@index' );

Route::post('driverReg','bookingController@index' );

Route::post('booking','bookingController@booking' );

Route::post('fare','bookingController@fare' );

Route::get('view',"userController@view");





