@extends('backend.layouts.master')
@section('title','E-SHOP || Attribute Edit')
@section('main-content')
@php
  $attr_values = $attributes->attr_values;
  $attr_type = $attributes->attr_type;
@endphp
<div class="card">
    <h5 class="card-header">Edit Attribute</h5>
    <div class="card-body">
      <form method="post" action="{{route('attributes.update',$attributes->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Attribute Name <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="attribute_name" placeholder="Attribute Name"  value="{{$attributes->attribute_name}}" class="form-control">
          @error('attribute_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="attr_type" class="col-form-label">Type <span class="text-danger">*</span></label>
          <select name="attr_type" id="AttrTypeSelect" class="form-control">
              <option value="{{ $attr_type }}">@if($attr_type=='default')Select Type @else{{ $attr_type }}@endif</option>
              <option value="text" id="attrText">Text Field</option>
              <option value="number" id="attrNumber">Number</option>
              <option value="textarea" id="attrTextarea">Text Area</option>
              <option value="radio" id="attrRadio">Radio</option>
              <option value="select" id="attrSelect">Select Field</option>
              <option value="checkbox" id="attrCheckbox">Checkbox</option>
              <option value="file" id="attrFile">File</option>
              <option value="url" id="attrUrl">Url</option>
              <option value="group" id="attrGroup">Group</option>
          </select>
          @error('attr_type')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group" id="attrValueField">
        @if($attr_values != null)
          <div class="added_row">
            <label for="attr_type_" class="col-form-label">Attribute Values <span class="text-danger">*</span></label>
              <textarea class="form-control" id="appendfield" name="attr_values">{{$attr_values}}</textarea>
          </div>
          @endif
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($attributes->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($attributes->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });

    $('#AttrTypeSelect').on('change', function() {
      //var attrNameslug = attrName.replace(/ /g,"_");
      var attrType = this.value;
      switch( attrType ){
        case 'radio':
          $("#attrValueField .added_row").remove();
          $('#attrValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Attribute Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="attr_values"></textarea></div>');
          break;

        case 'select':
          $("#attrValueField .added_row").remove();
          $('#attrValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Attribute Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="attr_values"></textarea></div>');
          break;

        case 'checkbox':
          $("#attrValueField .added_row").remove();
          $('#attrValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Attribute Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="attr_values"></textarea></div>');
          break;

        case 'group':
          $("#attrValueField .added_row").remove();
          $('#attrValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Attribute Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="attr_values"></textarea></div>');
          break;

        default:
          $("#attrValueField .added_row").remove();
      }
      
    });
</script>
@endpush