@extends('admin.layouts.app')
@section('title', '后台首页')

@section('mycss')
<!-- <link rel="stylesheet" href="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/editor.md/css/editormd.min.css"> -->
<link rel="stylesheet" href="{{ URL('vendor/editor.md/css/editormd.min.css') }}">
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
                                <input id="a_name" type="text" class="form-control" value=" {{$article->a_name}} ">
                            </div>
                            <div class="col-md-3">
                                <center><p>文章分类</p></center>
                                <select class="form-control" id="article_group">
                                @foreach ($article_groups as $ag)
                                    @if($ag->id == $article->a_g_id)
                                        <option value="{{ $ag->id }}" selected>{{ $ag->a_g_name }}</option>
                                    @else
                                        <option value="{{ $ag->id }}">{{ $ag->a_g_name }}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <center>
                                    <p>操作</p>
                                    <button class="btn btn-primary" type="submit" onclick="store( {{$article->id}} )">保存</button>
                                    <button class="btn btn-primary" type="submit">预览</button>
                                </center>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="test-editormd">
        <textarea>{{$article->a_content}}</textarea>
    </div>

    </div>
    <!-- 主体内容（结束） -->
<!-- 主要内容（结束） -->
@endsection

@section('myjs')
<script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/editor.md/js/editormd.min.js"></script>

<script type="text/javascript">
    function store(id){
        $.ajax({
			url: "{{ URL('/admin/article') }}/"+id,
			type:"POST",
            method: "PATCH",
			cache: false,
			dataType: 'JSON',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                id: {{$article->id}},
                g_id: $('#article_group').find("option:selected").val(),
                name: $('#a_name').val(),
                content: testEditor.getMarkdown()
            },
			success:function(data) {
				// status=0 操作成功
				if(!data['status']){
					alert(data['message']);
                    console.log(data);
				}else{
					alert(data['message']);
                    console.log(data);
				}
			},
			error:function() { 
				//系统错误
				console.log('系统错误!');
			}
		});
    }
</script>

<script type="text/javascript">
    var testEditor;
    $(function() {    
        testEditor = editormd("test-editormd", {
            width        : "90%",
            height       : 800,
            path         : location.origin+'/vendor/editor.md/lib/',
            theme           : 'dark',
            previewTheme    : 'default',
            editorTheme     : 'pastel-on-dark',
            htmlDecode      : "style,script,iframe", 
            tex             : true,
            emoji           : true,
            taskList        : true,
            flowChart       : true, 
            saveHTMLToTextarea : true,
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL : "./php/upload.php",
            onload : function() {
                var keyMap = {
                    "Ctrl-S": function(cm) {
                        store( {{$article->id}} );
                        // alert("Ctrl+S");
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