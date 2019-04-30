@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Create Task
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
<h3 class="box-title">Create Task</h3>
</div>
<form method="POST" action="{{url('admin/team_task/store')}}" enctype="multipart/form-data">
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
    <label for="inputEmail3" class="col-sm-3 control-label">Team</label>
    <div class="col-sm-9">
        <select class="form-control" name="team_id" style="width: 100%;">
        	  <option>--Select--</option>
        	@foreach($team as $tm)
            <option value="{{$tm->id}}">{{$tm->name}}</option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Costumer</label>
    <div class="col-sm-9">
        <select class="form-control" name="user_id" style="width: 100%;">
        	 <option>--Select--</option>
        	@foreach($user as $us)
            <option value="{{$us->id}}">{{$us->name}}</option>
            @endforeach
           
        </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Task</label>
    <div class="col-sm-9">
         <textarea class="form-control" rows="5" name="task"></textarea>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
         <select class="form-control" name="status_id" style="width: 100%;">
        	 <option>--Select--</option>
        	@foreach($status as $st)
            <option value="{{$st->id}}">{{$st->status}}</option>
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

