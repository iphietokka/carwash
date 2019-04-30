<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit Blog
<small>Admin panel</small>
</h1>
<ol class="breadcrumb">
<li><a href="<?php echo e(url('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">user</li>
</ol>
</section>
<section class="content">
<div class="row">
<div class="col-md-8">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Edit Blog</h3>
</div>
<form method="POST" action="<?php echo e(url('admin/opening_hour/edit')); ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?> 

<?php if($errors->any()): ?>
   <div class="alert alert-danger">
      <ul>
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
   </div>
<?php endif; ?>
<div class="box-body">

<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
        <input type="hidden" class="form-control" value="<?php echo e($data->id); ?>" name="id">

         <select class="form-control" name="day">
          <option value="<?php echo e($data->day); ?>"><?php echo e($data->day); ?></option>
         <option value="Monday">Monday</option>
         <option value="Tuesday">Tuesday</option>
         <option value="Wednesday">Wednesday</option>
         <option value="Thursday">Thursday</option>
         <option value="Friday">Friday</option>
         <option value="Saturday">Saturday</option>
         <option value="Sunday">Sunday</option>
       </select>
    </div>
   
</div>
<div class="bootstrap-timepicker">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Opening</label>
    <div class="col-sm-9">
       <div class="input-group">
        <input type="text" class="form-control timepicker" placeholder="Opening" name="opening_time" value="<?php echo e($data->opening_time); ?>">
 <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
    </div>
</div>
</div>
<div class="bootstrap-timepicker">
<div class="form-group">
               <label for="inputPassword3" class="col-sm-3 control-label">Closing</label>
          <div class="col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="closing_time" value="<?php echo e($data->closing_time); ?>">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
</div>



</div>
<div class="box-footer">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-info pull-right">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/opening_hour/edit.blade.php */ ?>