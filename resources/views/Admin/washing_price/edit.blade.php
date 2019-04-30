@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Price
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
<h3 class="box-title">Edit Price</h3>
</div>
<form method="POST" action="{{url('admin/washing_price/edit')}}" enctype="multipart/form-data">
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
<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Vehicle Types</label>
    <div class="col-sm-9">
    	<input type="hidden" name="id" value="{{$data->id}}">
        <select class="form-control" name="vehicle_type_id" style="width: 100%;">
        	 <option value="{{$data->vehicle_type_id}}" selected="">{{ Helper::getDetail('vehicle_types', $data->vehicle_type_id,'type','id')  }}</option>
        	
        	@foreach($type as $tm)
            <option value="{{$tm->id}}">{{$tm->type}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Washing Plan</label>
    <div class="col-sm-9">
        <select class="form-control" name="washing_plan_id" style="width: 100%;">
        	 <option value="{{$data->washing_plan_id}}" selected="">{{ Helper::getDetail('washing_plans', $data->washing_plan_id,'name','id')  }}</option>

        	@foreach($plan as $us)
            <option value="{{$us->id}}">{{$us->name}}</option>
            @endforeach
           
        </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
         <input type="text" class="form-control" name="price" value="{{$data->price}}"></input>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Duration</label>
    <div class="col-sm-9">
         <input type="text" class="form-control" name="duration" value="{{$data->duration}}"></input>
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

