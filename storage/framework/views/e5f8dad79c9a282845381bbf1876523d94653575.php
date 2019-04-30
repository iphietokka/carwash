 
<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    
        <li class="active">User profile</li>
      </ol>
    </section>
     <section class="content">
 <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
           
              <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset('images/users')); ?>/<?php echo e(Auth::user()->photo); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>

              <p class="text-muted text-center"><?php echo e(Auth::user()->role == 'A' ? 'Administrator' : 'Subscriber'); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo e(Auth::user()->email); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right"><?php echo e(Auth::user()->sex == 'M' ? 'Male' : 'Female'); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Date Of Birth</b> <a class="pull-right"><?php echo e(Auth::user()->date_birthday); ?></a>
                </li>
                 <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"><?php echo e(Auth::user()->phone ? Auth::user()->phone : '-'); ?></a>
                </li>
                 <li class="list-group-item">
                  <b>Address</b> <a class="pull-right"><?php echo e(Auth::user()->address); ?></a>
                </li>
              </ul>

              <a href="<?php echo e(url('user/profile/edit', Auth::user()->id)); ?>" class="btn btn-primary "><b>Edit</b></a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
       
          <!-- /.box -->
        </div>
        <!-- /.col -->
     
        <!-- /.col -->
      </div>
 </section>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/user/profile/index.blade.php */ ?>