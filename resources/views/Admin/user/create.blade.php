@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Create User
<small>Admin panel</small>
</h1>
<ol class="breadcrumb">
<li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">user</li>
</ol>
</section>
<section class="content">
<div class="row">
<div class="col-md-6">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Create User</h3>
</div>
<form method="POST" action="{{url('admin/user/store')}}" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="username" name="username">
    </div>
    
</div>
<div class="form-group-sm">
    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">E-Mail</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" placeholder="E-Mail" name="email">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Phone" name="phone">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Phone" name="address">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Dob</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Dob" name="date_birthday">
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Role User</label>
    <div class="col-sm-9">
        <select class="form-control" name="role" style="width: 100%;">
            <option>--Select--</option>

            <option value="A">Administrator</option>
            <option value="C">Customer</option>
           
        </select>
    </div>
</div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Sex</label>
    <div class="col-sm-9">
      <label>
          <input type="radio" name="sex" class="minimal" value="Male">
            Male
        </label>
        <label>
          <input type="radio" name="sex" class="minimal" value="Female">
          Female
        </label>
      
    </div>
</div>
 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Photo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="photo" name="photo">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" placeholder="password" name="password">
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Re-Password</label>
    <div class="col-sm-9">
        <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
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

