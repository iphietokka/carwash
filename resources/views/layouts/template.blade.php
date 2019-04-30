<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2017 .
**********************************************************************************************************  -->
<!-- 
Template Name: Auto Plus – Car Wash and Car Repair HTML Template
Version: 1.0.0
Author: Media City
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title> Car Wash</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Auto Plus" />
<meta name="keywords" content="car wash, html template, car wash template, auto plus, car repair, auto wash, auto detail, auto detailing, car, cleaning, mechanic, repair, wash, car service, workshop">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="{{asset('images/favicon/favicon.ico')}}"> <!-- favicon-icon -->
  <!-- theme style -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
  <link href="{{asset('css/icon-font.css')}}" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
  <link href="{{asset('css/menumaker.css')}}" rel="stylesheet" type="text/css"/> <!-- menu css -->
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
  <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
  <link href="{{asset('css/datepicker.css')}}" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/> <!-- custom css -->
    <link href="{{ asset('js/sweetalert.css') }}" rel="stylesheet" /> 
  <!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 

<!-- end preloader --> 
<!--  top bar -->
  <div class="top-bar hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="info-bar">
            <ul>
                @if ($company_socials)
                  @foreach ($company_socials as $company_social)
                    <li><a href="{{$company_social->link}}" title="{{$company_social->social_site}}" target="_blank"><i class="fa {{$company_social->social_icon}}" aria-hidden="true"></i></a></li>
                  @endforeach
                @endif
            </ul>
          </div>          
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="top-bar-right">
            <div class="top-menu hidden-sm">
              <ul>
             @if (Route::has('login'))
              @auth
              @if (Auth::user()->role == 'A')
              <li><a href="{{url('/admin')}}" target="_blank"> Dashboard </a></li>
              @endif
              @if (Auth::user()->role == 'C')
              <li><a href="{{url('/user')}}" target="_blank"> Dashboard </a></li>
              @endif
              <li>
                <div class="dropdown user-menu">
                  <a href="" class="dropdown-toggle name" data-toggle="dropdown">{{Auth::user()->name}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">  
                    <li>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </div>
              </li>
              @else
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
              @endauth
              @endif
              </ul>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end top bar -->
<!--  navigation -->
  <div class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
            @foreach ($contacts as $contact)
          <div class="logo">
            <a href="{{url('/')}}"><img src="{{asset('images/logo')}}/{{$contact->logo}}" alt="logo"></a>
          </div>
        </div>
       
        <div class="col-md-2 col-sm-3 col-xs-6">
          <div class="info-box">
            <div class="info-box">
              <div class="info-box-heading"><i class="fa fa-phone" aria-hidden="true"></i> Help Line</div>
              <div class="info-box-details">{{$contact->phone}}</div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <div class="info-box">
            <div class="info-box-heading"><i class="fa fa-envelope" aria-hidden="true"></i> Email</div>
            <div class="info-box-details">{{$contact->email}}</div>
          </div>
        </div>
         @endforeach
        <div class="col-md-2 hidden-sm hidden-xs">
          <div class="info-box-btn pull-right">
            <a href="#appointment" class="btn btn-default">Book Appointment</a>
          </div>
        </div>
      </div>
    </div>    
    <div class="navigation">
      <div class="container">
        <div id="cssmenu">
          <ul>
            <li><a href="{{url('/')}}">Home</a>
            
            </li>                
            <li><a href="#">Pages</a>
              <ul>    
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="appointment.html">Appointment</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="process.html">Process</a></li>
                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                <li><a href="faq.html">Faq's</a></li>                    
                <li><a href="404.html">404 Page</a></li>                
                <li><a href="403.html">403</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>  
                <li><a href="under-construction.html">Under Construction</a></li>                  
              </ul>
            </li>
            <li><a href="#">Services</a>
              <ul>
                <li><a href="services.html">Services</a></li>
             
              </ul>
            </li>                
            <li><a href="#">Gallery</a>
              <ul>
                <li><a href="gallery-col3.html">Portfolio 3 Column</a></li>
                <li><a href="gallery-col4.html">Portfolio 4 Column</a></li>
              
              </ul>
            </li>
             <li><a href="#">Team</a>
              <ul>
                <li><a href="{{url('/team')}}">Team</a></li>
               
              </ul>
            </li>
            <li><a href="#">Blog</a>
              <ul>
                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
             
              </ul>
            </li>        
         <!--    <li><a href="#">Shop</a>
              <ul>    
                <li><a href="shop.html">Shop Style 1</a></li>
                <li><a href="shop-style-2.html">Shop Style 2</a></li>
              
                        
              </ul>
            </li>  -->      
            <li><a href="#">Contact</a>
              <ul>
                <li><a href="{{url('/contact')}}">Contact</a></li>
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>    
  </div> 
  @include('flash-message')
  @yield('inner_content')

 <footer id="footer" class="footer-main-block">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="footer-widget">              
              <img src="{{asset('images/adadadadad.png')}}" class="img-responsive" alt="logo">
            </div>
          </div>           
          <div class="col-md-3 col-sm-3">
            <div class="footer-subscribe footer-widget">
              <h5 class="footer-heading">Subscribe Newsletter</h5>
            </div>
          </div>
          <div class="col-md-5 col-sm-5">
            <div class="footer-subscribe footer-widget"> 
              <form  class="subscribe-form" action="{{ url('/subscribe') }}" method="POST">
                {{ csrf_field() }} 
                <div class="form-group">
                  <label class="sr-only">Your Email address</label>
                  <input type="email" class="form-control" id="mc-email" placeholder="Enter email address" name="email">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <label for="mc-email"></label>
              </form> 
              @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>          
              @endif
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">          
          <div class="col-md-7 col-sm-12">
            <div class="footer-about footer-widget">  
              <p>Lorem ipsum dolor sit amet, consectetuer a dipiscing elit aenean commodo ligula eget in
              dolor aenean massa cum sociis natoque penatibus et magnis dis parturie. Rapidiously network revolutionary technology for integrated synergy. Collaboratively plagiarize competitive core competencies through multifunctional paradigms. Rapidiously deploy client-focused ROI for resource maximizing outsourcing. </p> 
              <div class="footer-subscribe footer-widget">
                <div class="social-icon">
                  <span>Follow us on:</span>
                  <ul>
                     @if ($company_socials)
                  @foreach ($company_socials as $company_social)
                    <li><a href="{{$company_social->link}}" title="{{$company_social->social_site}}" target="_blank"><i class="fa {{$company_social->social_icon}}" aria-hidden="true"></i></a></li>
                  @endforeach
                @endif
                  </ul>
                </div>
              </div>             
            </div>
          </div>            
        
           <div class="col-md-3 col-sm-6">
            <div class="footer-opening footer-widget">
              <h5 class="footer-heading">Opening Hours</h5>
              <div class="row">
                     @if ($opening_hours)
                  @foreach ($opening_hours as $opening_time)
                <div class="col-xs-7">
                  <div class="opening-time">
                     @if ($opening_time->opening_time !== '-' ? true : false)
                          {{$opening_time->opening_time}} - {{$opening_time->closing_time}}
                        @endif
                        @if ($opening_time->opening_time == '-' ? true : false)
                         Closed
                        @endif

                  </div>
                </div>
                <div class="col-xs-5">
                  <div class="opening-day">{{$opening_time->day}}</div>
                </div>
                  @endforeach
                @endif
               
              </div>
            </div>
          </div>  
        </div>
      </div>      
    </div>
    <hr>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text text-center">
              <p>&copy; Copyrights 2019 <a href="#">Car Wash</a>. | All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--  end footer -->
 <!-- jquery -->
      <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> <!-- jquery library js -->
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> <!-- bootstrap js -->
      <script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script> <!-- owl carousel js -->
      <script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.js')}}"></script> <!-- mail chimp js -->
      <script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script> <!-- smooth scroll js -->
      <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script> <!-- magnify popup js --> 
      <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script> <!-- facts count js required for jquery.counterup.js file -->
      <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script> <!-- facts count js-->
      <script type="text/javascript" src="{{asset('js/menumaker.js')}}"></script> <!-- menu js--> 
      <script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script> <!-- progress bar js -->
      <script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>  <!-- event countdown js -->
      <script type="text/javascript" src="{{asset('js/price-slider.js')}}"></script> <!-- price slider / filter js-->
      <script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script> <!-- bootstrap datepicker js--> 
      <script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script> <!-- image zoom js-->
      <script type="text/javascript" src="{{asset('js/theme.js')}}"></script> <!-- custom js -->  
      <script src="{{asset('js/sweetalert.min.js')}}"></script>

       @if (Session::has('sweet_alert.alert'))
    <script>
       swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            {{-- timer: "{!! Session::get('sweet_alert.timer') !!}", --}}
            type: "{!! Session::get('sweet_alert.type') !!}",
            showConfirmButton: true,
            {{-- confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}", --}}
            confirmButtonColor: "#AEDEF4"

            // more options
        });
    </script>
@endif
     <script>
  $( document ).ready(function() {
    $('.sessionmodal').addClass("active");
    setTimeout(function() {
        $('.sessionmodal').removeClass("active");
   }, 4200);
  });

  // //Select2
  // $('.select2').select2();
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>
