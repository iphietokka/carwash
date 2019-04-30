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
<form method="POST" action="<?php echo e(url('admin/blog/edit')); ?>" enctype="multipart/form-data">
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

         <select class="form-control" name="user_id">
          <option value="<?php echo e($data->user_id); ?>" selected=""><?php echo e(Helper::getDetail('users', $data->user_id,'name','id')); ?></option>

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="E-Mail" name="title" value="<?php echo e($data->title); ?>">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Date</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Phone" name="date" value="<?php echo e($data->date); ?>">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Details</label>
    <div class="col-sm-9">
       <textarea class="form-control" rows="5" name="details"><?php echo e($data->details); ?>"</textarea>
    </div>
   
</div>


 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Logo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="Logo" name="img">
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/blog/edit.blade.php */ ?>