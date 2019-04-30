   @extends('user.layouts.app')
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
              <h3 class="box-title">All Appointments</h3>
           

             <div class="pull-right">
       <a href="appointment/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add </a>
     
      <!--   -->
      </div>
       </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">#</th>
                
                  <th class="text-center">Vehicle Company</th>
                  <th class="text-center">Vehicle Modal</th>
                  <th class="text-center">Vehicle Type</th>
                  <th class="text-center">Washing Plan</th>
                  <th class="text-center">Appointment Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($data)
                  <?php $a=1;?>
                	@foreach($data as $dt)
                  @if ($dt->user_id == Auth::user()->id)
                <tr>
                  <td>{{$a++}}</td>
                <td class="text-center">{{$dt->vehicle_company->vehicle_company}}</td>
                  <td class="text-center">{{$dt->vehicle_modal->vehicle_modal}}</td>
                  <td class="text-center">{{$dt->vehicle_type->type}}</td>           
                  <td class="text-center">{{$dt->washing_plan->name}} </td>
                   <td class="text-center">{{$dt->appointment_date}}</td>
                     <td class="text-center">

            <form class="form-horizontal" method="POST" action="{{url('user/'.$title.'/'.$dt->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="btn-group">
                  <button type="button" class="btn btn-default">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                     <input name="_method" type="hidden" value="DELETE">
                      <li><a href="{{ url('user/'.$title.'/edit/'.$dt->id) }}">Edit</a></li>
                   <li><a class="js-submit-confirm">Delete</a></li>
                   
                    <li><a data-toggle="modal" data-target="#modal-{{$dt->id}}"  href="#">Details</a></li>
                  </ul>
                </div>
                 <div class="modal fade" id="modal-{{$dt->id}}" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-lg">
          
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Appointment Details</h4>
              </div>
              <div class="modal-body">
                     <table class="table table-bordered table-striped">

   
    <tr>
     <th>Vehicle Company</th>
    <td>{{ $dt->vehicle_company->vehicle_company}}</td>
    </tr>
    <tr>
     <th>Vehicle Model</th>
     <td>{{ $dt->vehicle_modal->vehicle_modal}}</td>
    </tr>
    <tr>
      <th>Vehicle Type</th>
      <td>{{ $dt->vehicle_type->type}}</td>
    </tr>
    <tr>
       <tr>
      <th>Vehicle Plan</th>
      <td>{{$dt->washing_plan->name}}</td>
    </tr>
    <tr>
       <th>Appointment Date</th>
      <td>{{$dt->appointment_date}}</td>
    </tr>
    <tr>
      <th>Vehicle No.</th>
      <td>{{$dt->vehicle_no}}</td>
    </tr>
    <tr>
      <tr>
       <th>Time Frame</th>
      <td>{{$dt->time_frame}}</td>
    </tr>
    <tr>
      <tr>
       <th>Price</th>
      <td>
         @foreach ($washing_prices as $washing_price)
                  @if ($washing_price->washing_plan_id == $dt->washing_plan_id && $washing_price->vehicle_type_id == $dt->vehicle_types_id)
                    ${{number_format($washing_price->price)}}
                  @endif
                @endforeach
      </td>
    </tr>
    <tr>
      <tr>
      <th>Vehicle No.</th>
      <td>{{$dt->vehicle_no}}</td>
    </tr>
  
  
     <tr>
      <th>Status</th>
       <td>
          @if ($dt->status_id == '')
                    -
                  @else
                    {{$dt->status->status}}
                  @endif
       </td>
    </tr>
     <tr>
      <th>Created</th>
       <td>{{$dt->created_at->diffForHumans()}}</td>
    </tr>
     <tr>
      <th>Updated</th>
       <td>{{$dt->updated_at->diffForHumans()}}</td>
    </tr>

  </table>
              </div>
            
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
            </form> 
          </button>
        </td>
      </tr>
                @endif
      @endforeach
    @endif
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      
        <!-- /.col -->
    </section>
      @endsection