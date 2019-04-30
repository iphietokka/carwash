<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/auth/register.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CarWash| Register</title>
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

    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datepicker/datepicker3.css')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>CAR</b>WASH</a>
  </div>
  <!-- /.login-logo -->
  <div class="register-box-body">
    <p class="register-box-msg">Sign up to start your session</p>

    <form action="<?php echo e(route('register')); ?>" method="post">
        <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
       <input id="username" type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e(old('username')); ?>" required autofocus placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php if($errors->has('username')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('username')); ?></strong>
             </span>
            <?php endif; ?>
      </div>
        <div class="form-group has-feedback">
       <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('username')); ?>" required autofocus placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <?php if($errors->has('name')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('name')); ?></strong>
             </span>
            <?php endif; ?>
      </div>

        <div class="form-group has-feedback">
       <input id="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email Address">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php if($errors->has('email')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('email')); ?></strong>
             </span>
            <?php endif; ?>
      </div>

        <div class="form-group has-feedback">
       <input  type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" autofocus placeholder="Phone no.">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          <?php if($errors->has('phone')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('phone')); ?></strong>
             </span>
            <?php endif; ?>
      </div>
         <div class="form-group has-feedback">
       <input  type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" value="<?php echo e(old('address')); ?>" autofocus placeholder="Address">
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
          <?php if($errors->has('address')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('address')); ?></strong>
             </span>
            <?php endif; ?>
      </div>
       <div class="form-group has-feedback">
       <input id="datepicker"  type="date" class="form-control<?php echo e($errors->has('date_birthday') ? ' is-invalid' : ''); ?>" name="date_birthday" value="<?php echo e(old('date_birthday')); ?>" autofocus placeholder="Date of Birthday">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          <?php if($errors->has('date_birthday')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('date_birthday')); ?></strong>
             </span>
            <?php endif; ?>
      </div>

        <div class="form-group has-feedback">
      <label>
              <input type="radio" name="sex" class="minimal" value="Male">
               Male
                </label>
                <label>
                  <input type="radio" name="sex" class="minimal" value="Female">
                  Female
                </label>
          <?php if($errors->has('sex')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('sex')); ?></strong>
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
       <div class="form-group has-feedback">
     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          
      </div>
       <input type="hidden" name="role" value="C">
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
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
    <a href="<?php echo e(route('login')); ?>" class="text-center">Back to Login</a>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
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
