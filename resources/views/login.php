<!DOCTYPE html>
<!-- saved from url=(0061)https://adminlte.io/themes/AdminLTE/pages/examples/login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HyperMec | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/font-awesome/css/font-awesome.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/Ionicons/css/ionicons.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/dist/css/AdminLTE.min.css");?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/dist/css/blue.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="./login_files/css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login"><b>Hyper</b>Mec</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="auth" method="get">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <strong><?php echo $msg;?></strong>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="./login_files/jquery.min.js.download"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./login_files/bootstrap.min.js.download"></script>
<!-- iCheck -->
<script src="./login_files/icheck.min.js.download"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>


</body></html>