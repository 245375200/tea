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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'home'],function(){
	Route::get('/logout','home\IndexController@logout');
	Route::get('/login','home\IndexController@login');
	Route::get('/registered','home\IndexController@registered');
	Route::get('/shopping_cart','home\IndexController@shopping_cart');
});

Route::post('home/login','home\LoginController@dologin');

Route::group(['prefix'=>'home','middleware' => 'checkUser'],function(){
	Route::get('/logout','home\LoginController@logout');
	//Route::get('/','admin\IndexController@index');
});	

