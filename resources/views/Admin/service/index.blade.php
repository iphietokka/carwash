    @extends('admin.layouts.app')
    @section('content')

    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Service</h3>
          <div class="pull-right">
            <a href="service/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add User</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Icon</th>
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
              
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody><?php $a=1;?>
            @foreach($data as $dt)
            <tr>
              <td class="text-center">{{$a++}}</td>
              <td align="center">
                <img src="{{$dt->icon!='' && File::exists('images/services/'.$dt->icon)?'/images/services/'.$dt->icon:'/images/default.jpg'}}"
                width="80px" height="70px"/>
              </td>
              <td class="text-center">{{$dt->name}}</td>
              <td class="text-center">{{$dt->description}}</td>
            

              <td class="text-center">

                <form class="form-horizontal" method="POST" action="{{url('admin/'.$title.'/'.$dt->id) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                       <input name="_method" type="hidden" value="DELETE">
      <a class="btn-floating green btn-small" href="{{ url('admin/'.$title.'/edit/'.$dt->id) }}">
        <i class="fa fa-edit" > </i> 
      </a>
      | 
      <a class="js-submit-confirm">
        <i class="fa fa-trash" style="color:red"> </i></a>
   

  
                  </form> 
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.col -->
  </section>
  @endsection