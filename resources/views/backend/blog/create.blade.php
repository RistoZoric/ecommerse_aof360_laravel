@extends('backend.layouts.master')

@section('title','E-commerce || Banner Create')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Blog Page</h5>
    <div class="card-body">
      <form method="get" action="{{route('blog-store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <!-- <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Banner <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div> -->

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Post Image <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Short Description <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="short_desc" placeholder="Enter Short Descriptions"  value="{{old('description')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Is Featured <span class="text-danger">*</span></label>
        <!-- <input id="inputTitle" type="radio" name="is_featured" placeholder="Enter Short Descriptions"  value="{{old('description')}}" class="form-control"> -->
       
        <div class="col-sm-10">
					<div class="">
					    <label for="Enable">Enable</label>
						<input type="radio"  placeholder="Enable" name="is_featured" >
					</div>
						<div class="">
					    <label for="Enable">Disable</label>
						<input type="radio"  placeholder="Disable" name="is_featured" >
					</div>
				
				</div>

       
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Content <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="content" placeholder="Enter Descriptions"  value="{{old('description')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <!-- <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Post Image <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
            <input id="thumbnail" class="form-control" type="text" name="post_image" value="{{old('photo')}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div> -->
        

      
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Meta Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="meta_title" placeholder="Enter Meta Title"  value="{{old('description')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Meta Description <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="meta_description" placeholder="Enter Meta Description"  value="{{old('description')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Keyword <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="keyword" placeholder="Enter keyword"  value="{{old('description')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group mb-3">
          <button type="reset" class="btn btn-info">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    // $(document).ready(function() {
    // $('#description').summernote({
    //   placeholder: "Write short description.....",
    //     tabsize: 2,
    //     height: 150
    // });
    // });
</script>
@endpush