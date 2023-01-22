@extends('backend.layouts.master')
@section('title','E-SHOP || Attributes Create')
@section('main-content')
@php
$attr = DB::table('attributes')->get();

@endphp
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Add Values</h6>
    <a href="{{route('attributes.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="View Attribute"><i class="fas fa-eye"></i> View Attributes</a>
  </div>
    <div class="card-body">
      <form method="post" action="{{route('attrvalue-insert')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Attribute Name <span class="text-danger">*</span></label>
          <select id="inputTitle" name="attribute_id" class="form-control">
              <option value="" selected="selected">Select Attribute</option>
              @foreach($attr as $ji)
                <option value="{{ $ji->id }}">{{ $ji->attribute_name }}</option>
              @endforeach
          </select>
          <!-- <input id="inputTitle" type="text" name="attribute_name" placeholder="Attribute Name"  value="{{old('attribute_name')}}" class="form-control"> -->
          @error('attribute_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="attrvalue" class="col-form-label">Values <span class="text-danger">*</span></label>
          <textarea rows="5" id="attrvalue" name="values" placeholder="Attribute Values" class="form-control"></textarea>
          @error('values')
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
@endpush