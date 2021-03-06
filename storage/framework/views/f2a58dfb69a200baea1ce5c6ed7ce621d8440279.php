<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/team_task/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit Task
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
<h3 class="box-title">Edit Task</h3>
</div>
<form method="POST" action="<?php echo e(url('admin/team_task/edit')); ?>" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Team</label>
    <div class="col-sm-9">
      <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
        <select class="form-control" name="team_id" style="width: 100%;">
        	 <option value="<?php echo e($data->team_id); ?>" selected=""><?php echo e(Helper::getDetail('teams', $data->team_id,'name','id')); ?></option>

                                    <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($v->id); ?>"><?php echo e($v->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Costumer</label>
    <div class="col-sm-9">
        <select class="form-control" name="user_id" style="width: 100%;">
        	 <option value="<?php echo e($data->user_id); ?>" selected=""><?php echo e(Helper::getDetail('users', $data->user_id,'name','id')); ?></option>

                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($v->id); ?>"><?php echo e($v->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Task</label>
    <div class="col-sm-9">
         <textarea class="form-control" rows="5" name="task"><?php echo e($data->task); ?></textarea>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
         <select class="form-control" name="status_id" style="width: 100%;">
        	 <option value="<?php echo e($data->status_id); ?>" selected=""><?php echo e(Helper::getDetail('statuses', $data->status_id,'status','id')); ?></option>
        	<?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($st->id); ?>"><?php echo e($st->status); ?></option>
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