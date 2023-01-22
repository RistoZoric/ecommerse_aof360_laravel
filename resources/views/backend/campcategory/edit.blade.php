@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Campaign Category</h5>
    <div class="card-body">
      <form method="post" action="{{route('updatecampcat',$campCategory->id)}}">
        @csrf 
        @method('POST')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title</label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$campCategory->title}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status</label>
          <select name="status" class="form-control">
            <option value="active" {{(($campCategory->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($campCategory->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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
