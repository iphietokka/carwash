<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit Team's
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
<h3 class="box-title">Edit Team</h3>
</div>
<form method="POST" action="<?php echo e(url('admin/team/edit')); ?>" enctype="multipart/form-data">
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
        <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo e($data->name); ?>">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">E-Mail</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="<?php echo e($data->email); ?>">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo e($data->phone); ?>">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
       <textarea class="form-control" rows="5" name="address"><?php echo e($data->address); ?>"</textarea>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Date Birthday</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Dob" name="date_birthday" value="<?php echo e($data->date_birthday); ?>">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Photo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="photo" name="photo">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Post</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Post" name="post" value="<?php echo e($data->post); ?>">
    </div>
</div>
 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Join Date</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" placeholder="Post" name="date_join" value="<?php echo e($data->date_join); ?>">
    </div>
</div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Sex</label>
    <div class="col-sm-9">
      <label>
          <input type="radio" name="sex" class="minimal" value="Male" <?php echo e(($data->sex=="Male")? "checked" : ""); ?>>
            Male
        </label>
        <label>
          <input type="radio" name="sex" class="minimal" value="Female" <?php echo e(($data->sex=="Female")? "checked" : ""); ?>>
          Female
        </label>
      
    </div>
</div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Active</label>
    <div class="col-sm-9">
        <select class="form-control" name="status" style="width: 100%;">
        	 <?php if($data->status == 'A'): ?>
           <option value="<?php echo e($data->status); ?>"><?php echo e($data->status == 'A' ? 'Active' : 'Inactive'); ?></option>

            <option value="A">Active</option>
            <option value="I">Inactive</option>
           <?php endif; ?>
        </select>
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/team/edit.blade.php */ ?>