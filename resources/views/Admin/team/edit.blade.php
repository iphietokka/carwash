@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Team's
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
<h3 class="box-title">Edit Team</h3>
</div>
<form method="POST" action="{{url('admin/team/edit')}}" enctype="multipart/form-data">
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
        <input type="hidden" class="form-control" value="{{$data->id}}" name="id">
        <input type="text" class="form-control" placeholder="Name" name="name" value="{{$data->name}}">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">E-Mail</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{$data->email}}">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$data->phone}}">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
       <textarea class="form-control" rows="5" name="address">{{$data->address}}"</textarea>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Date Birthday</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Dob" name="date_birthday" value="{{$data->date_birthday}}">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Photo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="photo" name="photo">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Post</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Post" name="post" value="{{$data->post}}">
    </div>
</div>
 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Join Date</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" placeholder="Post" name="date_join" value="{{$data->date_join}}">
    </div>
</div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Sex</label>
    <div class="col-sm-9">
      <label>
          <input type="radio" name="sex" class="minimal" value="Male" {{ ($data->sex=="Male")? "checked" : "" }}>
            Male
        </label>
        <label>
          <input type="radio" name="sex" class="minimal" value="Female" {{ ($data->sex=="Female")? "checked" : "" }}>
          Female
        </label>
      
    </div>
</div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Active</label>
    <div class="col-sm-9">
        <select class="form-control" name="status" style="width: 100%;">
        	 @if ($data->status == 'A')
           <option value="{{$data->status}}">{{$data->status == 'A' ? 'Active' : 'Inactive'}}</option>

            <option value="A">Active</option>
            <option value="I">Inactive</option>
           @endif
        </select>
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

