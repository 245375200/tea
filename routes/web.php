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
// 定义后台不登录不能进入后台首页
Route::get('/admin/login','admin\LoginController@index');
Route::post('/admin/login','admin\LoginController@dologin');

// 后台
Route::group(['prefix'=>'admin','middleware'=>'checkUser'],function(){
	// 后台首页
	Route::get('/','admin\IndexController@index');
	// 后台退出
	Route::get('/logout','admin\LoginController@logout');
	// 后台订单系统
	Route::resource('/order','admin\OrderController');
	// 后台用户管理
	Route::resource('/demo','admin\UserController');
	Route::get('/status/{id}/{status}','admin\UserController@status');
	// 后台轮播图管理
	Route::resource('/figure','admin\FigureController');
	// 后台商品管理
	Route::resource('/cates','admin\CatesController');
    Route::get('/catesSon/{Gid}','admin\CatesController@createSon');
    Route::post('/catesSon','admin\CatesController@storeSon');
    Route::get('/status/{Gid}/{status}','admin\CatesController@status');
});


// 后台评论管理
Route::resource('/comments','admin\CommentsController');
Route::get('/comments/edit/{status}/{id}','admin\CommentsController@edit');







