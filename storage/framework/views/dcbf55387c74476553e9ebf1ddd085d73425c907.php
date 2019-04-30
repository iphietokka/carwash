<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/washing_plan/create.blade.php */ ?>
  
<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Create User
<small>Admin panel</small>
</h1>
<ol class="breadcrumb">
<li><a href="<?php echo e(url('admin')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">user</li>
</ol>
</section>
<section class="content">
<div class="row">
<div class="col-md-6">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Create User</h3>
</div>
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
    <button type="button" class="btn btn-default btn-add" data-toggle="modal" data-target="#washing_plan_Modal">Add Plan</button>
  </div>
  <!-- Create Washing Plan Modal -->
  <div id="washing_plan_Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Washing Plan</h4>
        </div>
       <form method="POST" action="<?php echo e(url('admin/washing_plan/store')); ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?> 
          <div class="modal-body">
            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
              <div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="username" name="username" required="">
    </div>
    
</div>
                <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
            </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group pull-right">
           
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-info pull-right">Simpan</button>

            </div>
          </div>
       </form>
      </div>
    </div>
  </div>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>