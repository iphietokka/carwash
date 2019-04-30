<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Create Task
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
<h3 class="box-title">Create </h3>
</div>
<form method="POST" action="<?php echo e(url('admin/appointment/store')); ?>" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
    <div class="col-sm-9">
        <select class="form-control" name="user_id" style="width: 100%;">
        	  <option>--Select--</option>
        	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tm->id); ?>"><?php echo e($tm->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Company</label>
    <div class="col-sm-9">
        <select class="form-control" name="vehicle_company_id" style="width: 100%;">
        	 <option>--Select--</option>
        	<?php $__currentLoopData = $vehicle_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($us->id); ?>"><?php echo e($us->vehicle_company); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Model</label>
    <div class="col-sm-9">
        <select class="form-control" name="vehicle_modal_id" style="width: 100%;">
           <option>--Select--</option>
          <?php $__currentLoopData = $vehicle_modals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($us->id); ?>"><?php echo e($us->vehicle_modal); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Type</label>
    <div class="col-sm-9">
        <select class="form-control" name="vehicle_types_id" style="width: 100%;">
           <option>--Select--</option>
          <?php $__currentLoopData = $vehicle_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($us->id); ?>"><?php echo e($us->type); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Washing Plan</label>
    <div class="col-sm-9">
        <select class="form-control" name="washing_plan_id" style="width: 100%;">
           <option>--Select--</option>
          <?php $__currentLoopData = $washing_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($us->id); ?>"><?php echo e($us->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Appointment Date</label>
    <div class="col-sm-9">
       <input type="text" class="form-control date-pick" name="appointment_date">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle No</label>
    <div class="col-sm-9">
       <input type="text" class="form-control" name="vehicle_no">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
         <select class="form-control" name="status_id" style="width: 100%;">
        	 <option>--Select--</option>
        	<?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($st->id); ?>"><?php echo e($st->status); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Time Frame</label>
    <div class="col-sm-9">
         <select class="form-control" name="time_frame" style="width: 100%;">
           <option>--Select--</option>
        
            <option value="Morning">Morning</option>
            <option value="Afternoon">Afternoon</option>
            <option value="Evening">Evening</option>
      
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Approx Hour</label>
    <div class="col-sm-9">
       <input type="text" class="form-control" name="appx_hour">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Remark</label>
    <div class="col-sm-9">
       <textarea class="form-control" name="remark" rows="5"></textarea> 
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/appointment/create.blade.php */ ?>