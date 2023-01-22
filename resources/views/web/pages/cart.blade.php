@extends('web.layouts.master')
@section('title','Cart Page')
@section('main-content')
<!-- Breadcrumbs -->
<!-- <div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{('home')}}">Home<i class="faq fa-arrow-right"></i></a></li>
							<li class="active"><a href="">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="shop-bred pt-35 pb-35">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{('home')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="col-md-11 mx-auto">
			<div class="card">
				<div class="card-body">

					<div class="row">
						<div class="col-md-8">

						<form action="{{route('cart.update')}}" method="POST">
								@csrf
								@if(Helper::getAllProductFromCart())
									@foreach(Helper::getAllProductFromCart() as $key=>$cart)

							<div class=" gold">
								<div class="row col-md-12">
								<div class="col-md-2">
								@php 
											$photo=explode(',',$cart->product['photo']);
											@endphp
											<div class="image m_crtimag" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></div>
								</div>
								<div class="col-md-4 mt-2">
									<h3>{{$cart->product['title']}}</h3>
								</div>
								<div class="col-md-3 qty" data-title="Qty">
									<!-- <img src="https://ecomelect.snckapp.com/web/img/offer/smart-watch-1.png" alt="" width="100%"> -->

									
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">
															<i class="fa fa-minus"></i>
														</button>
													</div>
													<input type="text" name="quant[{{$key}}]" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}">
													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]">
															<i class="fa fa-plus"></i>
														</button>
													</div>
												</div>
												<!--/ End Input Order -->
											

								</div>
								
								<div class="col-md-3">
									<div class="d-flex float-right">
										<label>Unit price : </label>
										<h4>${{number_format($cart['price'],2)}}</h4>
									</div>
									<div class="d-flex float-right">
										<label>Total Price : </label>
										<h4>${{$cart['amount']}}</h4>
									</div>
								</div>
								</div>
								<div class="row col-md-12">
									<div class="col-md-9">
									
									</div>
									<div class="col-md-3 m_rembtn">
									<!-- <button class="btn btn-block remcolor2"><i class="fal fa-heart"></i> check</button> -->
									<button class="btn btn-block remcolor"><a href="{{route('cart-delete',$cart->id)}}"><i class="fa fa-trash remove-icon"></i> Remove</a></button>
									</div>
								</div>
							</div>
							@endforeach
							<button class="btn float-right remcolor2" type="submit">Update</button>
							@else 
										<div class="text-center m_chkou">
												There are no any product available in cart . <br><a href="{{route('product-grids')}}" class="btn btn-block remcolor2 mt-4">Continue shopping</a>

										</div>
									
								@endif
							
						</form>

						</div>
					<div class="col-md-4">
							
						<div class="row m_chkou">
						<a href="{{route('checkout')}}" class="btn btn-block remcolor2">Checkout</a>
						</div>
							<div class="chkout row">
								<div class="col-md-12">
									<form action="{{route('coupon-store')}}" method="POST" class="form-inline">
										@csrf

										<input class="form-control" name="code" placeholder="Enter Your Coupon" style="width:75%; float:left">
										<button class="btn btn-lg remcolor2">Apply</button>
									</form>
								</div>
								<div class="col-md-12">
									<div class="right orderright">
										<h3>PRICE DETAILS :</h3>
										<ul>
											<li class="order_subtotal order_subtotal1" data-price="{{Helper::totalCartPrice()}}" style="overflow: hidden;">
												<span style="float: left;">Cart Subtotal</span>
												<span style="color: red; float:right;">${{number_format(Helper::totalCartPrice(),2)}}</span>
											</li>

											{{-- <div id="shipping" style="display:none;">
								<li class="shipping">
									Shipping {{session('shipping_price')}}
											@if(count(Helper::shipping())>0 && Helper::cartCount()>0)
											<div class="form-select">
												<select name="shipping" class="nice-select">
													<option value="">Select</option>
													@foreach(Helper::shipping() as $shipping)
													<option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
													@endforeach
												</select>
											</div>
											@else
											<div class="form-select">
												<span>Free</span>
											</div>
											@endif
											</li>
									</div>
									--}}
									{{-- {{dd(Session::get('coupon')['value'])}} --}}
									@if(session()->has('coupon'))
									<li class="coupon_price" data-price="{{Session::get('coupon')['value']}}">You Save<span style="float:right;">${{number_format(Session::get('coupon')['value'],2)}}</span></li>
									@endif
									@php
									$total_amount=Helper::totalCartPrice();
									if(session()->has('coupon')){
									$total_amount=$total_amount-Session::get('coupon')['value'];
									}
									@endphp
									@if(session()->has('coupon'))
									<li class="last" id="order_total_price order_subtotal1" style="overflow: hidden;">
										<span style="float:left;">You Pay</span><span style="float:right;">${{number_format($total_amount,2)}}</span>
									</li>
									@else
									<li class="last" id="order_total_price order_subtotal1">
										<span style="float:left;">You Pay</span><span style="float:right;">${{number_format($total_amount,2)}}</span>
									</li>
									@endif
									</ul>
									<ul class="chkrow row">
										<!-- <li class="col-md-4">
										<a href="{{route('checkout')}}" class="btn">Checkout</a>
									</li> -->
										<li class="col-md-12 m_chkou">
											<a href="{{route('product-grids')}}" class="btn btn-block remcolor2">Continue shopping</a>
										</li>


									</ul>
								</div>

							</div>
						</div>

					</div>

				</div>
			</div>


		</div>
	</div>

</div>




















<!--/ End Shopping Cart -->

<!-- Start Shop Services Area  -->
<!-- <section class="shop-services section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
			
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-6 col-12">
		
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
			
			</div>
			<div class="col-lg-3 col-md-6 col-12">
			
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
			
			</div>
			<div class="col-lg-3 col-md-6 col-12">
		
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
			
			</div>
		</div>
	</div>
</section> -->
<!-- End Shop Newsletter -->

<!-- Start Shop Newsletter  -->

<!-- End Shop Newsletter -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
			</div>
			<div class="modal-body">
				<div class="row no-gutters">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<!-- Product Slider -->
						<div class="product-gallery">
							<div class="quickview-slider-active">
								<div class="single-slider">
									<img src="images/modal1.jpg" alt="#">
								</div>
								<div class="single-slider">
									<img src="images/modal2.jpg" alt="#">
								</div>
								<div class="single-slider">
									<img src="images/modal3.jpg" alt="#">
								</div>
								<div class="single-slider">
									<img src="images/modal4.jpg" alt="#">
								</div>
							</div>
						</div>
						<!-- End Product slider -->
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="quickview-content">
							<h2>Flared Shift Dress</h2>
							<div class="quickview-ratting-review">
								<div class="quickview-ratting-wrap">
									<div class="quickview-ratting">
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#"> (1 customer review)</a>
								</div>
								<div class="quickview-stock">
									<span><i class="fa fa-check-circle-o"></i> in stock</span>
								</div>
							</div>
							<h3>$29.00</h3>
							<div class="quickview-peragraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
							</div>
							<div class="size">
								<div class="row">
									<div class="col-lg-6 col-12">
										<h5 class="title">Size</h5>
										<select>
											<option selected="selected">s</option>
											<option>m</option>
											<option>l</option>
											<option>xl</option>
										</select>
									</div>
									<div class="col-lg-6 col-12">
										<h5 class="title">Color</h5>
										<select>
											<option selected="selected">orange</option>
											<option>purple</option>
											<option>black</option>
											<option>pink</option>
										</select>
									</div>
								</div>
							</div>
							<div class="quantity">
								<!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</div>
							<div class="add-to-cart">
								<a href="#" class="btn">Add to cart</a>
								<a href="#" class="btn min"><i class="ti-heart"></i></a>
								<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
							</div>
							<div class="default-social">
								<h4 class="share-now">Share:</h4>
								<ul>
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal end -->

@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush