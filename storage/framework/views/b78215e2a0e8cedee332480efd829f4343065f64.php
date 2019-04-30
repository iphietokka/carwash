    
    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Contact</h3>
          <div class="pull-right">
            <a href="contact/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add User</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Logo</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Address</th>
                <th class="text-center">Website</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody><?php $a=1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($a++); ?></td>
              <td align="center">
                <img src="<?php echo e($dt->logo!='' && File::exists('images/logo/'.$dt->logo)?'/images/logo/'.$dt->logo:'/images/default.jpg'); ?>"
                width="80px" height="70px"/>
              </td>
              <td class="text-center"><?php echo e($dt->c_name); ?></td>
              <td class="text-center"><?php echo e($dt->email); ?></td>
              <td class="text-center"> <?php echo e($dt->phone); ?></td>
              <td class="text-center"><?php echo e($dt->address); ?></td>
 <td class="text-center"><?php echo e($dt->website); ?></td>  

              <td class="text-center">

                <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/'.$title.'/'.$dt->id)); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                    <input name="_method" type="hidden" value="DELETE">
      <a class="btn-floating green btn-small" href="<?php echo e(url('admin/'.$title.'/edit/'.$dt->id)); ?>">
        <i class="fa fa-edit" > </i> 
      </a>
      | 
      <a class="js-submit-confirm">
        <i class="fa fa-trash" style="color:red"> </i></a>
   

  
                  </form> 
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.col -->
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/contact/index.blade.php */ ?>