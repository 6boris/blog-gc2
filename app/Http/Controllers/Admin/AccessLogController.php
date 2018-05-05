<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use App\Extend\MsResult;


class AccessLogController extends Controller
{
     /**
     * 查看文章列表
     * Route::get('/users', 'UsersController@index')->name('users.index');
     *
     * @return void
     */
    public function index(Request $request){
        $res = AccessLog::take(10)->get();
        // dd($res);
        return view("admin.syslog.access.index")->with("logs",$res);
    }
    
    /**
     * 查看单个文章
     * Route::get('/users/{user}', 'UsersController@show')->name('users.show');
     * 
     * @return void
     */
    public function show(){
        return "查看单个文章";
    }

    /**
     * 进入新建文章页面
     * Route::get('/users/create', 'UsersController@create')->name('users.create');
     *
     * @return void
     */
    public function create(Request $request){
        return "进入新建文章页面";
    }

    /**
     * 保存某篇文章
     * Route::post('/users', 'UsersController@store')->name('users.store');
     *
     * @return void
     */
    public function store(){
        return "保存某篇文章";
    }

    /**
     * 进入编辑指定文章页面
     * Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
     *
     * @return void
     */
    public function edit(){
        return "进入编辑指定文章页面";
    }
    /**
     * 更新指定文章
     * Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
     *
     * @return void
     */
    public function update(){
        return "更新指定文章";
    }

    /**
     * 删除指定文章
     * Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
     *
     * @return void
     */
    public function destroy($id){
        $ms = new MsResult();
        $ms->status = 1;
        $ms->message = "系统错误";
        
        return $ms->toJson();
    }
}
