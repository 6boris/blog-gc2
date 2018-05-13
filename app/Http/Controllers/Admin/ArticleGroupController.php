<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\AccessLog;
use App\Models\ArticleGroup;

use App\Extend\MsResult;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleGroupController extends Controller
{
         /**
     * 查看文章列表
     * Route::get('/users', 'UsersController@index')->name('users.index');
     *
     * @return void
     */
    public function index(){
        $res = DB::table('article_group')->get();
        return view("admin.articlegroup.index")->with('article_groups',$res);
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
    public function destroy(){
        return "删除指定文章";
    }
    
}
