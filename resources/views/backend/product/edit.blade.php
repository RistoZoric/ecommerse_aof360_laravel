@extends('backend.layouts.master')

@section('main-content')
<div class="row">
  <div class="col-md-10 mx-auto">
<div class="card">
    <h5 class="card-header text-logo">Edit Product</h5>
    <div class="card-body">
      <form method="post" action="{{route('product.update',$product->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Product Name <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$product->title}}" class="form-control">
          @error('title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputCode" class="col-form-label">Product Code <span class="text-danger">*</span></label>
          <input id="inputCode" type="text" name="product_code" value="{{$product->product_code}}" class="form-control">
          @error('product_code')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="summary" class="col-form-label">Short Description <span class="text-danger">*</span></label>
          <textarea rows="3" maxlength="250" class="form-control" id="summary" name="summary" placeholder="Product short description..">{{ strip_tags($product->summary) }}</textarea>
          <span id="summaryspan" class="text-danger">maximum 250 characters</span>
          @error('summary')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
 
        <div class="form-group">
          <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
          @error('description')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="is_featured">Is Featured</label><br>
          <input type="checkbox" name='is_featured' id='is_featured' value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}> Yes                        
        </div>

        
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
                  <input type="text" name="weight" class="form-control" value="{{$product->weight}}" placeholder="0" aria-describedby="basic-addon1" required="">
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
                  <input type="text" name="length" class="form-control" value="{{$product->length}}" placeholder="0" aria-describedby="basic-addon1" required="">
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
                  <input type="text" name="wide" class="form-control" value="{{$product->wide}}" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
              @error('product_code')
              <span class="text-danger">{{$message}}</span>
              @enderror
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
                  <input type="text" name="height" class="form-control" value="{{$product->height}}" placeholder="0" aria-describedby="basic-addon1" required="">
                </div>
              </fieldset>
              @error('product_code')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div> 
        </div>     

          {{-- {{$categories}} --}}

        <div class="form-group">
          <label for="cat_id">Category <span class="text-danger">*</span></label>
          <select name="cat_id" id="cat_id" class="form-control">
              <option value="">--Select any category--</option>
              @foreach($categories as $key=>$cat_data)
                  <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>
              @endforeach
          </select>
        </div>
        @php 
          $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
        // dd($sub_cat_info);

        @endphp
        {{-- {{$product->child_cat_id}} --}}
        <div class="form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">
          <label for="child_cat_id">Sub Category</label>
          <select name="child_cat_id" id="child_cat_id" class="form-control">
              <option value="">--Select any sub category--</option>
              
          </select>
        </div>

        <div class="form-group">
          <label for="price" class="col-form-label">Price(NRS) <span class="text-danger">*</span></label>
          <input id="price" type="number" name="price" step="0.01" placeholder="Enter price"  value="{{$product->price}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="discount" class="col-form-label">Discount(%)</label>
          <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount" value="{{$product->discount}}" class="form-control">
          @error('discount')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="choose_variation">Choose Attributes</label>
          <select data-placeholder="Type Attribute Name or select" name="attribute_selects[]" id="choose_variation" class="chosen-select form-control attrSelect" multiple>
            
              @foreach($attributes as $attrss)
                @php
                  $issel='';
                @endphp
                @foreach($prod_attrss as $prod_attr)
                  @if($prod_attr->attribute_id==$attrss->id)
                    @php
                      $issel='selected';
                    @endphp
                  @endif
                @endforeach
                <option {{ $issel }} value="{{$attrss->id}}">{{$attrss->attribute_name}}</option>
              @endforeach
          </select>
          <button type="button" id="attrSubmit" class="btn btn-info">Select Attributes</button>
        </div>

        <div id="attrAppends">
           
              {!!html_entity_decode($prod_attrs)!!}
          
        </div>
        
        <div class="form-group">
          <label for="brand_id">Brand</label>
          <select name="brand_id" class="form-control">
              <option value="">--Select Brand--</option>
             @foreach($brands as $brand)
              <option value="{{$brand->id}}" {{(($product->brand_id==$brand->id)? 'selected':'')}}>{{$brand->title}}</option>
             @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="condition">Condition</label>
          <select name="condition" class="form-control">
              <option value="">--Select Condition--</option>
              <option value="default" {{(($product->condition=='default')? 'selected':'')}}>Default</option>
              <option value="new" {{(($product->condition=='new')? 'selected':'')}}>New</option>
              <option value="hot" {{(($product->condition=='hot')? 'selected':'')}}>Hot</option>
          </select>
        </div>

        <div class="form-group">
          <label for="stock">Quantity <span class="text-danger">*</span></label>
          <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{$product->stock}}" class="form-control">
          @error('stock')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="row">
          <div class="form-group col-md-3">
            <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fas fa-image"></i> Choose
                    </a>
                </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$product->photo}}">
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
                  <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
                  <i class="fas fa-image"></i> Choose
                  </a>
              </span>
          <input id="thumbnail1" class="form-control" type="text" name="photoone" value="{{$product->photoone}}">
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
                  <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                  <i class="fas fa-image"></i> Choose
                  </a>
              </span>
          <input id="thumbnail2" class="form-control" type="text" name="phototwo" value="{{$product->phototwo}}">
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
                  <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
                  <i class="fas fa-image"></i> Choose
                  </a>
              </span>
          <input id="thumbnail3" class="form-control" type="text" name="photothree" value="{{$product->photothree}}">
        </div>
        <div id="holder3" style="margin-top:15px;max-height:100px;"></div>
          @error('photothree')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        </div>     
        
        <div class="row faqs">
            <div class="col-md-10">
            <!-- <fieldset id="quesans"> -->
              <table class="table" id="quesans">
                <label for="faqs" class="col-form-label">Product FAQs <span class="text-danger"></span></label>
                @foreach($pro_faq as $key=>$pro_faqdata)
                <tr>
                    <td><input type="text" value="{{$pro_faqdata->question}}" name="addmore[0][question]" placeholder="Enter question" class="form-control mb-2"></td>
                    <td><input type="text" value="{{$pro_faqdata->answer}}" name="addmore[0][answer]" placeholder="Enter answer" class="form-control mb-4"></td>
                </tr>
                @endforeach
              </table>
            </div>
         
          <div class="col-md-1 m-2 p-1">
              <input type="button" value="Add more" class="add btn btn-primary" name="add" id="add" />
          </div>
        </div>

        <div class="form-group">
            <label for="choose_specification">Choose Specifications</label>
            <select data-placeholder="Type Specification Name or select" name="specifications[]" id="choose_specification" class="chosen-select form-control specificSelect" multiple>
                @foreach($specifications as $specific)
                @php
                  $issel='';
                @endphp
                @foreach($prod_specss as $prod_specc)
                  @if($prod_specc->specification_id==$specific->id)
                    @php
                      $issel='selected';
                    @endphp
                  @endif
                @endforeach
                  <option {{ $issel }} value="{{$specific->id}}">{{$specific->specification_name}}</option>
                @endforeach
            </select>
            <button type="button" id="specificSubmit" class="btn btn-info">Select Specifications</button>
        </div>

        <div id="specificaAppends">
            {!!html_entity_decode($prod_specs)!!}
        </div>

        <div class="form-group">
          <label for="seoTitle" class="col-form-label">SEO Title <span class="text-danger">*</span></label>
          <input id="seoTitle" type="text" name="seo_title" value="{{$product->seo_title}}" class="form-control">
          @error('seo_title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="seoDescrip" class="col-form-label">SEO Description <span class="text-danger">*</span></label>
          <input id="seoDescrip" type="text" name="seo_description" value="{{$product->seo_description}}" class="form-control">
          @error('seo_description')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
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
</div>
</div>
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
    // $('#summary').summernote({
    //   placeholder: "Write short description.....",
    //     tabsize: 2,
    //     height: 150
    // });
    // });

    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail Description.....",
          tabsize: 2,
          height: 150
      });
    });

    $('#summary').on("change keyup input", function() {
        var tval = $('#summary').val(),
            tlength = tval.length,
            set = 250,
            remain = parseInt(set - tlength);
        $('#summaryspan').text('character remains :'+remain);
    });

</script>

<script>
  var  child_cat_id='{{$product->child_cat_id}}';
        // alert(child_cat_id);
        $('#cat_id').change(function(){
            var cat_id=$(this).val();

            if(cat_id !=null){
                // ajax call
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}"
                    },
                    success:function(response){
                        if(typeof(response)!='object'){
                            response=$.parseJSON(response);
                        }
                        var html_option="<option value=''>--Select any one--</option>";
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data,function(id,title){
                                    html_option += "<option value='"+id+"' "+(child_cat_id==id ? 'selected ' : '')+">"+title+"</option>";
                                });
                            }
                            else{
                                console.log('no response data');
                            }
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);

                    }
                });
            }
            else{

            }

        });
        if(child_cat_id!=null){
            $('#cat_id').change();
        }
</script>

</script>

<script type="text/javascript">

  $(document).ready(function () {
      $('#is_variation').change(function () {
        if (this.checked) 
           $('#variable').fadeIn('slow');
        else 
            $('#variable').fadeOut('slow');
      });
  });
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#quesans").append('<tr><td><input type="text" name="addmore['+i+'][question]" placeholder="Enter question" class="form-control mb-2" /></td><td><input type="text" name="addmore['+i+'][answer]" placeholder="Enter answer" class="form-control mb-2" /></td><td><button type="button" class="btn btn-danger mb-4 remove-tr">Remove</button></div></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
      $(this).parents('tr').remove();
    });  
   
</script>

<script type="text/javascript">
    $(".chosen-select").chosen({
      no_results_text: "Oops, nothing found!"
    })

    $(document).ready(function(){
        $('#attrSubmit').attr('disabled',true);
       // $("#attrAppends .form-group").remove();
       $("#attrAppends").css({"border": "1px solid #0000004a", "padding": "3px 15px", "margin": "10px 3px", "border-radius": "5px"});
       // $('#attrAppends').removeAttr('style');
        $('#choose_variation').change(function(){
          var attrvals = $("#choose_variation").val();
          if( attrvals != ""){
            $('#attrSubmit').attr('disabled', false);
          }else {
            $('#attrSubmit').attr('disabled',true);
            $("#attrAppends .form-group").remove();
            $('#attrAppends').removeAttr('style');
          }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#attrSubmit").click(function(){
          event.preventDefault();
          let attrids = $("#choose_variation").val();
          $("#attrAppends .form-group").remove();
          $('#attrAppends').removeAttr('style');
            $.ajax({
              url: "{{route('attrvalues')}}",
              data: {
                "id": attrids
              },
              type:'POST',
              success: function(result){
                $('#attrAppends').append(result);
                //$("#attrAppends").css({"border": "1px solid #0000004a", "padding": "3px 15px", "margin": "10px 3px", "border-radius": "5px"});
              }
            });
        });
    });

    // jquery for specification selection
    $(document).ready(function(){
        $('#specificSubmit').attr('disabled',true);
        // $("#specificaAppends .form-group").remove();
        // $('#specificaAppends').removeAttr('style');
        $('#choose_specification').change(function(){
          var specvals = $("#choose_specification").val();
          if( specvals != ""){
            $('#specificSubmit').attr('disabled', false);
          }else {
            $('#specificSubmit').attr('disabled',true);
            $("#specificaAppends .form-group").remove();
            $('#specificaAppends').removeAttr('style');
          }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#specificSubmit").click(function(){
          event.preventDefault();
          let specids = $("#choose_specification").val();
          $("#specificaAppends .form-group").remove();
          $('#specificaAppends').removeAttr('style');
            $.ajax({
              url: "{{route('specvalues')}}",
              data: {
                "id": specids
              },
              type:'POST',
              success: function(result){
                $('#specificaAppends').append(result);
                // $("#specificaAppends").css({"border": "1px solid #0000004a", "padding": "3px 15px", "margin": "10px 3px", "border-radius": "5px"});
              }
            });
        });
        
    });
   
</script>

@endpush