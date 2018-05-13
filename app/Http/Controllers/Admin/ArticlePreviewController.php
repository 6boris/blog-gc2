<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\AccessLog;
use App\Models\ArticleGroup;

use App\Extend\MsResult;
use App\Extend\Parsedown;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArticlePreviewController extends Controller
{
    public function show($id){
        $Parsedown = new Parsedown();
        $art = DB::table('article')->where('id','=',$id)->get()[0];
        // echo $Parsedown->text($art->a_content);
        $art->a_content = $Parsedown->text($art->a_content);
        // dd($art->a_content);
        // dd();
        return view('admin.preview.index')->with('article',$art);
    }
}
