@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Ecommerce Settings</h5>
    <div class="card-body">
    <form method="post" action="{{route('ecommerce-general')}}">
        @csrf 
        <div class="form-group">
          <label for="address_1" class="col-form-label">Address line 1 <span class="text-danger">*</span></label>
          <input id="address_1" type="text" name="address_1" class="form-control">
          @error('address_1')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="address_2" class="col-form-label">Address line 2 </label>
          <input id="address_2" type="text" name="address_2" class="form-control">
          @error('address_2')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="city" class="col-form-label">City <span class="text-danger">*</span></label>
          <input id="city" type="text" name="city" class="form-control">
          @error('city')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="country" class="col-form-label">Country <span class="text-danger">*</span></label>
          <select name="country" id="country" class="form-control">
              <option value="india">India</option>
              <option value="United States">United States</option>
              <option value="England">England</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="Australia">Australia</option>
              <option value="Newzland">Newzland</option>
              <option value="Russia">Russia</option>
          </select>
          @error('country')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="state" class="col-form-label">State <span class="text-danger">*</span></label>
          <select name="state" id="state" class="form-control">

          </select>
          @error('state')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="pincode" class="col-form-label">Postcode / ZIP <span class="text-danger">*</span></label>
          <input id="pincode" type="text" name="pincode" class="form-control">
          @error('pincode')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="sell_location">Selling location(s) <span class="text-danger">*</span></label>
          <select name="sell_location" id="sell_location" class="form-control">
              <option value="all_country">Sale to all countries</option>
              <option value="except_country">Sell to all country, except for..</option>
              <option value="specific_country">Sell to specific country</option>
          </select>
          @error('sell_location')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="ship_location">Shipping location(s) <span class="text-danger">*</span></label>
          <select name="ship_location" id="ship_location" class="form-control">
              <option value="all_country">Ship to all countries</option>
              <option value="except_country">Ship to all country, except for..</option>
              <option value="specific_country">Ship to specific country only</option>
          </select>
          @error('ship_location')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="customer_location">Default customer location <span class="text-danger">*</span></label>
          <select name="customer_location" id="customer_location" class="form-control">
              <option value="no_location">No location by default</option>
              <option value="shop_base_address">Shop base address</option>
              <option value="Geolocate">Geolocate</option>
          </select>
          @error('customer_location')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="enable_tax">Enable taxes</label><br>
          <input type="checkbox" name='enable_tax' id='enable_tax' value='1' checked> Enable tax rates and calculations  
          <span>Rates will be configurable and taxes will be calculated during checkout.</span>
          @error('enable_tax')
          <span class="text-danger">{{$message}}</span>
          @enderror                     
        </div>

        <div class="form-group">
          <label for="shop_currency">Currency <span class="text-danger">*</span></label>
          <select name="shop_currency" id="shop_currency" class="form-control">
              <option value="usd">United States (US) dollar ($)</option>
              <option value="inr">Indian Rupee ()</option>
              <option value="pound_steerling">Pound Steerling</option>
          </select>
          @error('shop_currency')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="currency_position">Currency position <span class="text-danger">*</span></label>
          <select name="currency_position" id="currency_position" class="form-control">
              <option value="left">Left</option>
              <option value="right">Right</option>
          </select>
          @error('currency_position')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Save Changes</button>
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
    
</script>
@endpush