@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Payments Policy Page</h5>
    <div class="card-body">
    <form method="post" action="{{route('ecommerce-general')}}">
        @csrf 
        <div class="form-group">
          <label for="paymentsPage" class="col-form-label">Page Contents <span class="text-danger">*</span></label>
          <textarea class="form-control" id="paymentsPage" name="payments_page"></textarea>
          @error('payments_page')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="seoTitle" class="col-form-label">SEO Title <span class="text-danger">*</span></label>
          <input id="seoTitle" type="text" name="seo_title" placeholder="SEO Title" class="form-control">
          @error('seo_title')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="seoDescrip" class="col-form-label">SEO Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="seoDescrip" name="seo_description"></textarea>
          @error('seo_description')
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $(document).ready(function() {
      $('#paymentsPage').summernote({
        placeholder: "Write Payment Policy Contents.....",
          tabsize: 2,
          height: 550
      });

      $('#seoDescrip').summernote({
        placeholder: "Write Page Seo Description.....",
          tabsize: 2,
          height: 150
      });

    });
</script>
@endpush