<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/team_task/index.blade.php */ ?>
    
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
          <h3 class="box-title">All Team Task</h3>
          <div class="pull-right">
            <a href="team_task/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add Task</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Team Name</th>
                <th class="text-center">Costumer</th>
                <th class="text-center">Task</th>
                <th class="text-center">Status</th>
                <th class="text-center">Created At</th>
                 <th class="text-center">Update At</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody><?php $a=1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center"><?php echo e($a++); ?></td>
           
              <td class="text-center"><?php echo e($dt->team->name); ?></td>
              <td class="text-center"><?php echo e($dt->user->name); ?></td>
              <td class="text-center"><?php echo e($dt->task); ?></td>
              <td class="text-center"> 

                <?php if($dt->status_id == '0'): ?>
                  None
                <?php else: ?>
                  <?php echo e($dt->status->status); ?>

                <?php endif; ?>
              </td>

             <td class="text-center"><?php echo e($dt->created_at->format('d-m-Y')); ?></td>
              <td class="text-center"><?php echo e($dt->updated_at->format('d-m-Y')); ?></td>


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
                            <h4 class="modal-title">Task Details</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped">
                             
                                <tr>
                                  <th>Team Name</th>
                                  <td><?php echo e($dt->team->name); ?></td>
                                </tr>
                                <tr>
                                  <th>Costumer Name</th>
                                  <td><?php echo e($dt->user->name); ?></td>
                                </tr>
                                <tr>
                                  <th>Task</th>
                                  <td><textarea rows="5"><?php echo e($dt->task); ?></textarea></td>
                                </tr>
                                <tr>
                                  <th>Status</th>
                                  <td>
                                  	 <?php if($dt->status_id == '0'): ?>
                  None
                <?php else: ?>
                  <?php echo e($dt->status->status); ?>

                <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Created</th>
                                  <td><?php echo e($dt->created_at->diffForHumans()); ?></td>
                                </tr>
                                <tr>
                                  <th>Updatad</th>
                                  <td> <?php echo e($dt->updated_at->diffForHumans()); ?></td>
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