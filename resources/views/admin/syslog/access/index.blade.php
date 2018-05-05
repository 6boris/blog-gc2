@extends('admin.layouts.app')
@section('title', '访问日志')


@section('mycss')
<link href="{{ URL('vendor/inspinia/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
<link href="{{ URL('vendor/inspinia/css/plugins/bootstrap-table/bootstrap-table.css') }}" rel="stylesheet">
<!-- <link href="{{ URL('vendor/inspinia/css/plugins/dataTables/jquery.dataTables.css')}}" rel="stylesheet"> -->
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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>用户列表</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP</th>
                            <th>客户端</th>
                            <th>地区</th>
                            <th>系统语言</th>
                            <th>搜索引擎</th>
                            <th>状态</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                        <tr class=""> 
                            <td> {{$log->id}} </td>
                            <td>{{$log->ip}}</td>
                            <td>Windwos 10</td>
                            <td>中国，黑龙江，哈尔滨</td>
                            <td>{{$log->language}}</td>
                            <td>Baidu</td>
                            <td><span class="btn btn-info btn-sm">正常</span></td>
                            <td>{{$log->created_at}}</td>
                            <td><a class="btn btn-danger btn-sm" id="delete">删除</a></td>
                            <!-- <td><a id="delete">删除</a></td> -->
                            <!-- <td><span class="btn btn-danger btn-xs" id="delete" ><i class="fa fa-trash-o"></i> 删除</span></td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- 主体内容（结束） -->

<!-- 主要内容（结束） -->

@endsection


@section('myjs')
<script src="{{ URL('vendor/inspinia/js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ URL('vendor/inspinia/js/plugins/bootstrap-table/bootstrap-table.js') }}"></script>

<script>

$('#delete').click(function(){
        $.ajax({
			url: "{{ URL('/admin/syslog/access/3') }}",
			type:"POST",
            method: "DELETE",
			cache: false,
			dataType: 'JSON',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(data) {
				// status=0 操作成功
				if(!data['status']){
					// alert(data['message']);
                    console.log(data);
				}else{
					alert(data['message']);
                    console.log(data);
                    
				}
				
			},
			error:function() { 
				//系统错误
				console.log('系统错误');
			}
		});
    });
</script>


<!-- <script src="{{ URL('vendor/inspinia/js/plugins/dataTables/jquery.dataTables.js')}}"></script> -->
<!-- <script>
       $(document).ready(function(){
            $('.dataTables-example').DataTable({

                pageLength: 50,
                responsive: true,
                // bInfo: true,
                // info:true,
                bAutoWidth: true,
                dom: '<"html5buttons"B>lfrtip',
                // sDom: '<"top"fli>rt<"bottom"p><"clear">',
                // bJQueryUI:true,
                bStateSave:true,
                sScrollX: "100%",
                sScrollXInner: "100%",
                bScrollCollapse: true,
                sPaginationType:'full_numbers',
                columnDefs: [
                    { className: "my_class", "targets": [ 0 ] }
                  ],

                language: {
                    emptyTable: '没有数据',  
                    loadingRecords: '加载中...',  
                    processing: '查询中...',  
                    search: '检索:',  
                    lengthMenu: '每页 _MENU_ 条记录',  
                    zeroRecords: '没有数据',  
                    paginate:{  
                        first:    '首页',  
                        last:       '尾页',  
                        next:       '下一页',  
                        previous:   '上一页'  
                    },
                    info: '第 _PAGE_ 页 / 总 _PAGES_ 页',  
                    infoEmpty: '没有数据',  
                    infoFiltered: '(过滤总件数 _MAX_ 条)'    
                },

                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });


</script> -->

<script>


</script>



    
@endsection