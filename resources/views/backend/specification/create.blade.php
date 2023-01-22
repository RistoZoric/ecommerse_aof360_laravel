@extends('backend.layouts.master')
@section('title','E-SHOP || Specification Create')
@section('main-content')
 
<div class="card">
    <h5 class="card-header">Add Specification</h5> 
    <div class="card-body">
      <form method="post" action="{{route('specifications.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="AttrName" class="col-form-label">Specification Name <span class="text-danger">*</span></label>
          <input id="AttrName" type="text" name="specification_name" placeholder="Specification Name" class="form-control">
          @error('specification_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="FieldTypeSelect" class="col-form-label">Type <span class="text-danger">*</span></label>
          <select name="field_type" id="FieldTypeSelect" class="form-control">
              <option>Select Type</option>
              <option value="text" id="attrText">Text Field</option>
              <option value="number" id="attrNumber">Number</option>
              <option value="textarea" id="attrTextarea">Text Area</option>
              <option value="radio" id="attrRadio">Radio</option>
              <option value="select" id="attrSelect">Select Field</option>
              <option value="url" id="attrUrl">Url</option>
          </select>
          @error('field_type')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group" id="specifValueField">

        </div>

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
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
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

    $(document).ready(function() {
    $('.appendfield').summernote({
      placeholder: "Add values separated by commas",
        tabsize: 2,
        height: 100
    });
    });

    // var attrName = $('#AttrName').attr('value');
    // $('#AttrTypeSelect').prop('disabled', true);
    // if (attrName != '') {
    //   $('#AttrTypeSelect').prop('disabled', false);
    // }
    
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
          // $("#attrValueField").remove('input');
      }
      // if (attrType == 'radio') {
      //   alert( 'Type is radio' );
      // }
      
    });
    $(".appendfield").attr("placeholder", "Add values separated by commas");
</script>
@endpush