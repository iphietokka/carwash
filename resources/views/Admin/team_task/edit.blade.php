@extends('admin.layouts.app')
@section('content')
<section class="content-header">
<h1>
Edit Task
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
<h3 class="box-title">Edit Task</h3>
</div>
<form method="POST" action="{{url('admin/team_task/edit')}}" enctype="multipart/form-data">
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
      <input type="hidden" name="id" value="{{$data->id}}">
        <select class="form-control" name="team_id" style="width: 100%;">
        	 <option value="{{$data->team_id}}" selected="">{{ Helper::getDetail('teams', $data->team_id,'name','id')  }}</option>

                                    @foreach($team as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
        </select>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Costumer</label>
    <div class="col-sm-9">
        <select class="form-control" name="user_id" style="width: 100%;">
        	 <option value="{{$data->user_id}}" selected="">{{ Helper::getDetail('users', $data->user_id,'name','id')  }}</option>

                                    @foreach($user as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
           
        </select>
    </div>
   
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Task</label>
    <div class="col-sm-9">
         <textarea class="form-control" rows="5" name="task">{{$data->task}}</textarea>
    </div>
</div>
<div class="form-group-sm">
    <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
         <select class="form-control" name="status_id" style="width: 100%;">
        	 <option value="{{$data->status_id}}" selected="">{{ Helper::getDetail('statuses', $data->status_id,'status','id')  }}</option>
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

