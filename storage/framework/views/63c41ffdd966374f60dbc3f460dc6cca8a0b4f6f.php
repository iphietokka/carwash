    
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
            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center"><?php echo e($a++); ?></td>
              <td class="text-center"><?php echo e($payment->appointment_id); ?></td>
              <td class="text-center"><?php echo e($payment->user->name); ?></td>
             <td class="text-center">
               <?php if($washing_prices): ?>
                  <?php $__currentLoopData = $washing_prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $washing_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($washing_price->washing_plan_id == $payment->appointment->washing_plan_id && $washing_price->vehicle_type_id == $payment->appointment->vehicle_types_id): ?>
                      <?php echo e($washing_price->price); ?>

                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
             </td>
              <td class="text-center">
                <?php if($payment->discount == ''): ?>
                  -
                <?php else: ?>
                  <?php echo e($payment->discount); ?>

                <?php endif; ?>
              </td>

              <td class="text-center">
                 <?php if($payment->advance == ''): ?>
                  -
                <?php else: ?>
                  <?php echo e($payment->advance); ?>

                <?php endif; ?>
              </td>
             <td class="text-center">
                <?php if($payment->payment_mode_id == ''): ?>
                  -
                <?php else: ?>
                  <?php echo e($payment->payment_mode->mode); ?>

                <?php endif; ?>
             </td>
              <td class="text-center">
                  <?php if($payment->remark == ''): ?>
                  -
                <?php else: ?>
                  <?php echo e($payment->remark); ?>

                <?php endif; ?>
              </td>
              <td class="text-center">

                <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/'.$title.'/'.$payment->id)); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                       <input name="_method" type="hidden" value="DELETE">
      <a class="btn-floating green btn-small" href="<?php echo e(url('admin/'.$title.'/edit/'.$payment->id)); ?>">
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/payment/index.blade.php */ ?>