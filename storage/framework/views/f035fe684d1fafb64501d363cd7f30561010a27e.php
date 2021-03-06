    
    <?php $__env->startSection('content'); ?>

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
          <h3 class="box-title">All Team's</h3>
          <div class="pull-right">
            <a href="team/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add User</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody><?php $a=1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($a++); ?></td>
              <td align="center">
                <img src="<?php echo e($dt->photo!='' && File::exists('images/team/'.$dt->photo)?'/images/team/'.$dt->photo:'/images/default.jpg'); ?>"
                width="80px" height="70px"/>
              </td>
              <td class="text-center"><?php echo e($dt->name); ?></td>
              <td class="text-center"><?php echo e($dt->email); ?></td>
              <td class="text-center"> <?php echo e($dt->phone); ?></td>
              <td class="text-center">

                <?php if($dt->status === 'A'): ?>
                <span style="color: black"><i style="color: green" class="fa fa-check"></i></span>
                <?php elseif($dt->status === 'I'): ?>
                <span style="color: red"><i style="color: red" class="fa fa-close"></i></span>
                <?php else: ?>
                <span class="mj_btn btn btn-warning">Undefined</span>
                <?php endif; ?>
              </td>


              <td class="text-center">

                <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/'.$title.'/'.$dt->id)); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <input name="_method" type="hidden" value="DELETE">
                      <li><a href="<?php echo e(url('admin/'.$title.'/edit/'.$dt->id)); ?>">Edit</a></li>
                      <li><a class="js-submit-confirm">Delete</a></li>

                      <li><a data-toggle="modal" data-target="#modal-<?php echo e($dt->id); ?>"  href="#">Details</a></li>
                    </ul>
                  </div>
                  <div class="modal fade" id="modal-<?php echo e($dt->id); ?>" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">

                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Team Details</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped">
                            
                                <tr>
                                  <th>Name</th>
                                  <td><?php echo e($dt->name); ?></td>
                                </tr>
                                <tr>
                                  <th>Email</th>
                                  <td><?php echo e($dt->email); ?></td>
                                </tr>
                                <tr>
                                  <th>DOB</th>
                                  <td><?php echo e($dt->date_birthday); ?></td>
                                </tr>
                                <tr>
                                  <th>Phone</th>
                                  <td><?php echo e($dt->phone); ?></td>
                                </tr>
                                <tr>
                                  <th>Address</th>
                                  <td><?php echo e($dt->address); ?></td>
                                </tr>
                                <tr>
                                  <th>Sex</th>
                                  <td> <?php echo e($dt->sex); ?></td>
                                </tr>
                                <tr>
                                  <th>Join Date</th>
                                  <td> <?php echo e($dt->date_join); ?></td>
                                </tr>
                                <tr>
                                  <th>Post</th>
                                  <td> <?php echo e($dt->post); ?></td>
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.col -->
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/team/index.blade.php */ ?>