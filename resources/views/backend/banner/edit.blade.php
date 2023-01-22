@extends('backend.layouts.master')
@section('title','E-SHOP || Banner Edit')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Banner</h5>
    <div class="card-body">
      <form method="post" action="{{route('banner.update',$banner->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$banner->title}}" class="form-control">
          @error('title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
 
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Description</label>
          <textarea rows="3" class="form-control" id="description" name="description">{{ strip_tags($banner->description) }}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputOffTitle" class="col-form-label">Offer Title <span class="text-danger">*</span></label>
          <input id="inputOffTitle" type="text" name="offer_title" placeholder="Offer title" value="{{$banner->offer_title}}" class="form-control">
          @error('offer_title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputOffPrice" class="col-form-label">Offer Price <span class="text-danger">*</span></label>
          <input id="inputOffPrice" type="text" name="offer_price" placeholder="Offer price" value="{{$banner->offer_price}}" class="form-control">
          @error('offer_price')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputBtnLink" class="col-form-label">Button Link <span class="text-danger">*</span></label>
          <input id="inputBtnLink" type="text" name="button_link" placeholder="Button link" value="{{$banner->button_link}}" class="form-control">
          @error('button_link')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$banner->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($banner->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($banner->status=='inactive') ? 'selected' : '')}}>Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
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