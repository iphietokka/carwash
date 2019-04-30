<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CarWash| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?php echo e(asset('backend/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/fonts/fontawesome-webfont.woff">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/AdminLTE.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/iCheck/square/blue.css')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>CAR</b>WASH</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('warning')): ?>
                        <div class="alert alert-warning">
                            <?php echo e(session('warning')); ?>

                        </div>
                    <?php endif; ?>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
        <input id="email" type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" placeholder="Email or Username" value="<?php echo e(old('username')); ?>" autofocus="" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php if($errors->has('username')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('username')); ?></strong>
             </span>
            <?php endif; ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password" name="password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
    <?php if(Route::has('password.request')): ?>
  <a href="<?php echo e(route('password.request')); ?>">I forgot my password</a>
  <?php endif; ?>
  <br> 
    <a href="<?php echo e(route('register')); ?>" class="text-center">Register a new membership</a>


  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
 <script src="<?php echo e(asset('backend/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo e(asset('backend/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('backend/plugins/iCheck/icheck.min.js')); ?>"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
increaseArea: '20%' // optional
});
        });
    </script>
</body>
</html>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/auth/login.blade.php */ ?>