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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/demo','Admin\DemoController@demo');


Route::get('/','Index\IndexController@index');
Route::get('/login','Admin\AuthController@login');
Route::get('/register','Admin\AuthController@register');


Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
	// 后台默认页
	Route::get('','IndexController@index');

	// 用户管理
	Route::group(['prefix' => 'user'],function(){
		Route::get('index','UserController@index');
		Route::get('edit','UserController@edit');
	});
	// 文章管理

	Route::resource('article','ArticleController');
	
	// Route::group(['prefix' => 'article'],function(){
	// 	Route::get('add','ArticleController@add');
	// 	Route::get('edit','ArticleController@edit');
	// });

	// 系统日志管理
	Route::group(['prefix' => 'syslog'],function(){
		Route::resource('access' , "AccessLogController");
	});

	// 后台案列
	Route::group(['prefix' => 'demo'],function(){
		Route::get('table1' , "DemoTable1Controller@index");
	});
});

Route::group(['prefix' => 'api','namespace' => 'Api'],function(){
	Route::group(['prefix' => 'user'],function(){
		Route::resource('users' , "UserController");
		Route::get('demo','UserController@index');
	});
});
