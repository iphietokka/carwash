<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/flash-message.blade.php */ ?>
<?php if($message = Session::get('success')): ?>
<div class="callout callout-success">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
<?php if($errors->any()): ?>
	
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="callout callout-warning">
			<button type="button" class="close input-group-sm" data-dismiss="alert">×</button>	
			<strong><?php echo e($error); ?></strong>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php endif; ?>



<?php if($message = Session::get('warning')): ?>
<div class="callout callout-warning">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div class="callout callout-info">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>