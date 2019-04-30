@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Company
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
<h3 class="box-title">Edit Model</h3>
</div>
<form method="POST" action="{{url('admin/vehicle_model/edit')}}" enctype="multipart/form-data">
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
    <label for="inputPassword3" class="col-sm-3 control-label">Vehicle Model</label>
    <div class="col-sm-9">
    	<input type="hidden" name="id" value="{{$data->id}}">
         <input type="text" class="form-control" name="vehicle_modal" value="{{$data->vehicle_modal}}"></input>
    </div>
</div>

<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Vehicle Types</label>
    <div class="col-sm-9">
      <input type="hidden" name="id" value="{{$data->id}}">
        <select class="form-control" name="vehicle_company_id" style="width: 100%;">
           <option value="{{$data->vehicle_company_id}}" selected="">{{ Helper::getDetail('vehicle_companis', $data->vehicle_company_id,'vehicle_company','id')  }}</option>
          
          @foreach($companis as $tm)
            <option value="{{$tm->id}}">{{$tm->vehicle_company}}</option>
            @endforeach
           
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

