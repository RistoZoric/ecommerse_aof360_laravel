@extends('backend.layouts.master')
@section('title','E-SHOP || Attribute Value Edit')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Attribute Value</h5>
    <div class="card-body">
      <form method="post" action="{{route('attrvalue_update')}}">
        @csrf 
        <!-- @method('PATCH') -->
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Attribute Name <span class="text-danger">*</span></label>
          <input type="hidden" name="id" value="{{ $attrivals[0]->id }}">
            <input id="inputTitle" type="text" name="attribute_name" value="{{$attributes[0]->attribute_name}}" class="form-control" readonly>
            <input type="hidden" name="attribute_id" value="{{ $attributes[0]->id }}">
            @error('attribute_name')
                  <span class="text-danger">{{$message}}</span>
            @enderror
        </div>        
        <div class="form-group">
          <label for="attValue" class="col-form-label">Value <span class="text-danger">*</span></label>
          <input id="attValue" type="text" name="values" value="{{$attrivals[0]->name}}" class="form-control">
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

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush