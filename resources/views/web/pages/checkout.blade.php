@extends('web.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <!-- <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
    <div class="container">
    <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf

            <div class=" px-4 mt-4">

                <div class="row col-md-11 mx-auto">
                    <div class="col-xl-8">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0 ">
                            <div class="card-header make"><h3>Make Your Checkout Here</h3></div>
                            <div class="card-body text-center">



                                        <div class="card-content ">
                                            <div class="card-body cleft5">
                                             
                                                <form class="basic ">
                                                    <div class="form-row ">
                                                        <div class="col-md-6 col-12">
                                                            
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-1">First Name</label>
                                                                <input type="text" class="form-control" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                                                @error('first_name')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-2">Last Name</label>
                                                                <input type="text" class="form-control" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                                                    @error('last_name')
                                                                        <span class='text-danger'>{{$message}}</span>
                                                                    @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-3">E-mail</label>
                                                                <input type="email" class="form-control" name="email" placeholder="" value="{{old('email')}}">
                                                                @error('email')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-4">Phone Number</label>
                                                                <input type="number" class="form-control" name="phone" placeholder="" required value="{{old('phone')}}">
                                                                @error('phone')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-5">Adderess Line 1*</label>
                                                                <input type="text" class="form-control" name="address1" placeholder="" value="{{old('address1')}}">
                                                                @error('address1')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-5">Address Line 2</label>
                                                                <input type="text" class="form-control" name="address2" placeholder="" value="{{old('address2')}}">
                                                                @error('address2')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-5">City</label>
                                                                <input type="text" class="form-control" name="city" placeholder="" value="{{old('city')}}">
                                                                @error('city')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-5">State</label>
                                                                <input type="text" class="form-control" name="state" placeholder="" value="{{old('state')}}">
                                                                @error('state')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-5">Country</label>
                                                                <input type="text" class="form-control" name="country" placeholder="" value="{{old('country')}}">
                                                                @error('country')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    
                                                        
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mb-2">
                                                                <label for="basic-form-2">Postal Code</label>
                                                                <input type="text" class="form-control" name="post_code" placeholder="" value="{{old('post_code')}}">
                                                                @error('post_code')
                                                                    <span class='text-danger'>{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>Postal Code</label>
                                                                <input type="text" name="post_code" placeholder="" value="">
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                 
                                                    
                                                </form>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-4 mb-xl-0">
                        <div class="card-header make"><h3>CART TOTALS</h3></div>
                        <div class="card mb-4">

                            <div class="card-body">
                                <div class="order-details">
                                    <!-- Order Widget -->
                                    <div class="single-widget">

                                        <div class="content">
                                            <!-- <ul>
                                                <li class="order_subtotal" data-price="0">Cart
                                                    Subtotal<span>$0.00</span></li>
                                                <li class="shipping">
                                                    Shipping Cost

                                                    <span>Free</span>
                                                </li>

                                                <li class="last" id="order_total_price">Total<span>$0.00</span></li>
                                            </ul> -->
                                            <div class="row">

                                                <div class="col-md-7">
                                                    <p >Cart Subtotal</p>
                                                    <p>Shipping Cost</p>
                                                    <h5 style=" color: #8b0000; font-weight: bold;">Total</h5>
                                                </div>
                                                @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                                <div class="col-md-5 mt-6 cartship">
                                                    <h6 data-price="{{Helper::totalCartPrice()}}"><span>${{number_format(Helper::totalCartPrice(),2)}}</span></h6>
                                                    <h6>Free</h6>
                                                    <h6 style=" color: #8b0000; font-weight: bold;">${{number_format($total_amount,2)}}</h6>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Order Widget -->
                                    <!-- Order Widget -->
                                 
                                    <!--/ End Order Widget -->
                                    <!-- Payment Method Widget -->
                              
                                    <!--/ End Button Widget -->
                                </div>
              


                            </div>
                        </div>
                        <div class="card mb-4">

                            <div class="card-body">

                                <div class="row pay1">

                            
                                       
                                        <div class="content">
                                        <h2 style=" color: #8b0000; font-weight: bold;">Payments</h2>
                                            <div class="checkbox">

                                                <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Cash On Delivery</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> 
                                                </form-group>

                                            </div>
                                        </div>
                                 

                                    <div class="single-widget payement">
                                        <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                        </div>
                                    </div>
                                    
                                    <div class="single-widget get-button">
                                        <div class="content">
                                            <div class="button">
                                                <button type="submit" class="btn">proceed to checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
            
</section>
        

@endsection
