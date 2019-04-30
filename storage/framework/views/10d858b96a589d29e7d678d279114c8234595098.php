<?php $__env->startSection('inner_content'); ?>
<div id="page-banner" class="page-banner-main" style="background-image: url('images/bg/page-banner.jpg')">
    <div class="container">
      <div class="page-banner-block">
        <div class="section">
          <h3 class="section-heading">Team</h3>
        </div>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Team</a></li>
          <li class="active"><a>Team</a></li>
        </ol>
      </div>
    </div>
  </div>
<!--  end page banner  -->
<!--  team -->
  <div id="team" class="team-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Our Awesome Team</h3>
        <p class="sub-heading">Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus</p>
      </div>
      <div class="row">
      	 <?php if($teams): ?>
          <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center drop-shadow curved shadow">
            <div class="team-img">
              <a href="<?php echo e(url('/team_detail/'.$team->id)); ?>"><img src="<?php echo e(asset('images/team')); ?>/<?php echo e($team->photo); ?>" class="img-responsive" alt="team-01">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="team-details.html"><h6 class="team-heading"><?php echo e($team->name); ?></h6></a>
              <div class="team-post"><?php echo e($team->post); ?></div>
              <div class="team-social">
                <ul>
                  <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($social->team_id == $team->id): ?>
                          <li><a href="<?php echo e($social->url); ?>" title="<?php echo e($social->social); ?>" target="_blank"><i class="fa <?php echo e($social->social_icon); ?>"></i></a></li>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
       
      
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
       
       
       
       
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/team.blade.php */ ?>