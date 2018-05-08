<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use App\Extend\MsResult;

class DemoTable1Controller extends Controller
{
    public function index(){
        $res = AccessLog::get()->take(100);
        $dd =  DataTables()->of($res)->toJson();
        // dd($dd);
        return view("admin.demo.table1")->with("logs",$res);;
    }

    public function getIoc()
    {
        return view('datatables.fluent.ioc');
    }

    public function getIocData()
    {
        $users = DB::table('users')->select(['id', 'ip', 'system', 'country', 'province', 'city', 'isrobot', 'created_at'])->take(100);
        $datatables = app('datatables');

        return $datatables->queryBuilder($users)->make(true);
    }

}
