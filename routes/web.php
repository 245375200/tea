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

// 前台"首页"链接的路由
Route::get('/homeindex',function(){
	 return view('welcome');
});

// 前台首页的各个链接除了'首页'的连接
Route::group(['prefix'=>'home'],function(){
	// Route::get('/logout','home\IndexController@logout');
	Route::get('/login','home\IndexController@login');
	Route::get('/registered','home\IndexController@registered');
	Route::get('/shopping_cart','home\IndexController@shopping_cart');
	Route::get('/Product_List','home\IndexController@product');
	Route::get('/Gun_Ming','home\IndexController@gunming');
	Route::get('/Guan_Ming','home\IndexController@guanming');
	Route::get('/Zang_Tang','home\IndexController@zangtang');
	Route::get('/Da_Ba','home\IndexController@daba');
	Route::get('/Da_Zhou','home\IndexController@dazhou');

});

// 获取验证码
Route::get('/capch/{tmp}','home\LoginController@capch');

// 前台登录的提交
Route::post('home/login','home\LoginController@dologin');

// 前台找回密码
 Route::post('/home/Fpass','home\PassController@findPass');
// Route::post('home/updatepass/{ $list->id }','home\UsersController@updatepass');
Route::resource('/home/findpass','home\PassController');//用了里面的index方法

// 前台用户资源控制器
Route::resource('/homeusers','home\UsersController');

// 前台登录页面的提交   中间件
Route::group(['prefix'=>'home','middleware' => 'checkUser'],function(){
	Route::get('/logout','home\LoginController@logout');
	Route::get('/','home\IndexController@index');
});	

