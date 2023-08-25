<?php

use Illuminate\Support\Facades\Route;

Route::resource('quickussd', 'UssdController@index');
Route::group(['namespace' => 'johnnywoode\quickussd'], function () {
	//    Route::resource('ussd', 'UssdController@index');
});
