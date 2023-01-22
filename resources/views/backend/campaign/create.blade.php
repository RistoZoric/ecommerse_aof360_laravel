@extends('backend.layouts.master')
@section('title','E-SHOP || Campaigns Create')
@section('main-content')
 
<div class="card">
    <h5 class="card-header">Add Campaigns</h5> 
    <div class="card-body">
      <form method="post" action="{{route('campaigns.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="CampName" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="CampName" type="text" name="title" placeholder="Campaign Title" class="form-control">
          @error('title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Campaign Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="description"></textarea>
          @error('description')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="CampStart" class="col-form-label">Campaign Start Date <span class="text-danger">*</span></label>
          <input id="CampStart" type="text" name="start_on" placeholder="Select Start Date" class="campaigndatetime form-control">
          @error('start_on')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="CampEnd" class="col-form-label">Campaign End Date <span class="text-danger">*</span></label>
          <input id="CampEnd" type="text" name="end_on" placeholder="Select End Date" class="campaigndatetime form-control">
          @error('end_on')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="campCategory" class="col-form-label">Campaign Category <span class="text-danger">*</span></label>
          <select name="category_id" id="campCategory" class="form-control searchSelect">
              <option>--Select Category--</option>
              @foreach($categories as $key=>$cat_data)
                  <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
              @endforeach
          </select>
          @error('category_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="productName" class="col-form-label">Campaign Product <span class="text-danger">*</span></label>
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
          <label for="inputPhoto" class="col-form-label">Campaign Image <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="campImg" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="image">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('image')
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#campImg').filemanager('image');

    $(document).ready(function() {
      // $('#CampName').summernote({
      //   placeholder: "Campaign Title",
      //     tabsize: 2,
      //     height: 100
      // });
      $('#description').summernote({
        placeholder: "Write Campaign Description",
      });

      $('.campaigndatetime').datetimepicker({
            format: 'DD/MM/YYYY hh:mm A'
        });

      $('.searchSelect').select2();
    });
</script>
@endpush