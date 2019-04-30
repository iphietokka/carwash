<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/payment/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit 
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
<h3 class="box-title">Edit </h3>
</div>
<form method="POST" action="<?php echo e(url('admin/payment/edit')); ?>" enctype="multipart/form-data">
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
    <label for="inputPassword3" class="col-sm-3 control-label">Discount</label>
    <div class="col-sm-9">
    	<input type="hidden" name="id" value="<?php echo e($data->id); ?>">
         <input type="text" class="form-control" name="discount" value="<?php echo e($data->discount); ?>"></input>
    </div>
</div>

<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Advance</label>
    <div class="col-sm-9">
      <input type="text" name="advance" value="<?php echo e($data->advance); ?>" class="form-control">
      
    </div>
</div>


<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Payment Mode</label>
    <div class="col-sm-9">
       <select class="form-control" name="payment_mode_id" style="width: 100%;">
           <option value="<?php echo e($data->payment_mode_id); ?>" selected=""><?php echo e(Helper::getDetail('payment_modes', $data->payment_mode_id,'mode','id')); ?></option>
          
          <?php $__currentLoopData = $payment_mode_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tm->id); ?>"><?php echo e($tm->mode); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
      
    </div>
</div>


<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Remark</label>
    <div class="col-sm-9">
    
      <textarea name="remark" class="form-control" rows="4"><?php echo e($data->advance); ?></textarea>
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