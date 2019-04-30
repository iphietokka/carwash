@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit 
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
<h3 class="box-title">Edit </h3>
</div>
<form method="POST" action="{{url('admin/payment/edit')}}" enctype="multipart/form-data">
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
    <label for="inputPassword3" class="col-sm-3 control-label">Discount</label>
    <div class="col-sm-9">
    	<input type="hidden" name="id" value="{{$data->id}}">
         <input type="text" class="form-control" name="discount" value="{{$data->discount}}"></input>
    </div>
</div>

<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Advance</label>
    <div class="col-sm-9">
      <input type="text" name="advance" value="{{$data->advance}}" class="form-control">
      
    </div>
</div>


<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Payment Mode</label>
    <div class="col-sm-9">
       <select class="form-control" name="payment_mode_id" style="width: 100%;">
           <option value="{{$data->payment_mode_id}}" selected="">{{ Helper::getDetail('payment_modes', $data->payment_mode_id,'mode','id')  }}</option>
          
          @foreach($payment_mode_lists as $tm)
            <option value="{{$tm->id}}">{{$tm->mode}}</option>
            @endforeach
           
        </select>
      
    </div>
</div>


<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Remark</label>
    <div class="col-sm-9">
    
      <textarea name="remark" class="form-control" rows="4">{{$data->advance}}</textarea>
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

