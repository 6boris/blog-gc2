<?php

namespace App\Http\Controllers\Admin;

use Crypt;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DemoController extends Controller
{
    public function demo(Request $request){

        

        $user = new User();
        $res = $user->get();
        dd($res);
        return;

        $user->username =  "admin";
        $user->password =  Crypt::encrypt("123456");
        $user->email =  "admin@qq.com";
        $user->realname =  "超级管理员";
        print_r($user->save());
    }
}
