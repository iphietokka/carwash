<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Edit User
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
<h3 class="box-title">Edit User</h3>
</div>
<form method="POST" action="<?php echo e(url('admin/user/edit')); ?>" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
    	 <input type="hidden" class="form-control" value="<?php echo e($data->id); ?>" name="id">
        <input type="text" class="form-control" placeholder="username" name="username" required="" value="<?php echo e($data->username); ?>">
    </div>
    
</div>
<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
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
        <input type="text" class="form-control" placeholder="Phone" name="address" value="<?php echo e($data->address); ?>">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Dob</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Phone" name="date_birthday" value="<?php echo e($data->date_birthday); ?>">
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Role User</label>
    <div class="col-sm-9">
        <select class="form-control" name="role" style="width: 100%;">
        	 <?php if(Auth::user()->role == 'A'): ?>
            <option value="<?php echo e($data->role); ?>"><?php echo e($data->role == 'A' ? 'Administrator' : 'Customer'); ?></option>

            <option value="A">Administrator</option>
            <option value="C">Customer</option>
            <?php endif; ?>
        </select>
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
 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Photo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="photo" name="photo">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" placeholder="password" name="password">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Re-Password</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
    </div>
</div>
</div>
<div class="box-footer">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-info pull-right">Save</button>
</div>
</form>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/user/edit.blade.php */ ?>