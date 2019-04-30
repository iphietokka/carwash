@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Service
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
<h3 class="box-title">Edit Service</h3>
</div>
<form method="POST" action="{{url('admin/testimonial/edit')}}" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Post</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Post" name="post" value="{{$data->post}}">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Description" name="detail" value="{{$data->detail}}">
    </div>
   
</div>



 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Image</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="Icon" name="image">
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

