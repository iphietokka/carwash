<!-- inner content -->
  <?php $__env->startSection('inner_content'); ?>
  <div id="page-banner" class="page-banner-main" style="background-image: url('<?php echo e(asset('images/bg/page-banner.jpg')); ?>')">
    <div class="container">
      <div class="page-banner-block">
        <div class="section">
          <h3 class="section-heading">Tar Removal</h3>
        </div>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Services</a></li>
          <li class="active"><a>Services Details</a></li>
        </ol>
      </div>
    </div>
  </div>
<!-- services details -->    
  <div id="services-dtl-page" class="services-dtl-main-block">
    <div class="container">
      <div class="services-dtl-block">
        <div class="services-dtl-img">
          <img src="<?php echo e(asset('images/slider-3.jpg')); ?>" class="img-responsive" alt="services-banner">
        </div>
        <h4 class="services-heading"><?php echo e($services->name); ?></h4>
        <p><?php echo e($services->description); ?></p>          
      </div>    
      <div class="services-content-block">   
        <div class="row">     
          <div class="col-md-3 col-sm-6">
            <ul class="services-content">
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul class="services-content">
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
              <li><i class="fa fa-check-square"></i>Services Features</li>
            </ul>
          </div>
        
    
        </div>
      </div>
    </div>
  </div>  
<!--  end services dtl -->
<!--  services -->
  <div id="services" class="services-main-block service-inner">
    <div class="container">
      <div class="row">
          <?php if($services): ?>
            <?php $__currentLoopData = $servicess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 col-sm-6">
            <div class="service-block text-center">
            <div class="service-icon">
              <a href="<?php echo e(url('/service_detail/'.$service->id)); ?>"><img src="<?php echo e(asset('images/services')); ?>/<?php echo e($service->icon); ?>" class="img-responsive" alt="service-08"></a>
            </div>
            <div class="service-dtl">
              <a href="<?php echo e(url('/service_detail/'.$service->id)); ?>"><h5 class="service-heading"><?php echo e($service->name); ?></h5></a>
              <p><?php echo e($service->description); ?></p>
            </div>
          </div>
        </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<!--  end services -->
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/service_detail.blade.php */ ?>