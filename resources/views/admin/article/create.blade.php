@extends('admin.layouts.app')
@section('title', '后台首页')

@section('mycss')
<!-- <link rel="stylesheet" href="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/editor.md/css/editormd.min.css"> -->
<link rel="stylesheet" href="{{ URL('vendor/editor.md/css/editormd.min.css') }}">
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
@endsection

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li class="active">
                   <a href="{{URL('admin')}}">首页</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content  gray-bg">
        <div class="row">
        <div class="col-lg-12">a_g_name

<div class="ibox">
    <div class="ibox-title">
        <h5> 添加博客</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-4">
                <center><p>文章标题</p></center>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <center><p>文章分类</p></center>
                <select class="article_group form-control ">
                @foreach ($article_groups as $ag)
                    <option value="{{ $ag->id }}">{{ $ag->a_g_name }}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <center>
                    <p>操作</p>
                    <button class="btn btn-primary" type="submit">保存</button>
                    <button class="btn btn-primary" type="submit">预览</button>
                </center>
            </div>            
        </div>
    </div>
</div>

</div>
        </div>

    <div id="test-editormd">
        <textarea></textarea>
    </div>

    </div>
    <!-- 主体内容（结束） -->
<!-- 主要内容（结束） -->
@endsection

@section('myjs')

<!-- <script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/editor.md/editormd.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<script src="{{ URL('vendor/editor.md/editormd.min.js') }}"></script>
<script type="text/javascript">
			var testEditor;
            $(function() {    
                console.log(location.origin);            
                testEditor = editormd("test-editormd", {
                    width        : "90%",
                    height       : 800,
                    htmlDecode      : "style,script,iframe", 
                    tex             : true,
                    emoji           : true,
                    taskList        : true,
                    flowChart       : true, 
                    // markdown : "#### Setting\r\n\r\n    {\n        codeFold : true\n    }\r\n\r\n" + md,
                    theme        : (localStorage.theme) ? localStorage.theme : "dark",
                    previewTheme : (localStorage.previewTheme) ? localStorage.previewTheme : "default", 
                    editorTheme  : (localStorage.editorTheme) ? localStorage.editorTheme : "pastel-on-dark", 
                    path         : location.origin+'/vendor/editor.md/lib/',
                    onload : function() {
                        var keyMap = {
                            "Ctrl-S": function(cm) {
                                alert("Ctrl+S");
                                //return false;
                            },
                            "Ctrl-A": function(cm) { // default Ctrl-A selectAll
                                // alert("Ctrl+A");
                                cm.execCommand("selectAll");
                            },

                        };
                        this.addKeyMap(keyMap);

                    }
                    
                });
            });
        </script>

@endsection