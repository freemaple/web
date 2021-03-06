<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'Api', 'prefix' => 'api'], function(){
	Route::any('/home', ['as'=> 'api_home','uses' => 'SiteController@index']);
	Route::any('/list', ['as'=> 'api_home','uses' => 'SiteController@getList']);
});
