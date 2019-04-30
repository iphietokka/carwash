@extends('user.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Appointment
<small>Admin panel</small>
</h1>
<ol class="breadcrumb">
<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">user</li>
</ol>
</section>
<section class="content">
<div class="row">
<div class="col-md-8">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Edit Appointment </h3>
</div>
<form method="POST" action="{{url('user/appointment/edit')}}" enctype="multipart/form-data">
{{ csrf_field() }} 

@if ($errors->any())
   <div class="alert alert-danger">
      <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
      </ul>
   </div>
@endif
<div class="box-body">
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
 <input type="hidden" name="id" value="{{$data->id}}">
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Company</label>
    <div class="col-sm-9">

        <select class="form-control" name="vehicle_company_id" style="width: 100%;">
        	 <option value="{{$data->vehicle_company_id}}">{{ Helper::getDetail('vehicle_companies', $data->vehicle_company_id,'vehicle_company','id') }}</option>

        	@foreach($vehicle_companies as $us)
            <option value="{{$us->id}}">{{$us->vehicle_company}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Model</label>
    <div class="col-sm-9">
        <select class="form-control" name="vehicle_modal_id" style="width: 100%;">
           <option value="{{$data->vehicle_modal_id}}">{{ Helper::getDetail('vehicle_modals', $data->vehicle_modal_id,'vehicle_modal','id') }}</option>

          @foreach($vehicle_modals  as $us)
            <option value="{{$us->id}}">{{$us->vehicle_modal}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Type</label>
    <div class="col-sm-9">
        <select class="form-control" name="vehicle_types_id" style="width: 100%;">
           <option value="{{$data->vehicle_types_id}}">{{ Helper::getDetail('vehicle_types', $data->vehicle_types_id,'type','id') }}</option>

          @foreach($vehicle_types  as $us)
            <option value="{{$us->id}}">{{$us->type}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Washing Plan</label>
    <div class="col-sm-9">
        <select class="form-control" name="washing_plan_id" style="width: 100%;">
           <option value="{{$data->washing_plan_id}}">{{ Helper::getDetail('washing_plans', $data->washing_plan_id,'name','id') }}</option>

          @foreach($washing_plans  as $us)
            <option value="{{$us->id}}">{{$us->name}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Appointment Date</label>
    <div class="col-sm-9">
       <input type="text" class="form-control date-pick" name="appointment_date" value="{{$data->appointment_date}}">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle No</label>
    <div class="col-sm-9">
       <input type="text" class="form-control" name="vehicle_no" value="{{$data->vehicle_no}}">
    </div>
</div>

<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Time Frame</label>
    <div class="col-sm-9">
         <select class="form-control" name="time_frame" style="width: 100%;">
           <option value="{{$data->time_frame}}" selected="">{{$data->time_frame}}</option>
        
            <option value="Morning">Morning</option>
            <option value="Afternoon">Afternoon</option>
            <option value="Evening">Evening</option>
      
        </select>
    </div>
</div>


</div>
<div class="box-footer">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-info">Save</button>
</div>
</form>
</div>
</div>
</div>
</section>
@endsection

