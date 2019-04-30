@extends('layouts.template')
@section('inner_content')
<div id="page-banner" class="page-banner-main" style="background-image: url('{{asset('images/bg/page-banner.jpg')}}')">
    <div class="container">
      <div class="page-banner-block">
        <div class="section">
          <h3 class="section-heading">Team Details</h3>
        </div>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Team</a></li>
          <li class="active"><a>Team Details</a></li>
        </ol>
      </div>
    </div>
  </div>

  <div id="team-profile" class="team-profile-main-block">
    <div class="container">    
      <div class="row">
      	  
        <div class="col-sm-4">
          <div class="profile-img drop-shadow curved shadow">
              <img src="{{asset('images/team')}}/{{$teams->photo}}" class="img-responsive" alt="team-1">
          </div>
        </div>
        <div class="col-sm-8">

          <div class="profile-name">
            <h6>{{$teams->name}}</h6>
            <div class="profile-post">{{$teams->post}}</div>
            <div class="social-icon">
              <ul>
              	<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                 <!-- @foreach ($socials as $social)
                        @if($social->team_id == $teams->id)
                          <li><a href="{{$social->url}}" title="{{$social->social}}" target="_blank"><i class="fa {{$social->social_icon}}"></i></a></li>
                        @endif
                      @endforeach -->
              </ul>
            </div>
          </div> 
         
          <div class="profile-dtl">
            <p>Progressively re-engineer intermandated intellectual capital via unique intellectual capital. Credibly cultivate functionalized communities rather than dynamic channels. Compellingly benchmark business e-markets without market-driven leadership. Progressively re-engineer intermandated intellectual capital via unique intellectual capital. Credibly cultivate functionalized communities rather than dynamic channels. Compellingly benchmark business e-markets without market-driven leadership.  
            </p>
          </div>
          <div class="profile-skill">
            <h6 class="profile-dtl-heading">Skills :</h6> 
            <div class="row">
              <div class="col-sm-6">                                 
                <div class="skill-block">
                  <p class="skill-tag-left">Technical :</p><span class="skill-tag-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar scroll-bar" data-percent="90%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="skill-block">
                  <p class="skill-tag-left">Mechanical :</p><span class="skill-tag-right">85%</span>
                  <div class="progress">
                    <div class="progress-bar scroll-bar" data-percent="85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>  
              </div>
              <div class="col-sm-6">
                <div class="skill-block">
                  <p class="skill-tag-left">Technical :</p><span class="skill-tag-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar scroll-bar" data-percent="90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="skill-block">
                  <p class="skill-tag-left">Mechanical :</p><span class="skill-tag-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar scroll-bar" data-percent="80%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
          
    </div>
  </div>

  <div id="team" class="team-main-block">
    <div class="container">
      <div class="row">
      	 @if ($teamss)
          @foreach ($teamss as $team)
        <div class="col-md-3 col-sm-6">
          <div class="team-block text-center drop-shadow curved shadow">
            <div class="team-img">
              <a href="{{ url('/team_detail/'.$team->id) }}"><img src="{{asset('images/team')}}/{{$team->photo}}" class="img-responsive" alt="team-01">
              <div class="overlay-bg"></div></a>
            </div>
            <div class="team-dtl">
              <a href="team-details.html"><h6 class="team-heading">Sarah Johnson</h6></a>
              <div class="team-post">Mechanic</div>
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
        
          @endforeach
        @endif
        
      </div>
    </div>
  </div>





    @endsection