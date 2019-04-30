@extends('admin.layouts.app')
@section('content')

<div id="dropzone" class="box-body">
  <form method="POST" action="{{url('admin/gallery/store')}}" class="dropzone" id="gallery-dropzone" files="true" enctype="multipart/form-data">
  	 {{csrf_field()}}
  
  </form>
    <p>Upload File: jpg, jpeg, png</p>
  </div>
  <div class="box-body">
    <div class="admin-gallery-main-block box-body">
      <div class="row">
        @if ($data)
          @foreach ($data as $gallery)
            <div class="col-md-2">
              <div class="admin-gallery-block">
                <img src="{{asset('images/gallery')}}/{{$gallery->gallery_img}}" class="img-responsive" alt="gallery-img">
                <div class="overlay-bg"></div>
                <div class="gallery-actions-block">
                  <div class="gallery-actions-btns">
                    <button type="button" data-toggle="modal" data-target="#{{$gallery->id}}galleryEditModal" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button>
                    <button type="button" data-toggle="modal" data-target="#{{$gallery->id}}galleryDeleteModal" title="Delete"><i class="fa fa-remove" aria-hidden="true"></i></button>
                  </div>
                </div>
                <!-- Gallery Update Modal -->
                <div id="{{$gallery->id}}galleryEditModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Image</h4>
                      </div>
                    <form method="POST" action="{{url('admin/gallery/update/'.$gallery->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                        <div class="modal-body">
                          <div class="form-group{{ $errors->has('gallery_img') ? ' has-error' : '' }}">
                          	  <input type="hidden" name="id" value="{{$gallery->id}}">
                           <label for="inputPassword3" class="col-sm-3 control-label">Change</label>
				    	
				        	<input type="file" class="form-control" placeholder="photo" name="gallery_img">
				    
                            
                            <small class="text-danger">{{ $errors->first('gallery_img') }}</small>
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
                <div id="{{$gallery->id}}galleryDeleteModal" class="delete-modal modal fade" role="dialog">
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
                    
                                   <form class="form-horizontal" method="POST" action="{{url('admin/gallery/'.$gallery->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection

