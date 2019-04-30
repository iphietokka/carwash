<?php $__env->startSection('content'); ?>

<div id="dropzone" class="box-body">
  <form method="POST" action="<?php echo e(url('admin/gallery/store')); ?>" class="dropzone" id="gallery-dropzone" files="true" enctype="multipart/form-data">
  	 <?php echo e(csrf_field()); ?>

  
  </form>
    <p>Upload File: jpg, jpeg, png</p>
  </div>
  <div class="box-body">
    <div class="admin-gallery-main-block box-body">
      <div class="row">
        <?php if($data): ?>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-2">
              <div class="admin-gallery-block">
                <img src="<?php echo e(asset('images/gallery')); ?>/<?php echo e($gallery->gallery_img); ?>" class="img-responsive" alt="gallery-img">
                <div class="overlay-bg"></div>
                <div class="gallery-actions-block">
                  <div class="gallery-actions-btns">
                    <button type="button" data-toggle="modal" data-target="#<?php echo e($gallery->id); ?>galleryEditModal" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                    <button type="button" data-toggle="modal" data-target="#<?php echo e($gallery->id); ?>galleryDeleteModal" title="Delete"><i class="fa fa-remove" aria-hidden="true"></i></button>
                  </div>
                </div>
                <!-- Gallery Update Modal -->
                <div id="<?php echo e($gallery->id); ?>galleryEditModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Image</h4>
                      </div>
                    <form method="POST" action="<?php echo e(url('admin/gallery/update/'.$gallery->id)); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?> 
                        <div class="modal-body">
                          <div class="form-group<?php echo e($errors->has('gallery_img') ? ' has-error' : ''); ?>">
                          	  <input type="hidden" name="id" value="<?php echo e($gallery->id); ?>">
                           <label for="inputPassword3" class="col-sm-3 control-label">Change</label>
				    	
				        	<input type="file" class="form-control" placeholder="photo" name="gallery_img">
				    
                            
                            <small class="text-danger"><?php echo e($errors->first('gallery_img')); ?></small>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <div class="btn-group pull-right">
                           <button type="submit" class="btn btn-info pull-right">Save</button>
                          </div>
                        </div>
                     </form>
                    </div>
                  </div>
                </div>
                <!-- Gallery Delete Modal -->
                <div id="<?php echo e($gallery->id); ?>galleryDeleteModal" class="delete-modal modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="delete-icon"></div>
                      </div>
                      <div class="modal-body text-center">
                        <h4 class="modal-heading">Are You Sure ?</h4>
                        <p>Do you really want to delete these records?</p>
                      </div>
                      <div class="modal-footer">
                    
                                   <form class="form-horizontal" method="POST" action="<?php echo e(url('admin/gallery/'.$gallery->id)); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input name="_method" type="hidden" value="DELETE">
                                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/admin/gallery/index.blade.php */ ?>