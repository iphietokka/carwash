<!-- inner content -->
  <?php $__env->startSection('inner_content'); ?>
<!--  end navigation -->
<!--  slider -->
  <div id="home-slider" class="home-slider">
    <div class="item home-slider-bg" style="background-image: url('images/slider-1-copy.jpg')"> 
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="slider-dtl">          
          <h1 class="slider-heading">We Care For Your Car</h1>
          <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.</p> 
          <div class="slider-btn">    
            <a href="#who-we-are" class="btn btn-orange">Read More</a>    
            <a href="<?php echo e(url('/contact')); ?>" class="btn btn-default">Contact Us</a>
          </div>
        </div>  
      </div>     
    </div>
    <div class="item home-slider-bg" style="background-image: url('images/slider-2-copy.jpg')">
    <div class="overlay-bg"></div>  
      <div class="container">
        <div class="slider-dtl slider-dtl-left">          
          <h1 class="slider-heading">We Care For Your Car</h1>
          <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.</p>  
          <div class="slider-btn">     
            <a href="#who-we-are" class="btn btn-orange">Read More</a>    
            <a href="<?php echo e(url('/contact')); ?>" class="btn btn-default">Contact Us</a>
          </div>
        </div>  
      </div>      
    </div>
    <div class="item home-slider-bg" style="background-image: url('images/slider-3-copy.jpg')">  
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="slider-dtl slider-dtl-right">          
          <h1 class="slider-heading">We Care For Your Car</h1>
          <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.</p>     
          <div class="slider-btn">  
            <a href="#who-we-are" class="btn btn-orange">Read More</a>    
            <a href="<?php echo e(url('/contact')); ?>" class="btn btn-default">Contact Us</a>
          </div>
        </div> 
      </div>      
    </div>
  </div>
<!--  end slider -->
<!--  who we are -->
  <div id ="who-we-are" class="who-we-are-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-sm">
          <div class="who-we-are-img drop-shadow curved shadow">
            <img src="images/who-we-are copy.jpg" class="img-responsive" alt="who-we-are">
          </div>
        </div>
        <div class="col-md-8">
          <div class="section">
            <h3 class="section-heading">Who We Are?</h3>
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget dolor aenean mas cum soc iis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.</p>
          </div>
          <div class="row who-we-are-points">
            <?php if($about_us): ?>
            <?php $__currentLoopData = $about_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $au): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                 <i class="<?php echo e($au->icon); ?>" aria-hidden="true"></i>
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading"><?php echo e($au->name); ?></h5>
                  <p><?php echo e($au->description); ?></p>
                </div>
              </div>
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
            
          </div>
        </div>        
      </div>
    </div>
  </div>
<!--  end who we are -->
<!--  services -->
  <div id="services" class="services-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Our Services</h3>
        <p class="sub-heading">Sollicitudin urna dolor sagittis lacus donec elit libero sodales nec</p>
      </div>
      <div class="row">
         <?php if($services): ?>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<!--  end services -->
<!--  gallery -->
  <div id="work-gallery" class="work-gallery-main-block">
    <div class="parallax" style="background-image: url('images/bg/work-gallery-bg.jpg')">
    <div class="overlay-bg"></div>
    <div class="overlay-bg-2"></div>
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Working gallery</h3>
          <p class="sub-heading">Donec pede justo fringilla vel aliquet nec vulputate eget arcu enim rhoncus</p>
        </div>
        <div id="work-gallery-slider" class="work-gallery-slider">
          <?php if($galleries): ?>
              <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item work-gallery-block">
                  <img src="<?php echo e(asset('images/gallery')); ?>/<?php echo e($gallery->gallery_img); ?>" class="img-responsive" alt="gallery">
                  <div class="overlay-bg"><a href="<?php echo e(asset('images/gallery')); ?>/<?php echo e($gallery->gallery_img); ?>" title="<?php echo e($gallery->id); ?>"><i class="fa fa-plus"></i></a></div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
         
        
        </div>
      </div>      
    </div>
  </div>
<!--  end gallery -->
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
              <?php if($team->status == 'A' ? true : false): ?>
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center drop-shadow curved shadow">
            <div class="team-img">
              <a href="<?php echo e(url('/team_detail/'.$team->id)); ?>"><img src="<?php echo e(asset('images/team')); ?>/<?php echo e($team->photo); ?>" class="img-responsive" alt="team-01">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="<?php echo e(url('/team_detail/'.$team->id)); ?>"><h6 class="team-heading"><?php echo e($team->name); ?></h6></a>
              <div class="team-post"><?php echo e($team->post); ?></div>
              <div class="team-social">
                <ul>
                  <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
       
          <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>       
      </div>
    </div>
  </div>
<!--  end team -->
<!--  facts -->
  <div id="facts" class="facts-main-block">
    <div class="parallax" style="background-image: url('images/bg/facts-bg.jpg')">
    <div class="overlay-bg"></div>
    <div class="overlay-bg-2"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">1025</h2>
              <div class="facts-text">Vehicle Washed</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-car" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">850</h2>
              <div class="facts-text">Car Washed</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-smile-o" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">780</h2>
              <div class="facts-text">Happy Customers</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="facts-block text-center">
              <div class="facts-icon">
                <i class="fa fa-coffee" aria-hidden="true"></i>
              </div>
              <h2 class="facts-number counter">500</h2>
              <div class="facts-text">Cup of Coffee</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end facts -->
<!--  plans -->
   <div id="pricing-plan" class="pricing-plan-main-block pricing-plan-two-main-block">
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Washing Plans</h3>
          <p class="sub-heading">Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum</p>
        </div>
        <div class="pricing-plan-tab">
          <ul class="nav nav-tabs" role="tablist">
            <?php if($vehicle_types): ?>
              <?php $__currentLoopData = $vehicle_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $vehicle_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($vehicle_type->washing_price->vehicle_type_id == $vehicle_type->id): ?>
                  <li role="presentation" <?php if($count == 0): ?> class="active" <?php endif; ?>><a href="#plan-<?php echo e($vehicle_type->id); ?>" aria-controls="plan-<?php echo e($vehicle_type->id); ?>" role="tab" data-toggle="tab"><span><i class="fa <?php echo e($vehicle_type->icon); ?>"></i></span><?php echo e($vehicle_type->type); ?></a></li>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
          <?php if($washing_prices): ?>
            <?php for($i=1; $i <= 15; $i++): ?>
              <?php if($i == 1): ?>
                <div role="tabpanel" class="tab-pane active" id="plan-<?php echo e($i); ?>">
              <?php else: ?>
                <div role="tabpanel" class="tab-pane" id="plan-<?php echo e($i); ?>">
              <?php endif; ?>
                <div class="row">
                  <?php $__currentLoopData = $washing_prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $washing_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php for($k=1; $k <= 4; $k++): ?>
                      <?php if($washing_price->washing_plan_id == $k && $washing_price->vehicle_type_id == $i): ?>
                        <div class="col-md-3 col-sm-6">
                          <div class="pricing-block text-center">
                            <h6 class="pricing-heding"><?php echo e($washing_price->washing_plan->name); ?></h6>
                            <div class="pricing-price-block">
                              <h2 class="pricing-price">
                                  $<?php echo e(number_format($washing_price->price,2)); ?>

                              </h2>
                              <div class="pricing-duration"><?php echo e($washing_price->duration); ?></div>
                            </div>
                            <div class="pricing-dtl">
                              <ul>
                                <?php $__currentLoopData = $washing_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $washing_include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($washing_include->washing_plan_id == $washing_price->washing_plan_id): ?>
                                    <li><?php echo e($washing_include->washing_plan_include); ?></li>
                                  <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                              <a href="#appointment" class="btn btn-orange">Book Now</a>
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endfor; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            <?php endfor; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
<!--  end plans -->
<!--  testimonials -->
 <div id="testimonials" class="testimonials-main-block">
    <div class="parallax" style="background-image: url('images/bg/testimonials-bg.jpg')">
    <div class="overlay-bg"></div>
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Testimonials</h3>         
        </div>
        <div id="testimonials-slider" class="testimonials-slider">
           <?php if($testimonials): ?>
              <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item testimonials-block"> 
            <div class="testimonials-dtl text-center">
               <p><?php echo e($testimonial->detail); ?></p>
            </div>
            <div class="testimonials-client">
              <div class="testimonials-client-img">
                <img src="<?php echo e(asset('images/testimonials')); ?>/<?php echo e($testimonial->image); ?>" class="img-responsive" alt="client-01">
              </div>
              <div class="testimonials-client-dtl">
                <h6 class="client-name"><?php echo e($testimonial->name); ?></h6>
                <div class="client-since"><?php echo e($testimonial->post); ?></div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<!--  end testimonials -->
<!--  appointment -->
  <div id="appointment" class="appointment-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-sm">
          <div class="appointment-img drop-shadow curved shadow">
            <img src="images/appointmenta.jpg" class="img-responsive" alt="Appointment">
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="appointment-block">
            <h3 class="section-heading">Get an Appointment</h3>
            <p class="sub-heading">Etiam imperdiet imperdiet orci nunc nec neque phasellus leo dolor tempus non auctor.</p>

            <form id="appointment-form" class="appointment-form" method="post" action="<?php echo e(url('/store')); ?>">
            <?php echo e(csrf_field()); ?>                             
              <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Vehicle Information</h5>
              <div class="row">
                
                <div class="col-sm-4">
                  <div class="form-group">
                     <?php if(Auth::check()): ?>
                     <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                    <?php endif; ?>
                  <select class="form-control" name="washing_plan_id">
                   <option>Select Plan</option>
                        <?php $__currentLoopData = $washing_plan_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wpl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($wpl->id); ?>"><?php echo e($wpl->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group">
                     <select class="form-control" name="vehicle_company_id">
                   
                        <option>Select Company</option>
                         <?php $__currentLoopData = $vehicle_company_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wpc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($wpc->id); ?>"><?php echo e($wpc->vehicle_company); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
                </div>
                <div class="col-sm-4">
                   <div class="form-group">
                  <select class="form-control" name="vehicle_modal_id">
                    <option>Select Model</option>
                     <?php $__currentLoopData = $vehicle_modal_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wpc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($wpc->id); ?>"><?php echo e($wpc->vehicle_modal); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
             </div>
                <div class="col-sm-4">
                  <select class="form-control" name="vehicle_types_id">
                    <option>Select Type</option>
                     <?php $__currentLoopData = $vehicle_type_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wpc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($wpc->id); ?>"><?php echo e($wpc->type); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <h5 class="form-heading-title"><span class="form-heading-no">2.</span>Appointment Information</h5>
              <div class="row">
                <div class="col-sm-6">
                   <div class="form-group">
                  <input type="text" class="form-control date-pick" id="appointment-date" name="appointment_date" placeholder="Appointment Date" required>
                </div>
              </div>
                <div class="col-sm-6">
                   <div class="form-group">
                  <select class="form-control" name="time_frame">
                      <option value="Morning">Morning</option>
                      <option value="Afternoon">Afternoon</option>
                      <option value="Evening">Evening</option>
                   </select>
                </div>
              </div>
              </div>
                <?php if(!Auth::check()): ?>
              <h5 class="form-heading-title"><span class="form-heading-no">3.</span>Contact Details</h5>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                </div>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
               <div class="col-sm-4">
                  <input type="password" class="form-control" id="phone" name="password" placeholder="Password" required>
                </div>
                <input type="hidden" name="role" value="C">
                <input type="hidden" name="sex" value="-">
                <input type="hidden" name="date_birthday" value="<?php echo e(Carbon\Carbon::now()); ?>">

              </div>
                  <?php endif; ?>
                  <div class="info-box-btn pull-right">
              <button type="submit" class="btn btn-default">Book Now</button>
</div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end appointment -->
<!--  latest news -->
  <div id="news" class="news-main-block">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Latest News</h3>
        <p class="sub-heading">Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum</p>
      </div>
      <div class="row">
         <?php if($blogs): ?>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6">
          <div class="news-block">
            <div class="news-img">
              <a href="blog-single-left-sidebar.html"><img src="<?php echo e(asset('images/blog')); ?>/<?php echo e($blog->img); ?>" class="img-responsive" alt="news">
                <div class="overlay-bg"></div>
              </a>
            </div>
            <div class="news-top">
              <div class="news-date text-center">
                <h4 class="news-day"><?php echo e($blog->date->format('d')); ?></h4>
                <div class="news-month"><?php echo e($blog->date->format('F')); ?></div>
              </div>
              <div class="news-heading-block">
                <a href="blog-single-left-sidebar.html"><h6 class="news-heading"><?php echo e($blog->title); ?></h6></a>
                <ul class="news-tag">
                  <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#"><?php echo e($blog->users->name); ?></a></li>
                 <!--  <li><i class="fa fa-comment" aria-hidden="true"></i> Comments: <a href="#">8</a></li> -->
                </ul>
              </div>
            </div>
            <div class="news-dtl">
              <p><?php echo e($blog->details); ?></p>
            </div>
          </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
  
<!--  end latest news -->
<!--  clients -->
  <div id="clients" class="clients-main-block">    
    <div class="container">      
      <div id="client-slider" class="client-slider"> 
          <?php if($clients): ?>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item client-img">
                <img src="<?php echo e(asset('images/client')); ?>/<?php echo e($client->image); ?>" class="img-responsive" alt="client-1">
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
      </div>         
    </div>   
  </div>
<!--  end clients -->
<!--  map -->

<!--  end map -->
<!--  footer -->
  <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/index.blade.php */ ?>