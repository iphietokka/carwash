    
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
          <h3 class="box-title">All Client</h3>
          <div class="pull-right">
            <a href="client/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Logo</th>
                <th class="text-center">Created</th>
            	<th class="text-center">Updated</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <tr><?php $a=1; ?>

              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <td class="text-center"><?php echo e($a++); ?></td>
          	 <td class="text-center"><?php echo e($dt->name); ?></td>
               <td align="center">
                <img src="<?php echo e($dt->image!='' && File::exists('images/client/'.$dt->image)?'/images/client/'.$dt->image:'/images/default.jpg'); ?>"
                width="80px" height="70px"/>
              </td>

             <td class="text-center"><?php echo e($dt->created_at->diffForHumans()); ?></td>
              <td class="text-center"><?php echo e($dt->updated_at->diffForHumans()); ?></td>


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

                    
                    </ul>
                  </div>
                
                           
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/Admin/client/index.blade.php */ ?>