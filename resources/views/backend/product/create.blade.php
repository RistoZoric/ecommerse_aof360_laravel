@extends('backend.layouts.master')

@section('main-content')
<div class="row">
  <div class="col-md-10 mx-auto">

<form method="post" action="{{route('product.store')}}">
  {{csrf_field()}}


  <div class="card">
  <h5 class="card-header text-logo">Add Product</h5>
    <div class="card-body">


  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Product Name <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Product name" value="{{old('title')}}" class="form-control" required="">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="col-md-6">

      <div class="form-group">
        <label for="inputCode" class="col-form-label">Product Code <span class="text-danger">*</span></label>
        <input id="inputCode" type="text" name="product_code" placeholder="Product Code" value="{{old('product_code')}}" class="form-control" required="">
        @error('product_code')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="cat_id">Category <span class="text-danger">*</span></label>
        <select name="cat_id" id="cat_id" class="form-control">
          <option value="">--Select any category--</option>
          @foreach($categories as $key=>$cat_data)
          <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group d-none" id="child_cat_div">
        <label for="child_cat_id">Sub Category</label>
        <select name="child_cat_id" id="child_cat_id" class="form-control">
          <option value="">--Select any category--</option>
          {{-- @foreach($parent_cats as $key=>$parent_cat)
                  <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
          @endforeach --}}
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="price" class="col-form-label">Price(NRS) <span class="text-danger">*</span></label>
        <input id="price" type="number" name="price" step="0.01" placeholder="Enter price" value="{{old('price')}}" class="form-control">
        @error('price')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="discount" class="col-form-label">Discount(%)</label>
        <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount" value="{{old('discount')}}" class="form-control">
        @error('discount')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="brand_id">Brand</label>
        <select name="brand_id" class="form-control">
          <option value="">--Select Brand--</option>
          @foreach($brands as $brand)
          <option value="{{$brand->id}}">{{$brand->title}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="condition">Condition</label>
        <select name="condition" class="form-control">
          <option value="">--Select Condition--</option>
          <option value="default">Default</option>
          <option value="new">New</option>
          <option value="hot">Hot</option>
        </select>
      </div>
    </div>
  
  </div>
  <div class="row">
    <div class="col-md-6">

      <div class="form-group">
        <label for="stock">Stock Quantity <span class="text-danger">*</span></label>
        <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity" value="{{old('stock')}}" class="form-control">
        @error('stock')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="is_featured">Is Featured</label><br>
        <input type="checkbox" name='is_featured' id='is_featured' value='1' checked> Yes
      </div>
      {{-- {{$categories}} --}}
    </div>
  </div>

    </div>
    </div>
  <!-- <div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6"></div>
</div> -->


<div class="card">

<div class="card-body">

  <div class="form-group">
    <label for="summary" class="col-form-label">Short Description <span class="text-danger">*</span></label>
    <textarea rows="3" maxlength="250" class="form-control" id="summary" name="summary" required="" placeholder="Product short description..">{{old('summary')}}</textarea>
    <span id="summaryspan" class="text-danger">maximum 250 characters</span>
    @error('summary')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  </div>
    </div>
    <div class="card">

<div class="card-body">
  <div class="form-group">
    <label for="description" class="col-form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
    @error('description')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  </div>
    </div>

    <div class="card">
    <h5 class="card-header text-logo">Shipping</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputCode" class="col-form-label">Weight (g)<span class="text-danger">*</span></label>
              <fieldset>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">g</span>
                  </div>
                  <input type="text" name="weight" class="form-control" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputCode" class="col-form-label">Length (cm) <span class="text-danger">*</span></label>
              <fieldset>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">cm</span>
                  </div>
                  <input type="text" name="length" class="form-control" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
              @error('product_code')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputCode" class="col-form-label">Wide (cm) <span class="text-danger">*</span></label>
              <fieldset>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">cm</span>
                  </div>
                  <input type="text" name="wide" class="form-control" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputCode" class="col-form-label">Height (cm)<span class="text-danger">*</span></label>
              <fieldset>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">cm</span>
                  </div>
                  <input type="text" name="height" class="form-control" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
              
            </div>
          </div>
        </div>
      </div>
  </div>

    <div class="card">

<div class="card-body">



  <div class="form-group">
    <label for="choose_variation">Choose Attributes</label>
    <select data-placeholder="Type Attribute Name or select" name="attribute_selects[]" id="choose_variation" class="chosen-select form-control attrSelect" multiple>
      @foreach($attributes as $attrss)
      <option value="{{$attrss->id}}">{{$attrss->attribute_name}}</option>
      @endforeach
    </select>
    <button type="button" id="attrSubmit" class="btn input-group-text mt-2">Select Attributes</button>
  </div>

  <div id="attrAppends">

  </div>
 
  </div>
    </div>


    <div class="card">
<div class="card-body">

  <div class="row">
    <div class="form-group col-md-3">
      <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
      <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn input-group-text">
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

    <div class="form-group col-md-3">
      <label for="inputPhoto" class="col-form-label">Gallery Photo1 </label>
      <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn input-group-text">
            <i class="fa fa-picture-o"></i> Choose
          </a>
        </span>
        <input id="thumbnail1" class="form-control" type="text" name="photoone" value="{{old('photoone')}}">
      </div>
      <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
      @error('photoone')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group col-md-3">
      <label for="inputPhoto" class="col-form-label">Gallery Photo2 </label>
      <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn input-group-text">
            <i class="fa fa-picture-o"></i> Choose
          </a>
        </span>
        <input id="thumbnail2" class="form-control" type="text" name="phototwo" value="{{old('phototwo')}}">
      </div>
      <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
      @error('phototwo')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group col-md-3">
      <label for="inputPhoto" class="col-form-label">Gallery Photo3 </label>
      <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn input-group-text">
            <i class="fa fa-picture-o"></i> Choose
          </a>
        </span>
        <input id="thumbnail3" class="form-control" type="text" name="photothree" value="{{old('photothree')}}">
      </div>
      <div id="holder3" style="margin-top:15px;max-height:100px;"></div>
      @error('photothree')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    </div>
    </div>
  </div>


  <div class="card">
<div class="card-body">
  <div class="row faqs">
    <div class="col-md-10">
      <!-- <fieldset id="quesans"> -->
      <table class="table" id="quesans">
        <label for="faqs" class="col-form-label">Product FAQs </label>
        <tr>
          <td>
            <input type="text" name="addmore[0][question]" placeholder="Enter question" class="form-control mb-2">
          </td>
          <td>
            <input type="text" name="addmore[0][answer]" placeholder="Enter answer" class="form-control mb-4">
          </td>
        </tr>
      </table>
    </div>

    <div class="col-md-1 m-2 p-1">
      <input type="button" value="+Add more" class="add btn input-group-text back-logo" name="add" id="add" />
    </div>
  </div>
  </div>  
</div>

<div class="form-group">
    <label for="choose_specification">Choose Specifications</label>
    <select data-placeholder="Type Specification Name or select" name="specifications[]" id="choose_specification" class="chosen-select form-control specificSelect" multiple>
      @foreach($specifications as $specific)
      <option value="{{$specific->id}}">{{$specific->specification_name}}</option>
      @endforeach
    </select>
    <button type="button" id="specificSubmit" class="btn input-group-text mt-2">Select Specifications</button>
  </div>

  <div id="specificaAppends">

  </div>
 <div class="card">
<div class="card-body">
  <div class="form-group">
    <label for="seoTitle" class="col-form-label">SEO Title <span class="text-danger">*</span></label>
    <input id="seoTitle" type="text" name="seo_title" placeholder="SEO Title" value="{{old('seo_title')}}" class="form-control">
    @error('seo_title')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="form-group">
    <label for="seoDescrip" class="col-form-label">SEO Description <span class="text-danger">*</span></label>
    <input id="seoDescrip" type="text" name="seo_description" placeholder="SEO Description" value="{{old('seo_description')}}" class="form-control">
    @error('seo_description')
    <span class="text-danger">{{$message}}</span>
    @enderror
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
    <button type="reset" class="btn btn-info">Reset</button>
    <button class="btn btn-success" type="submit">Submit</button>
  </div>
  </div>  </div>
</form>

</div>  </div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<link rel="stylesheet" href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>

<script>
  $('#lfm').filemanager('image');

  $('#lfm1').filemanager('image');
  $('#lfm2').filemanager('image');
  $('#lfm3').filemanager('image');

  // $(document).ready(function() {
  //   $('#summary').summernote({
  //     placeholder: "Product short description..",
  //       tabsize: 2,
  //       height: 100
  //   });
  // });

  $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Product detail description..",
      tabsize: 2,
      height: 150
    });
  });

  $('#summary').on("change keyup input", function() {
    var tval = $('#summary').val(),
      tlength = tval.length,
      set = 250,
      remain = parseInt(set - tlength);
    $('#summaryspan').text('character remains :' + remain);
  });
</script>

<script>
  $('#cat_id').change(function() {
    var cat_id = $(this).val();
    // alert(cat_id);
    if (cat_id != null) {
      // Ajax call
      $.ajax({
        url: "/admin/category/" + cat_id + "/child",
        data: {
          _token: "{{csrf_token()}}",
          id: cat_id
        },
        type: "POST",
        success: function(response) {
          if (typeof(response) != 'object') {
            response = $.parseJSON(response)
          }
          // console.log(response);
          var html_option = "<option value=''>----Select sub category----</option>"
          if (response.status) {
            var data = response.data;
            // alert(data);
            if (response.data) {
              $('#child_cat_div').removeClass('d-none');
              $.each(data, function(id, title) {
                html_option += "<option value='" + id + "'>" + title + "</option>"
              });
            } else {}
          } else {
            $('#child_cat_div').addClass('d-none');
          }
          $('#child_cat_id').html(html_option);
        }
      });
    } else {}
  })
</script>

<script type="text/javascript">
  var i = 0;
  $("#add").click(function() {
    ++i;

    $("#quesans").append('<tr><td><input type="text" name="addmore[' + i + '][question]" placeholder="Enter question" class="form-control mb-2" /></td><td><input type="text" name="addmore[' + i + '][answer]" placeholder="Enter answer" class="form-control mb-2" /></td><td><button type="button" class="btn btn-danger mb-4 remove-tr">Remove</button></div></td></tr>');
  });

  $(document).on('click', '.remove-tr', function() {
    $(this).parents('tr').remove();
  });
</script>

<script type="text/javascript">
  $(".chosen-select").chosen({
    no_results_text: "Oops, nothing found!"
  })

  $(document).ready(function() {
    $('#attrSubmit').attr('disabled', true);
    $("#attrAppends .form-group").remove();
    $('#attrAppends').removeAttr('style');
    $('#choose_variation').change(function() {
      var attrvals = $("#choose_variation").val();
      if (attrvals != "") {
        $('#attrSubmit').attr('disabled', false);
      } else {
        $('#attrSubmit').attr('disabled', true);
        $("#attrAppends .form-group").remove();
        $('#attrAppends').removeAttr('style');
      }
    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $("#attrSubmit").click(function() {
      event.preventDefault();
      let attrids = $("#choose_variation").val();
      $("#attrAppends .form-group").remove();
      $('#attrAppends').removeAttr('style');
      $.ajax({
        url: "{{route('attrvalues')}}",
        data: {
          "id": attrids
        },
        type: 'POST',
        success: function(result) {
          $('#attrAppends').append(result);
          $("#attrAppends").css({
            "border": "1px solid #0000004a",
            "padding": "3px 15px",
            "margin": "10px 3px",
            "border-radius": "5px"
          });
        }
      });
    });

  });

  // jquery for specification selection
  $(document).ready(function() {
    $('#specificSubmit').attr('disabled', true);
    $("#specificaAppends .form-group").remove();
    $('#specificaAppends').removeAttr('style');
    $('#choose_specification').change(function() {
      var specvals = $("#choose_specification").val();
      if (specvals != "") {
        $('#specificSubmit').attr('disabled', false);
      } else {
        $('#specificSubmit').attr('disabled', true);
        $("#specificaAppends .form-group").remove();
        $('#specificaAppends').removeAttr('style');
      }
    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $("#specificSubmit").click(function() {
      event.preventDefault();
      let specids = $("#choose_specification").val();
      $("#specificaAppends .form-group").remove();
      $('#specificaAppends').removeAttr('style');
      $.ajax({
        url: "{{route('specvalues')}}",
        data: {
          "id": specids
        },
        type: 'POST',
        success: function(result) {
          $('#specificaAppends').append(result);
          $("#specificaAppends").css({
            "border": "1px solid #0000004a",
            "padding": "3px 15px",
            "margin": "10px 3px",
            "border-radius": "5px"
          });
        }
      });
    });

  });
</script>
@endpush