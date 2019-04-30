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
          <h3 class="box-title">All Payments</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                  <th class="text-center">Appointment ID</th>
                <th class="text-center">User</th>
                <th class="text-center">Price</th>
            	   <th class="text-center">Discount</th>
                <th class="text-center">Advance</th>
                <th class="text-center">Payment Method</th>
                <th class="text-center">Remark</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody><?php $a=1 ?>
            @foreach($payments as $payment)
            <tr>
              <td class="text-center">{{$a++}}</td>
              <td class="text-center">{{$payment->appointment_id}}</td>
              <td class="text-center">{{$payment->user->name}}</td>
             <td class="text-center">
               @if ($washing_prices)
                  @foreach ($washing_prices as $washing_price)
                    @if ($washing_price->washing_plan_id == $payment->appointment->washing_plan_id && $washing_price->vehicle_type_id == $payment->appointment->vehicle_types_id)
                      {{$washing_price->price}}
                    @endif
                  @endforeach
                @endif
             </td>
              <td class="text-center">
                @if ($payment->discount == '')
                  -
                @else
                  {{$payment->discount}}
                @endif
              </td>

              <td class="text-center">
                 @if ($payment->advance == '')
                  -
                @else
                  {{$payment->advance}}
                @endif
              </td>
             <td class="text-center">
                @if ($payment->payment_mode_id == '')
                  -
                @else
                  {{$payment->payment_mode->mode}}
                @endif
             </td>
              <td class="text-center">
                  @if ($payment->remark == '')
                  -
                @else
                  {{$payment->remark}}
                @endif
              </td>
              <td class="text-center">

                <form class="form-horizontal" method="POST" action="{{url('admin/'.$title.'/'.$payment->id) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                       <input name="_method" type="hidden" value="DELETE">
      <a class="btn-floating green btn-small" href="{{ url('admin/'.$title.'/edit/'.$payment->id) }}">
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