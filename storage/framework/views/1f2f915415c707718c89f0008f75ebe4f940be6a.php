<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/vehicle_model/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit Company
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
<h3 class="box-title">Edit Model</h3>
</div>
<form method="POST" action="<?php echo e(url('admin/vehicle_model/edit')); ?>" enctype="multipart/form-data">
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
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Model</label>
    <div class="col-sm-9">
    	<input type="hidden" name="id" value="<?php echo e($data->id); ?>">
         <input type="text" class="form-control" name="vehicle_modal" value="<?php echo e($data->vehicle_modal); ?>"></input>
    </div>
</div>

<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Vehicle Types</label>
    <div class="col-sm-9">
      <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
        <select class="form-control" name="vehicle_company_id" style="width: 100%;">
           <option value="<?php echo e($data->vehicle_company_id); ?>" selected=""><?php echo e(Helper::getDetail('vehicle_companis', $data->vehicle_company_id,'vehicle_company','id')); ?></option>
          
          <?php $__currentLoopData = $companis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tm->id); ?>"><?php echo e($tm->vehicle_company); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
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