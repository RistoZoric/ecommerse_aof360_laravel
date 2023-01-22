@extends('backend.layouts.master')
@section('title','E-SHOP || Product Type Create')
@section('main-content')
 
<div class="card">
    <h5 class="card-header">Add Product Type</h5> 
    <div class="card-body">
      <form method="post" action="{{route('product-types.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="productName" class="col-form-label">Choose Product <span class="text-danger">*</span></label>
          <select name="product_id" id="productName" class="form-control searchSelect">
              <option>--Select Product--</option>
              @foreach($products as $key=>$prod_data)
                  <option value='{{$prod_data->id}}'>{{$prod_data->title}}</option>
              @endforeach
          </select>
          @error('product_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="prodType" class="col-form-label">Select Type <span class="text-danger">*</span></label>
          <select name="types" id="prodType" class="form-control">
              <option>--Select Type--</option>
              <option value='Popular'>Popular</option>
              <option value='Trending'>Trending</option>
              <option value='Rated'>Rated</option>
          </select>
          @error('types')
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
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script>

    $(document).ready(function() {

      $('.searchSelect').select2();
    });
</script>
@endpush