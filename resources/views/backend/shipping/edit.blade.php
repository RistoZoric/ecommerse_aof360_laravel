@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Shipping</h5>
    <div class="card-body">
      <form method="post" action="{{route('shipping.update',$shipping->id)}}">
        @csrf 
        @method('PATCH')
        <!-- <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name of Shipping rule <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$shipping->name}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>      -->
        
        <div class="row">
        <div class="col-md-6">
      <div class="flexbox-content-no-padding pl15">
      <div class="form-group mb-3">
              <label class="text-title-field rule-from-to-label">Based on product's price</label>
              <div class="flexbox-grid-default flexbox-align-items-center d-flex">
                  <div class="flexbox-auto-content">
                      <fieldset>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">$</span>
                      </div>
                      <input type="text" name="from_p" class="form-control" value="{{$shipping->from_p}}" data-target=".from-value-label" value="0" im-insert="true">
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
                      <input type="text" name="to_p" class="form-control" value="{{$shipping->to_p}}" data-target=".to-value-label" value="" im-insert="true">
                    </div>
              </fieldset>
              </div>
                  </div>
              </div>
          </div>
          </div>

      <div class="col-md-6">
      <div class="flexbox-content-no-padding pl15">
      <div class="form-group mb-3">
              <label class="text-title-field rule-from-to-label">Based on product's weight (G)</label>
              <div class="flexbox-grid-default flexbox-align-items-center d-flex">
                  <div class="flexbox-auto-content">
                      <fieldset>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">g</span>
                      </div>
                      <input type="text" name="from_w" class="form-control" value="{{$shipping->from_w}}" data-target=".from-value-label" value="0" im-insert="true">
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
                      <input type="text" name="to_w" class="form-control" value="{{$shipping->to_w}}" data-target=".to-value-label" value="" im-insert="true">
                    </div>
              </fieldset>
              </div>
                  </div>
              </div>
          </div>
          </div>
     
          <div class="col-md-6">
        <div class="form-group">
          <label for="price" class="col-form-label">Price <span class="text-danger">*</span></label>
        <input id="price" type="number" name="price" placeholder="Enter price"  value="{{$shipping->price}}" class="form-control">
        @error('price')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>   
        </div>

        <div class="col-md-6">
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($shipping->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($shipping->status=='inactive') ? 'selected' : '')}}>Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        </div>
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