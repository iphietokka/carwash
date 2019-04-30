    
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
            <a href="washing_price/create" class="btn btn-default"> <i class="fa  fa-plus-square"></i> Add Price</a>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Vehicle Type</th>
                <th class="text-center">Washing Plan</th>
                <th class="text-center">Price</th>
                <th class="text-center">Duration</th>
                <th class="text-center">Created At</th>
                 <th class="text-center">Update At</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <tr><?php $a=1; ?>
              <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <td class="text-center"><?php echo e($a++); ?></td>
           
              <td class="text-center"><?php echo e(Helper::getDetail('vehicle_types', $dt->vehicle_type_id,'type','id')); ?></td>
              <td class="text-center"><?php echo e(Helper::getDetail('washing_plans', $dt->washing_plan_id,'name','id')); ?></td>
              <td class="text-center">$<?php echo e(number_format($dt->price)); ?></td>
              <td class="text-center"><?php echo e($dt->duration); ?> </td>

             <td class="text-center"><?php echo e($dt->created_at->diffForHumans()); ?></td>
              <td class="text-center"><?php echo e($dt->updated_at->diffForHumans()); ?></td>


              <td class="text-center">

                <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/'.$title.'/'.$dt->id)); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                  <input name="_method" type="hidden" value="DELETE">
      <a class="btn-floating green btn-small" href="<?php echo e(url('admin/'.$title.'/edit/'.$dt->id)); ?>">
        <i class="fa fa-edit" > </i> 
      </a>
      | 
      <a class="js-submit-confirm">
        <i class="fa fa-trash" style="color:red"> </i></a>
   

  
                  </form> 
               
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/washing_price/index.blade.php */ ?>