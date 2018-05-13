@extends('admin.layouts.app')
@section('title', '访问日志')


@section('mycss')
<link href="https://cdn.bootcss.com/datatables/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<!-- 主要内容（开始） -->
<!-- 顶部路径提示（开始） -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>首页</h2>
        <ol class="breadcrumb">
            <li> 
                <a href="{{URL('admin')}}">首页</a>
            </li>
            <li>
                <strong>系统日志</strong>
            </li>
            <li class="active">
                <a href="{{URL('admin/syslog/access')}}">访问日志</a>
            </li>
        </ol> 
    </div>
</div>
<!-- 顶部路径提示（结束） -->

<!-- 主体内容（开始） -->

        <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content" id="art">
                            {{$article->a_content}}
                        </div>
                    </div>
                </div>
            </div>


        </div>


<!-- 主体内容（结束） -->

<!-- 主要内容（结束） -->

@endsection


@section('myjs')
<script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/js/plugins/dataTables/datatables.min.js"></script>
<script>
</script>
@endsection