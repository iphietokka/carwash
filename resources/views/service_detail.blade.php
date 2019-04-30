@extends('layouts.template')
<!-- inner content -->
  @section('inner_content')
  <div id="page-banner" class="page-banner-main" style="background-image: url('{{asset('images/bg/page-banner.jpg')}}')">
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
          <img src="{{asset('images/slider-3.jpg')}}" class="img-responsive" alt="services-banner">
        </div>
        <h4 class="services-heading">{{$services->name}}</h4>
        <p>{{$services->description}}</p>          
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
          @if ($services)
            @foreach ($servicess as $service)
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
  @endsection
<!--  end services -->