<?php $__env->startSection('inner_content'); ?>

 <div id="page-banner" class="page-banner-main" style="background-image: url('<?php echo e(asset('images/bg/page-banner.jpg')); ?>')">
    <div class="container">
      <div class="page-banner-block">
        <div class="section">
          <h3 class="section-heading">Contact Us</h3>
        </div>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li class="active"><a>Contact</a></li>
        </ol>
      </div>
    </div>
  </div>
 
<!--  end page banner  -->
<!--  contact page   -->
  <div id="contact-page" class="contact-page-main-block">
    <div class="section text-center">
      <h3 class="section-heading">Contact Us</h3>
      <p class="sub-heading">Sollicitudin urna dolor sagittis lacus donec elit libero sodales nec</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4"> 
          <div class="contact-block">
            <ul>
               <?php if($contacts): ?>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php for($i=1; $i <= 1; $i++): ?>
                    
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#"><?php echo e($contact->phone); ?></a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#"><?php echo e($contact->address); ?></a></li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#"><?php echo e($contact->email); ?></a></li>
                    <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#"><?php echo e($contact->website); ?></a></li>
                  <?php endfor; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-md-9  col-sm-8">
          <form class="contact-form" method="POST" action="<?php echo e(url('contact/send')); ?>" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?> 
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required> 
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" required>
                </div> 
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div> 
            <div class="message">
              <textarea id="message" name="mail_message" rows="6" placeholder="Message"></textarea>
            </div> 
            <button type="submit" class="btn btn-default">Send Message</button>              
          </form> 
        </div>
      </div>
    </div>
  </div>   

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/contact.blade.php */ ?>