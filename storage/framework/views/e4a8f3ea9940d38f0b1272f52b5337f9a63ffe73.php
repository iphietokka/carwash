<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/vehicle_type/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
  <h1>
    Edit Vehicle Type
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
          <h3 class="box-title">Edit Vehicle Type</h3>
        </div>
        <form method="POST" action="<?php echo e(url('admin/vehicle_type/edit')); ?>" enctype="multipart/form-data">
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
              <label for="inputPassword3" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-9">
                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                <input type="text" class="form-control" name="type" value="<?php echo e($data->type); ?>"></input>
              </div>
            </div>
            <div class="form-group-sm">
              <label for="inputPassword3" class="col-sm-3 control-label">Duration</label>
              <div class="col-sm-9">
                <input type="text" class="form-control iconpicker-custom" name="icon" value="<?php echo e($data->icon); ?>" ></input>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>