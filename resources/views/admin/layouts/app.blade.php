<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <meta name="description" content=@yield('title') />
        <meta name="keywords" content=@yield('title') />
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <link href="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/css/style.css" rel="stylesheet">
        <link href="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/css/app.css" rel="stylesheet">
    </head>

        <!-- Toastr style -->
        <!-- <link href="{{ URL('vendor/inspinia/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet"> -->
        <!-- Gritter -->
        <!-- <link href="{{ URL('vendor/inspinia/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet"> -->

        @yield('mycss')

    
    <body>
        <div id="wrapper">
            <!-- 左侧菜单栏  -->
            @include('admin.layouts.navigation')  

            <!-- 右侧内容 -->
            <div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 950px; ">
                <!-- 顶部菜单 -->
                @include('admin.layouts.top')  

                <!-- 主要内容  -->
                @yield('content')
                @yield('footer')

            </div>
    
        </div>
        <!-- Mainly scripts -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/js/jquery.cookie.js"></script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.bootcss.com/metisMenu/2.7.7/metisMenu.js"></script>
        <script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
        <!-- Flot -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/flot/jquery.flot.js') }}"></script> -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script> -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/flot/jquery.flot.spline.js') }}"></script> -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/flot/jquery.flot.resize.js') }}"></script> -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/flot/jquery.flot.pie.js') }}"></script> -->
        <!-- Peity -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/peity/jquery.peity.min.js') }}"></script> -->
        <!-- <script src="{{ URL('vendor/inspinia/js/demo/peity-demo.js') }}"></script> -->

        <!-- Custom and plugin javascript -->
        <script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/js/inspinia.js"></script>
        <script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
        <!-- GITTER -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/gritter/jquery.gritter.min.js') }}"></script> -->
        <!-- Sparkline -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script> -->
        <!-- Sparkline demo data -->
        <!-- <script src="{{ URL('vendor/inspinia/js/demo/sparkline-demo.js') }}"></script> -->
        <!-- ChartJS-->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/chartJs/Chart.min.js') }}"></script> -->
        <!-- Toastr -->
        <!-- <script src="{{ URL('vendor/inspinia/js/plugins/toastr/toastr.min.js') }}"></script> -->
        
        <script src="https://kayle-vendor.oss-cn-shenzhen.aliyuncs.com/inspinia/js/app.js"></script>

        @yield('myjs')

    </body>

</html>