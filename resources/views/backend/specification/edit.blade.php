@extends('backend.layouts.master')
@section('title','E-SHOP || Specifications Edit')
@section('main-content')
@php
  $field_values = $specifications->field_values;
  $field_type = $specifications->field_type;
@endphp
<div class="card"> 
    <h5 class="card-header">Edit Specifications</h5>
    <div class="card-body">
      <form method="post" action="{{route('specifications.update',$specifications->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Specification Name <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="specification_name" placeholder="Specification Name"  value="{{$specifications->specification_name}}" class="form-control">
          @error('specification_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="field_type" class="col-form-label">Type <span class="text-danger">*</span></label>
          <select name="field_type" id="FieldTypeSelect" class="form-control">
              <option value="{{ $field_type }}">@if($field_type=='default')Select Type @else{{ $field_type }}@endif</option>
              <option value="text" id="attrText">Text Field</option>
              <option value="number" id="attrNumber">Number</option>
              <option value="textarea" id="attrTextarea">Text Area</option>
              <option value="radio" id="attrRadio">Radio</option>
              <option value="select" id="attrSelect">Select Field</option>
              <option value="checkbox" id="attrCheckbox">Checkbox</option>
              <option value="url" id="attrUrl">Url</option>
          </select>
          @error('field_type')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group" id="specifValueField">
          @if($field_values != null)
          <div class="added_row">
            <label for="field_type" class="col-form-label">Field Values <span class="text-danger">*</span></label>
              <textarea class="form-control" id="appendfield" name="field_values">{{$field_values}}</textarea>
          </div>
          @endif
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($specifications->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($specifications->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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

    $('#FieldTypeSelect').on('change', function() {
      //var attrNameslug = attrName.replace(/ /g,"_");
      var fieldType = this.value;
      switch( fieldType ){
        case 'radio':
          $("#specifValueField .added_row").remove();
          $('#specifValueField').append('<div class="added_row"><label for="field_type_" class="col-form-label">Field Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="field_values"></textarea></div>');
          break;

        case 'select':
          $("#specifValueField .added_row").remove();
          $('#specifValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Field Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="field_values"></textarea></div>');
          break;

        case 'checkbox':
          $("#specifValueField .added_row").remove();
          $('#specifValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Field Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="field_values"></textarea></div>');
          break;

        case 'group':
          $("#specifValueField .added_row").remove();
          $('#specifValueField').append('<div class="added_row"><label for="attr_type_" class="col-form-label">Field Values <span class="text-danger">*</span></label><textarea class="form-control" id="appendfield" name="field_values"></textarea></div>');
          break;

        default:
          $("#specifValueField .added_row").remove();
      }
      
    });
</script>
@endpush