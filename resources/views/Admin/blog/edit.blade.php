@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Blog
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
<h3 class="box-title">Edit Blog</h3>
</div>
<form method="POST" action="{{url('admin/blog/edit')}}" enctype="multipart/form-data">
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

         <select class="form-control" name="user_id">
          <option value="{{$data->user_id}}" selected="">{{ Helper::getDetail('users', $data->user_id,'name','id')  }}</option>

        @foreach($users as $user)
         <option value="{{$user->id}}">{{$user->name}}</option>
         @endforeach
       </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="E-Mail" name="title" value="{{$data->title}}">
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Date</label>
    <div class="col-sm-9">
        <input type="text" class="form-control date-pick" placeholder="Phone" name="date" value="{{$data->date}}">
    </div>
</div>

 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Details</label>
    <div class="col-sm-9">
       <textarea class="form-control" rows="5" name="details">{{$data->details}}"</textarea>
    </div>
   
</div>


 <div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Logo</label>
    <div class="col-sm-9">
        <input type="file" class="form-control" placeholder="Logo" name="img">
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

