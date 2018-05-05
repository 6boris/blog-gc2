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
	Route::get('','IndexController@index');
	Route::group(['prefix' => 'user'],function(){
		Route::get('index','UserController@index');
		Route::get('edit','UserController@edit');
	});
	Route::group(['prefix' => 'syslog'],function(){
		Route::resource('access' , "AccessLogController");
	});
});

Route::group(['prefix' => 'api','namespace' => 'Api'],function(){
	Route::group(['prefix' => 'user'],function(){
		Route::resource('users' , "UserController");
		Route::get('demo','UserController@index');

	});

});
