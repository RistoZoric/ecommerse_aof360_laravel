@extends('web.layouts.master')

@section('title','Review Edit')

@section('main-content')
<div class="card">
  <h5 class="card-header">Review Edit</h5>
  <div class="card-body">
    <form action="{{route('user.productreview.update',$review->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group col-md-6">
        <label for="name">Review By:</label>
        <input type="text" disabled class="form-control" value="{{$review->user_info->name}}">
      </div>
      <div class="form-group col-md-6">
        <label for="review">Review</label>
      <textarea name="review" id="" cols="20" rows="10" class="form-control">{{$review->review}}</textarea>
      </div>
      <div class="form-group row col-md-3 m_actv">
        <!-- <label for="status">Status :</label> -->
        <select name="status" id="" class="form-control">
          <option value="">--Select Status--</option>
          <option value="active" {{(($review->status=='active')? 'selected' : '')}}>Active</option>
          <option value="inactive" {{(($review->status=='inactive')? 'selected' : '')}}>Inactive</option>
        </select>
      
      <div class="m_rvw_btn col-md-3">

      
      <button type="submit" class="btn btn-primary">Update</button>
      </div></div>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }
</style>
@endpush