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
          <h3 class="box-title">All Vehicle Model</h3>
          <div class="pull-right">
            <a href="vehicle_model/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                  <th class="text-center">Vehicle Model</th>
                <th class="text-center">Vehicle Company</th>
                <th class="text-center">Created</th>
            	<th class="text-center">Updated</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <tr><?php $a=1; ?>
              @foreach($data as $dt)
              <td class="text-center">{{$a++}}</td>
              <td class="text-center">{{$dt->vehicle_modal}}</td>
              <td class="text-center">{{ Helper::getDetail('vehicle_companies', $dt->vehicle_company_id,'vehicle_company','id')  }}</td>
             <td class="text-center">{{$dt->created_at->diffForHumans()}}</td>
              <td class="text-center">{{$dt->updated_at->diffForHumans()}}</td>


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