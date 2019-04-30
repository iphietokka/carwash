@extends('user.layouts.app')
@section('content')
  <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
    <section class="content">
   <div class="row">
     
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$teams}}</h3>

              <p>Team Member</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{url('admin/team')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$team_task}}</h3>

              <p>Team Task</p>
            </div>
            <div class="icon">
              <i class="fa fa-tasks"></i>
            </div>
            <a href="{{url('admin/team_task')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $washing_plan}}</h3>

              <p>Washing Plan</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="{{url('admin/washing_plan')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{ $appointment}}</h3>

              <p>Appointments Booked!</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-in"></i>
            </div>
            <a href="{{url('admin/appointment')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>
      @endsection