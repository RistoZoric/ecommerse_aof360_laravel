@extends('backend.layouts.master')
@section('title','E-SHOP || Attributes Create')
@section('main-content')
<div class="row">
   <div class="col-md-10 mx-auto">
<div class="card">
    <h5 class="card-header text-logo">Add Attributes</h5> 
    <div class="card-body">
      <form method="post" action="{{route('attributes.store')}}">
        {{csrf_field()}}

        <div class="row">
          <div class="col-md-4">
          <div class="form-group">
          <label for="AttrName" class="col-form-label">Attribute Name <span class="text-danger">*</span></label>
          <input id="AttrName" type="text" name="attribute_name" placeholder="Attribute Name" class="form-control">
          @error('attribute_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          </div>
          <div class="col-md-4">
                 
        <div class="form-group">
          <label for="attr_type" class="col-form-label">Type <span class="text-danger">*</span></label>
          <select name="attr_type" id="AttrTypeSelect" class="form-control">
              <option>Select Type</option>
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

        </div>
          </div>
          <div class="col-md-4">
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
          </div>
        </div>
    
   


     
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-info">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>
</div></div>
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
          // $("#attrValueField").remove('input');
      }
      // if (attrType == 'radio') {
      //   alert( 'Type is radio' );
      // }
      
    });
    $(".appendfield").attr("placeholder", "Add values separated by commas");
</script>
@endpush