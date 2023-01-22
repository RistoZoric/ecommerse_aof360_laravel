@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Shipping Settings</h5>
    <div class="card-body">
    <form method="post" action="{{route('ecommerce-general')}}">
        @csrf 
        
        <div class="form-group">
          <label for="site_title" class="col-form-label">Site Title <span class="text-danger">*</span></label>
          <textarea class="form-control" id="site_title" name="site_title"></textarea>
          @error('site_title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="short_des" class="col-form-label">Meta Keywords <span class="text-danger">*</span></label>
          <textarea class="form-control" id="quote" name="meta_keywords"></textarea>
          @error('meta_keywords')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="description" class="col-form-label">Meta Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="meta_description"></textarea>
          @error('meta_description')
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });

    $(document).ready(function() {
      $('#quote').summernote({
        placeholder: "Write Meta Keywords..",
          tabsize: 2,
          height: 100
      });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write Meta description..",
          tabsize: 2,
          height: 150
      });
    });
</script>
@endpush