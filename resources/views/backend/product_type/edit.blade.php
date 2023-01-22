@extends('backend.layouts.master')
@section('title','E-SHOP || Product Type Edit')
@section('main-content')
@php
  
@endphp
<div class="card">
    <h5 class="card-header">Edit Product Type</h5>
    <div class="card-body">
      <form method="post" action="{{route('product-types.update',$prodtypes->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="productName" class="col-form-label">Choose Product <span class="text-danger">*</span></label>
          <select name="product_id" id="productName" class="form-control searchSelect">
              @foreach($products as $key=>$prod_data)
                  <option value='{{$prod_data->id}}' {{(($prodtypes->product_id==$prod_data->id)? 'selected' : '')}}>{{$prod_data->title}}</option>
              @endforeach
          </select>
          @error('product_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="prodType" class="col-form-label">Select Type <span class="text-danger">*</span></label>
          <select name="types" id="prodType" class="form-control">
              <option value='{{ $prodtypes->types }}' selected>{{ $prodtypes->types }}</option>
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
            <option value="active" {{(($prodtypes->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($prodtypes->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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