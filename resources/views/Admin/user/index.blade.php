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
              <h3 class="box-title">All User's</h3>
           

             <div class="pull-right">
       <a href="user/create" class="btn btn-default"> <i class="fa  fade-plus-square"></i> Add User</a>
     
      <!--   -->
      </div>
       </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="">Photo</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Role</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @if ($data)
                  <?php $a=1;?>
                	@foreach($data as $dt)
                <tr>
                  <td>{{$a++}}</td>
                    <td align="center">
            <img src="{{$dt->photo!='' && File::exists('images/users/'.$dt->photo)?'/images/users/'.$dt->photo:'/images/default.jpg'}}"
                     width="80px" height="70px"/>
          </td>
                  <td class="text-center">{{$dt->name}}</td>
                  <td class="text-center">{{$dt->email}}</td>
                  <td class="text-center"> {{$dt->phone}}</td>
                   <td class="text-center">{{$dt->role == 'A' ? 'Administrator' : 'Customer'}}</td>
                     <td class="text-center">

            <form class="form-horizontal" method="POST" action="{{url('admin/'.$title.'/'.$dt->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="btn-group">
                 <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>

                  <ul class="dropdown-menu" role="menu">
                     <input name="_method" type="hidden" value="DELETE">
                      <li><a href="{{ url('admin/'.$title.'/edit/'.$dt->id) }}">Edit</a></li>
                   <li><a class="js-submit-confirm">Delete</a></li>
                   
                    <li><a data-toggle="modal" data-target="#modal-{{$dt->id}}"  href="#">Details</a></li>
                  </ul>
                </div>
                 <div class="modal fade" id="modal-{{$dt->id}}" aria-labelledby="myLargeModalLabel">
               <div class="modal-dialog modal-lg" role="document">
          
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">User Details</h4>
              </div>
              <div class="modal-body">
                     <table class="table table-bordered table-striped">
 
    <tr>
     <th>Name</th>
     <td>{{ $dt->name }}</td>
    </tr>
    <tr>
     <th>Email</th>
     <td>{{ $dt->email }}</td>
    </tr>
    <tr>
     <th>DOB</th>
     <td>{{ $dt->date_birthday }}</td>
    </tr>
    <tr>
      <th>Phone</th>
      <td>{{$dt->phone}}</td>
    </tr>
    <tr>

     <th>Address</th>
     <td>{{ $dt->address }}</td>
    </tr>
    <tr>
      <th>Sex</th>
      <td> {{$dt->sex  }}</td>
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