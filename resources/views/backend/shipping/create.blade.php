@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Shipping rule</h5>
    <div class="card-body">
      <form method="post" action="{{route('shipping.store')}}">
        {{csrf_field()}}
        
        <!-- <div class="form-group">
          <label for="price" class="col-form-label">Shipping price <span class="text-danger">*</span></label>
        <input id="price" type="number" name="price" placeholder="Enter price"  value="{{old('price')}}" class="form-control">
        @error('price')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div> -->

        <div class="card">
          <div class="card-body">
            <div class="row faqs">
              <div class="col-md-10">
                <table class="table" id="shipp">
                  <label for="faqs" class="col-form-label">Shipping </label>
                  <tr>
                    <td>
                    <label class="text-title-field rule-from-to-label">Based on product's price</label>
                    <div class="flexbox-grid-default flexbox-align-items-center d-flex">
                    <div class="flexbox-auto-content">
                      <fieldset>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="text" name="addmore[0][from_p]" class="form-control" data-target=".from-value-label" value="0" im-insert="true">
                              </div>
                        </fieldset>
                        </div>
                  <div class="flexbox-auto-left p-1">
                      <span class="inline">—</span>
                  </div>
                  <div class="flexbox-auto-content">
                  <fieldset>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">$</span>
                      </div>
                      <input type="text" name="addmore[0][to_p]" class="form-control" data-target=".to-value-label" value="" im-insert="true">
                    </div>
              </fieldset>
              </div>
              </div>
          </td>
          <td>
            <label class="text-title-field rule-from-to-label">Based on product's weight (G)</label>
          <div class="flexbox-grid-default flexbox-align-items-center d-flex">
          <div class="flexbox-auto-content">
            <fieldset>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">g</span>
                      </div>
                      <input type="text" name="addmore[0][from_w]" class="form-control" data-target=".from-value-label" value="0" im-insert="true">
                    </div>
              </fieldset>
              </div>
                  <div class="flexbox-auto-left p-1">
                      <span class="inline">—</span>
                  </div>
                  <div class="flexbox-auto-content">
                  <fieldset>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">g</span>
                      </div>
                      <input type="text" name="addmore[0][to_w]" class="form-control" data-target=".to-value-label" value="" im-insert="true">
                    </div>
              </fieldset>
              </div>
              </div>
          </td>
          <td>
          <label class="text-title-field rule-from-to-label">Shipping Price</label>
          <input id="price" type="number" name="addmore[0][price]" placeholder="Enter price"  value="{{old('price')}}" class="form-control">
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
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>

<script type="text/javascript">
  var i = 0;
  $("#add").click(function() {
    ++i;

    $("#shipp").append('<tr><td> <label class="text-title-field rule-from-to-label">Based on products price</label> <div class="flexbox-grid-default flexbox-align-items-center d-flex"> <div class="flexbox-auto-content"><fieldset> <div class="input-group"> <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">$</span></div> <input type="text" name="addmore[' + i + '][from_p]" class="form-control" data-target=".from-value-label" value="0" im-insert="true">  </div> </fieldset></div><div class="flexbox-auto-left p-1"><span class="inline">—</span></div><div class="flexbox-auto-content"><fieldset> <div class="input-group"> <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">$</span></div> <input type="text" name="addmore[' + i + '][to_p]" class="form-control" data-target=".from-value-label" value="0" im-insert="true">  </div> </fieldset></div></div> </td><td> <label class="text-title-field rule-from-to-label">Based on products weight</label> <div class="flexbox-grid-default flexbox-align-items-center d-flex"> <div class="flexbox-auto-content"><fieldset> <div class="input-group"> <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">g</span></div> <input type="text" name="addmore[' + i + '][from_w]" class="form-control" data-target=".from-value-label" value="0" im-insert="true">  </div> </fieldset></div><div class="flexbox-auto-left p-1"><span class="inline">—</span></div><div class="flexbox-auto-content"><fieldset> <div class="input-group"> <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">g</span></div> <input type="text" name="addmore[' + i + '][to_w]" class="form-control" data-target=".from-value-label" im-insert="true">  </div> </fieldset></div></div> </td><td><label class="text-title-field rule-from-to-label">Shipping Price</label><input type="text" name="addmore[' + i + '][price]" placeholder="Enter Price" class="form-control mb-2" /></td><td><button type="button" class="btn btn-danger mb-4 remove-tr">Remove</button></div></td></tr>');
  });

  $(document).on('click', '.remove-tr', function() {
    $(this).parents('tr').remove();
  });
</script>

@endpush