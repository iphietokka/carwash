@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Blog 
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
<h3 class="box-title">Create</h3>
</div>
<form method="POST" action="{{url('admin/opening_hour/store')}}" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
       <select class="form-control" name="day">
        <option>Select</option>
         <option value="Monday">Monday</option>
         <option value="Tuesday">Tuesday</option>
         <option value="Wednesday">Wednesday</option>
         <option value="Thursday">Thursday</option>
         <option value="Friday">Friday</option>
         <option value="Saturday">Saturday</option>
         <option value="Sunday">Sunday</option>
       </select>
    </div>
   
</div>
<div class="bootstrap-timepicker">
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Opening</label>
    <div class="col-sm-9">
       <div class="input-group">
        <input type="text" class="form-control timepicker" placeholder="Opening" name="opening_time">
 <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
    </div>
</div>
</div>
<div class="bootstrap-timepicker">
<div class="form-group">
               <label for="inputPassword3" class="col-sm-3 control-label">Closing</label>
          <div class="col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="closing_time">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
</div>


</div>
<div class="box-footer">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-info pull-right">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</section>
@endsection

