@extends('layouts.template')
<!-- inner content -->
  @section('inner_content')
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
            <a href="{{url('/contact')}}" class="btn btn-default">Contact Us</a>
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
            <a href="{{url('/contact')}}" class="btn btn-default">Contact Us</a>
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
            <a href="{{url('/contact')}}" class="btn btn-default">Contact Us</a>
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
            @if($about_us)
            @foreach($about_us as $au)
            <div class="col-sm-6">
              <div class="who-we-are-block">
                <div class="who-we-are-icon">
                 <i class="{{$au->icon}}" aria-hidden="true"></i>
                </div>
                <div class="who-we-are-dtl">
                  <h5 class="who-we-are-heading">{{$au->name}}</h5>
                  <p>{{$au->description}}</p>
                </div>
              </div>
            </div>
            
            @endforeach
          @endif
            
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
         @if ($services)
            @foreach ($services as $service)
        <div class="col-md-3 col-sm-6">
            <div class="service-block text-center">
            <div class="service-icon">
              <a href="{{ url('/service_detail/'.$service->id) }}"><img src="{{asset('images/services')}}/{{$service->icon}}" class="img-responsive" alt="service-08"></a>
            </div>
            <div class="service-dtl">
              <a href="{{ url('/service_detail/'.$service->id) }}"><h5 class="service-heading">{{$service->name}}</h5></a>
              <p>{{$service->description}}</p>
            </div>
          </div>
        </div>
         @endforeach
          @endif
     
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
          @if ($galleries)
              @foreach ($galleries as $gallery)
                <div class="item work-gallery-block">
                  <img src="{{asset('images/gallery')}}/{{$gallery->gallery_img}}" class="img-responsive" alt="gallery">
                  <div class="overlay-bg"><a href="{{asset('images/gallery')}}/{{$gallery->gallery_img}}" title="{{$gallery->id}}"><i class="fa fa-plus"></i></a></div>
                </div>
              @endforeach
            @endif
         
        
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
         @if ($teams)
            @foreach ($teams as $team)
              @if ($team->status == 'A' ? true : false)
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center drop-shadow curved shadow">
            <div class="team-img">
              <a href="{{ url('/team_detail/'.$team->id) }}"><img src="{{asset('images/team')}}/{{$team->photo}}" class="img-responsive" alt="team-01">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="{{ url('/team_detail/'.$team->id) }}"><h6 class="team-heading">{{$team->name}}</h6></a>
              <div class="team-post">{{$team->post}}</div>
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
       
          @endif
            @endforeach
          @endif       
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
            @if ($vehicle_types)
              @foreach ($vehicle_types as $count => $vehicle_type)
                @if ($vehicle_type->washing_price->vehicle_type_id == $vehicle_type->id)
                  <li role="presentation" @if ($count == 0) class="active" @endif><a href="#plan-{{$vehicle_type->id}}" aria-controls="plan-{{$vehicle_type->id}}" role="tab" data-toggle="tab"><span><i class="fa {{$vehicle_type->icon}}"></i></span>{{$vehicle_type->type}}</a></li>
                @endif
              @endforeach
            @endif
          </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
          @if ($washing_prices)
            @for ($i=1; $i <= 15; $i++)
              @if ($i == 1)
                <div role="tabpanel" class="tab-pane active" id="plan-{{$i}}">
              @else
                <div role="tabpanel" class="tab-pane" id="plan-{{$i}}">
              @endif
                <div class="row">
                  @foreach ($washing_prices as $washing_price)
                    @for ($k=1; $k <= 4; $k++)
                      @if ($washing_price->washing_plan_id == $k && $washing_price->vehicle_type_id == $i)
                        <div class="col-md-3 col-sm-6">
                          <div class="pricing-block text-center">
                            <h6 class="pricing-heding">{{$washing_price->washing_plan->name}}</h6>
                            <div class="pricing-price-block">
                              <h2 class="pricing-price">
                                  ${{number_format($washing_price->price,2)}}
                              </h2>
                              <div class="pricing-duration">{{$washing_price->duration}}</div>
                            </div>
                            <div class="pricing-dtl">
                              <ul>
                                @foreach ($washing_includes as $washing_include)
                                  @if ($washing_include->washing_plan_id == $washing_price->washing_plan_id)
                                    <li>{{$washing_include->washing_plan_include}}</li>
                                  @endif
                                @endforeach
                              </ul>
                              <a href="#appointment" class="btn btn-orange">Book Now</a>
                            </div>
                          </div>
                        </div>
                      @endif
                    @endfor
                  @endforeach
                </div>
              </div>
            @endfor
          @endif
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
           @if ($testimonials)
              @foreach ($testimonials as $testimonial)
          <div class="item testimonials-block"> 
            <div class="testimonials-dtl text-center">
               <p>{{$testimonial->detail}}</p>
            </div>
            <div class="testimonials-client">
              <div class="testimonials-client-img">
                <img src="{{asset('images/testimonials')}}/{{$testimonial->image}}" class="img-responsive" alt="client-01">
              </div>
              <div class="testimonials-client-dtl">
                <h6 class="client-name">{{$testimonial->name}}</h6>
                <div class="client-since">{{$testimonial->post}}</div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
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

            <form id="appointment-form" class="appointment-form" method="post" action="{{url('/store')}}">
            {{ csrf_field() }}                             
              <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Vehicle Information</h5>
              <div class="row">
                
                <div class="col-sm-4">
                  <div class="form-group">
                     @if (Auth::check())
                     <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    @endif
                  <select class="form-control" name="washing_plan_id">
                   <option>Select Plan</option>
                        @foreach($washing_plan_lists as $wpl)
                      <option value="{{$wpl->id}}">{{$wpl->name}}</option>
                    @endforeach
                    </select>
                
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group">
                     <select class="form-control" name="vehicle_company_id">
                   
                        <option>Select Company</option>
                         @foreach($vehicle_company_lists as $wpc)
                      <option value="{{$wpc->id}}">{{$wpc->vehicle_company}}</option>
                    @endforeach
                     </select>
                  </div>
                </div>
                <div class="col-sm-4">
                   <div class="form-group">
                  <select class="form-control" name="vehicle_modal_id">
                    <option>Select Model</option>
                     @foreach($vehicle_modal_lists as $wpc)
                    <option value="{{$wpc->id}}">{{$wpc->vehicle_modal}}</option>
                      @endforeach
                  </select>
                </div>
             </div>
                <div class="col-sm-4">
                  <select class="form-control" name="vehicle_types_id">
                    <option>Select Type</option>
                     @foreach($vehicle_type_lists as $wpc)
                    <option value="{{$wpc->id}}">{{$wpc->type}}</option>
                      @endforeach
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
                @if (!Auth::check())
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
                <input type="hidden" name="date_birthday" value="{{Carbon\Carbon::now()}}">

              </div>
                  @endif
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
         @if ($blogs)
            @foreach ($blogs as $blog)
        <div class="col-md-4 col-sm-6">
          <div class="news-block">
            <div class="news-img">
              <a href="blog-single-left-sidebar.html"><img src="{{asset('images/blog')}}/{{$blog->img}}" class="img-responsive" alt="news">
                <div class="overlay-bg"></div>
              </a>
            </div>
            <div class="news-top">
              <div class="news-date text-center">
                <h4 class="news-day">{{$blog->date->format('d')}}</h4>
                <div class="news-month">{{$blog->date->format('F')}}</div>
              </div>
              <div class="news-heading-block">
                <a href="blog-single-left-sidebar.html"><h6 class="news-heading">{{$blog->title}}</h6></a>
                <ul class="news-tag">
                  <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">{{$blog->users->name}}</a></li>
                 <!--  <li><i class="fa fa-comment" aria-hidden="true"></i> Comments: <a href="#">8</a></li> -->
                </ul>
              </div>
            </div>
            <div class="news-dtl">
              <p>{{$blog->details}}</p>
            </div>
          </div>
        </div>
          @endforeach
          @endif
          </div>
        </div>
      </div>
  
<!--  end latest news -->
<!--  clients -->
  <div id="clients" class="clients-main-block">    
    <div class="container">      
      <div id="client-slider" class="client-slider"> 
          @if ($clients)
            @foreach ($clients as $client)
              <div class="item client-img">
                <img src="{{asset('images/client')}}/{{$client->image}}" class="img-responsive" alt="client-1">
              </div>
            @endforeach
          @endif
      </div>         
    </div>   
  </div>
<!--  end clients -->
<!--  map -->

<!--  end map -->
<!--  footer -->
  @endsection
 