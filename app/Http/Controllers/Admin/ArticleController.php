<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\AccessLog;
use App\Models\ArticleGroup;

use App\Extend\MsResult;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{

     /**
     * 查看文章列表
     * Route::get('/users', 'UsersController@index')->name('users.index');
     *
     * @return void
     */
    public function index(){

        // 获取文章信息
        $res = DB::table("article")
                ->leftJoin('user', 'article.u_id', '=', 'user.id')
                ->leftJoin('article_group', 'article.a_g_id', '=', 'article_group.id')
                ->select('article.id','article.a_g_id','article.u_id','article.a_name',
                        'article.a_content', 'article.created_at','article.updated_at',
                        'article_group.a_g_name','user.u_name')
                ->get(); 
        return view('admin.article.index')->with("articles",$res);;
    }
    
    /**
     * 查看单个文章
     * Route::get('/users/{user}', 'UsersController@show')->name('users.show');
     * 
     * @return void
     */
    public function show($id){
        $art = DB::table('article')
                    ->leftJoin('article_group', 'article.a_g_id', '=', 'article_group.id')
                    ->where('article.id', '=', $id)
                    ->select('article.id', 'article.a_name','article.a_content', 'article.a_g_id')
                    ->get();
        $ag = DB::table('article_group')
                    ->select('id', 'a_g_name')
                    ->get();
        // dd($art);
        return view('admin.article.show')->with('article', $art[0])->with('article_groups', $ag);
    }

    /**
     * 进入新建文章页面
     * Route::get('/users/create', 'UsersController@create')->name('users.create');
     *
     * @return void
     */
    public function create(Request $request){
        $ag = DB::table('article_group')
            ->select('id', 'a_g_name')
            ->get();
        return view('admin.article.create')->with('article_groups',$ag);
    }

    /**
     * 创建某篇文章方法
     * Route::post('/users', 'UsersController@store')->name('users.store');
     *
     * @return void
     */
    public function store(Request $request){
        $ms = new MsResult();
        $art = new Article();
        if((int)$request->input('id'))
        $art->id = (int)$request->input('id');
        $art->a_name = $request->input('name');
        $art->a_g_id = $request->input('g_id');
        $art->a_content = htmlspecialchars( $request->input('content') );
        $art->save();

        // $art= DB::table('article')
        //                     ->where('id', '=', (int)$request->input('id'))
        //                     ->update([
        //                         'a_name'    => $request->input('name'),
        //                         'a_g_id'    => $request->input('g_id'),
        //                         'a_content' => htmlspecialchars( $request->input('content') ),
        //                     ]);
        if($art){
            $ms->status = 0;
            $ms->message = "保存成功!";
        }
        return $ms->toJSON();
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
    public function update($id , Request $request){
        $ms = new MsResult();
        $art = new Article();

        // 更新文章信息
        $res = DB::table('article')
                    ->where('id', '=', $id )
                    ->update([
                        'a_name' => $request->input('name'),
                        'a_g_id' => $request->input('g_id'),
                        'a_content' => htmlspecialchars( $request->input('content') )
                    ]);

        $ms->status = 0;
        $ms->message = "保存成功!";
        $ms->data = $art->update();

        return $ms->toJson();
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
