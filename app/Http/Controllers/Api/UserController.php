<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 显示文章列表
     *
     * @return void
     */
    public function index(){
        return "show all";
    }
    
    /**
     * 创建文章表单页面
     *
     * @return void
     */
    public function show(){
        return "show id";
    }

    /**
     * 将创建的文章存到存贮器
     *
     * @return void
     */
    public function create(){
        return "create";
    }

    /**
     * 显示指定文章
     *
     * @return void
     */
    public function store(){
        return "store";
    }

    /**
     * 显示编辑指定文章的表单页面
     *
     * @return void
     */
    public function edit(){
        return "edit";
    }
    /**
     * 在存储器中更新指定文章
     *
     * @return void
     */
    public function update(){
        return "update";
    }

    /**
     * 删除指定文章
     *
     * @return void
     */
    public function destroy(){
        return "destory";
    }
}
