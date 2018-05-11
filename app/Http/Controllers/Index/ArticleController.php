<?php

namespace App\Http\Controllers\Index;

use App\Models\Article;
use App\Models\AccessLog;
use App\Models\ArticleGroup;

use Markdown; 
use App\Extend\MsResult;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function demo(){
        return view('index.article.demo');
    }
    public function show($id){
        $art = DB::table('article')
                ->leftJoin('article_group', 'article.a_g_id', '=', 'article_group.id')
                ->where('article.id', '=', $id)
                ->select('article.id', 'article.a_name','article.a_content', 'article.a_g_id')
                ->get()[0];

        $ag = DB::table('article_group')
                ->select('id', 'a_g_name')
                ->get();
        $art->a_content = Markdown::convertToHtml($art->a_content);

        return view('index.article.show')->with('article', $art)->with('article_groups', $ag);
    }
}
