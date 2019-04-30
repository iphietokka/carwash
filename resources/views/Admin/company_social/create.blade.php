@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
About Us
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
<h3 class="box-title">Create About Us</h3>
</div>
<form method="POST" action="{{url('admin/company_social/store')}}" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Link</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Name" name="link">
    </div>
   
</div>

<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <select class="form-control" name="social_site">
        

        <option>Select</option>
        <option value="Facebook">Facebook</option>
         <option value="Instagram">Instagram</option>
          <option value="Twitter">Twitter</option>
           <option value="LinkedIn">LinkedIn</option>
      </select>
        
    </div>
   
</div>


 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Icon</label>
    <div class="col-sm-9">
        <input type="text" class="form-control social-icon-picker" placeholder="Icon" name="social_icon">
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

