<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayle - 注册</title>
    <link href="vendor/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="vendor/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="vendor/inspinia/css/animate.css" rel="stylesheet">
    <link href="vendor/inspinia/css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <h3>用户注册</h3>
            <form class="m-t" role="form" action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="邮箱" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">注册</button>

                <p class="text-muted text-center"><small>已经有账户?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/login">登录</a>
            </form>
            <p class="m-t"> <small>Kayle 博客 &copy; 2018</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="vendor/inspinia/js/jquery-3.1.1.min.js"></script>
    <script src="vendor/inspinia/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="vendor/inspinia/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
