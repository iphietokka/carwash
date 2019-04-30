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
      <h3 class="box-title">Washing Plan</h3>
      <div class="pull-right">
        <button type="button" class="btn btn-default btn-add" data-toggle="modal" data-target="#washing_plan_Modal">Add Plan</button>
      </div>
    </div>
    <!-- modal create plan -->
  <div class="modal fade" tabindex="-1" role="dialog" id="washing_plan_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Washing Plan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
         <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/washing_plan/store')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?> 
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Plan Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Plan Name" name="name" required="">
                  </div>
                </div>
                </div>
              </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!--  end modal -->

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">Washing Plan</th>
            <th class="text-center">Service</th>
            <th class="text-center">Created</th>
            <th class="text-center">Updated</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody><?php $a=1;?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="text-center"><?php echo e($a++); ?></td>
          <td class="text-center"><?php echo e($dt->name); ?></td>
          <td align="center">

            <a href="#" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#<?php echo e($dt->id); ?>createModal">Service Details</a>
            <!-- Social Modal -->
          <div class="modal fade" tabindex="-1" role="dialog" id="<?php echo e($dt->id); ?>createModal">
              <div class="modal-dialog" role="document">
                <!-- Modal content-->
               <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Washing Services</h4>
                  </div>
                  <div class="modal-body">
                    
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Washing Services</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $a=1;?>
                          <?php $__currentLoopData = $datain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($datas->washing_plan_id == $dt->id): ?>
                          <tr>
                            <td><?php echo e($a++); ?></td>
                            <td><?php echo e($datas->washing_plan_include); ?></td>
                            <td>
                              <a href="" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit_modal<?php echo e($datas->id); ?>"> <i class="fa fa-edit"></i></a>
                              <!-- Social Modal -->
                             <div class="modal fade" tabindex="-1" role="dialog" id="edit_modal<?php echo e($datas->id); ?>">
                      <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Update Includes</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <form method="POST" action="<?php echo e(url('admin/washing_plan_in/update/'.$datas->id)); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?> 
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Plan Name</label>
                                  <div class="col-sm-9">
                                    <input type="hidden" name="id" value="<?php echo e($datas->id); ?>">
                                    <input type="text" class="form-control" placeholder="Name" name="washing_plan_include" value="<?php echo e($datas->washing_plan_include); ?>">
                                    <input type="hidden" name="washing_plan_id" value="<?php echo e($dt->id); ?>">
                                  </div>
                                </div>
                                </div>
                              </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                      </form>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                            <!-- delete button -->
                            <a href="" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_modal<?php echo e($datas->id); ?>"><i class="fa fa-trash"></i></a>
                            <!-- Social Modal -->
                            <div class="modal fade" tabindex="-1" role="dialog" id="delete_modal<?php echo e($datas->id); ?>">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  
                                </div>
                                <div class="modal-body text-center">
                                  <div class="row">
                                  
                                 <h4 class="modal-heading">Are You Sure?</h4>
                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                          </div>
                                        </div>
                                <div class="modal-footer">
                                   <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/washing_plan_in/'.$datas->id)); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input name="_method" type="hidden" value="DELETE">
                                     <button type="reset" class="btn btn-grey">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </form>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
           
                       <form class="form-horizontal"  method="POST" action="<?php echo e(url('admin/washing_plan_in/store')); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>


               
                    <div class="form-group">
                    <label class="col-md-4 control-label">Service : </label>
                    <div class="col-md-6">
                       <input type="hidden" name="washing_plan_id" value="<?php echo e($dt->id); ?>">
                      <input type="text" class="form-control" placeholder="Name" name="washing_plan_include">
                    </div>
                  </div>
                 
            
                  <div class="modal-footer">
                  
                     <input type="hidden" name="washing_plan_id" value="<?php echo e($dt->id); ?>">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-info">Save</button>
                 
                      </form>
              </div>
              </div>
             </div>
                
            
          
             
            
   </td>
            
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
        </div>
      </div>
    </form>
  </div>
</div>
</div>
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/washing_plan/index.blade.php */ ?>