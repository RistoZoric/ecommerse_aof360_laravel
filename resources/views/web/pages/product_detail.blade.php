@extends('web.layouts.master')

@section('title','E-SHOP || PRODUCT DETAIL')
@section('main-content')
@php
$products=$product_detail[0];
@endphp
<!-- Breadcrumbs -->
<main class="main--wrapper">
	<!-- Shop-details start -->
	<section class="shop-details-area pb-80">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shop-bred pt-35 pb-35">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{$products->title}}</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-md-6 order-1 order-lg-1">
					<div class="pro-img kk">
						<div class="tab-content" id="myTabContent">
							@if($products->photo)
							<div class="tab-pane m_pan fade show active" id="photo1" role="tabpanel" aria-labelledby="photo1-tab5">

								<img src="{{$products->photo}}" class="img-fluid" alt="product">


							</div>
							@endif
							@if($products->photoone)
							<div class="tab-pane m_pan fade" id="photo2" role="tabpanel" aria-labelledby="photo2-tab5">
								<img src="{{$products->photoone}}" class="img-fluid" alt="">
							</div>
							@endif
							@if($products->phototwo)
							<div class="tab-pane m_pan fade" id="photo3" role="tabpanel" aria-labelledby="photo3-tab5">
								<img src="{{$products->phototwo}}" class="img-fluid" alt="">
							</div>
							@endif
							@if($products->photothree)
							<div class="tab-pane m_pan fade" id="photo4" role="tabpanel" aria-labelledby="photo4-tab5">
								<img src="{{$products->photothree}}" class="img-fluid" alt="">
							</div>
							@endif
						</div>


						<ul class="nav mt-50" id="myTab1" role="tablist">
							@if($products->photo)
							<li class="nav-item">
								<a class="nav-link m_nvimag active" id="photo1-tab5" data-toggle="tab" href="#photo1" role="tab" aria-controls="photo1" aria-selected="true">
									<img src="{{$products->photo}}" class="img-fluid" alt="">
								</a>
							</li>
							@endif
							@if($products->photoone)
							<li class="nav-item">
								<a class="nav-link m_nvimag" id="photo2-tab5" data-toggle="tab" href="#photo2" role="tab" aria-controls="photo2" aria-selected="false">
									<img src="{{$products->photoone}}" class="img-fluid" alt="">
								</a>
							</li>
							@endif
							@if($products->phototwo)
							<li class="nav-item">
								<a class="nav-link m_nvimag" id="photo3-tab5" data-toggle="tab" href="#photo3" role="tab" aria-controls="photo3" aria-selected="false">
									<img src="{{$products->phototwo}}" class="img-fluid" alt="">
								</a>
							</li>
							@endif
							@if($products->photothree)
							<li class="nav-item">
								<a class="nav-link m_nvimag" id="photo4-tab5" data-toggle="tab" href="#photo4" role="tab" aria-controls="photo4" aria-selected="false">
									<img src="{{$products->photothree}}" class="img-fluid" alt="">
								</a>
							</li>
							@endif
						</ul>

					</div>
				</div>
				<div class="col-lg-4 col-md-12 order-3 order-lg-2">
					<div class="pro-content">
						@php
						if($products->child_cat_id != ""){
						$catid = $products->child_cat_id;
						}else{
						$catid = $products->cat_id;
						}
						@endphp
						<span>{{\App\Models\Category::where(['id' => $catid])->pluck('title')->first()}}</span>
						<h5 class="title">{{$products->title}}</h5>
						<!-- <div class="pro-rating pb-40">
						@php
							$rate=ceil($products->getReview->avg('rate'))
						@endphp
						@for($i=1; $i<=5; $i++)
							@if($rate>=$i)
								<li><i class="fa fa-star"></i></li>
							@else 
								<li><i class="fa fa-star-o"></i></li>
							@endif
						@endfor
						<a href="#" class="active"><i class="fas fa-star"></i></a>
						<a href="#" class="active"><i class="fas fa-star"></i></a>
						<a href="#" class="active"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#"><i class="fas fa-star"></i></a>
						<a href="#" class="review">(2 customer reviews)</a>
					</div> -->
						<div class="pro-social mb-45">
							<a href="#"><img src="{{URL::asset('web/img/payment/pro-details-social.jpg')}}" class="img-fluid" alt="social share"></a>
						</div>
						<div class="pro-code pt-25">
							@if(!$attribute->isEmpty())
							<ul class="mb-40">
								@foreach($attribute as $attrs)
								@php $attrsvalue=implode(',', json_decode($attrs->attribute_values)); @endphp
								<li>{{\App\Models\Attribute::where(['id' => $attrs->attribute_id])->pluck('attribute_name')->first()}} - {{ $attrsvalue }}</li>
								@endforeach
							</ul>
							@endif
							{!!html_entity_decode($products->summary)!!}

						</div>
						<div class="pro-code pt-25">
							<ul>
								<li>Product Code: <span>{{$products->product_code}}</span></li>
								@php
								$catid = \App\Models\Category::where(['id' => $products->cat_id])->pluck('title')->first();
								if($products->child_cat_id != ""){
								$chcat = ', '.\App\Models\Category::where(['id' => $products->child_cat_id])->pluck('title')->first();
								}else{
								$chcat = "";
								}
								@endphp
								<li>Categories: <span>{{$catid}}{{$chcat}}</span></li>
							</ul>
						</div>

						<div class="pro-code pt-25">
							<strong>Check Delivery Pin :</strong>
							<div class="d-flex">
								
								<input type="text" id="delpin" placeholder="Enter Delivery Pin" class="form-control">
							
								<button type="button" class="btn btn-info" id="checkPin">Check</button>
							
							</div>
							<br>
                          <span  id="showPin"></span>
						</div>
						<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
						<script>
							jQuery(document).ready(function() {

							jQuery("#checkPin").click(function() {
							var pincode = document.getElementById("delpin").value;

							if (pincode == "") {
								alert("Delivery Pin Code Should Not Be Blank");
								return false;
							}

							$.ajax({
								type: 'POST',
								data: {pincode:pincode},
								url: '/check-pincode',
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								success: function(resp) {
									$("#showPin").html(resp);
								
									// alert(resp);
								},
								error: function() {
										alert("Erroreeee");
									}
							});
						
							})
							})

							// function checkPin() {
							// 	var pincode = document.getElementById("delpin").value;

							// 	if (pincode == "") {
							// 		alert("Delivery Pin Code Should Not Be Blank");
							// 		return false;
							// 	}
							// 	$.ajax({
							// 		type: 'post',
							// 		data: {
							// 			pincode: pincode
							// 		},
							// 		url: '/check-pincode',
							// 		success: function(resp) {
							// 			alert(resp);
							// 		},
							// 		error: function() {
							// 			alert("Erroreeee");
							// 		}
							// 	});
							// 	// 	// $.ajax({
							// 	// 	// 	type: "POST",
							// 	// 	// 	headers: {
							// 	// 	// 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							// 	// 	// 	},
							// 	// 	// 	url: "/check-pincode",
							// 	// 	// 	data: { // change data to this object
							// 	// 	// 		_token: $('meta[name="csrf-token"]').attr('content'),
							// 	// 	// 		pincode: pincode
							// 	// 	// 	},
							// 	// 	// 	dataType: "text",
							// 	// 	// 	success: function(resultData) {
							// 	// 	// 		alert("Save Complete")
							// 	// 	// 	}
							// 	// 	// });
							// }
						</script>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 order-2 order-lg-3">
					<div class="cart-wrapper">
						<div class="cart-title">
							<h6>Availability: <span>In Stock</span></h6>
						</div>
						@php
						$after_discount=($products->price-(($products->price*$products->discount)/100));
						@endphp
						<div class="price mt-15 mb-20">
							<span><s>${{number_format($products->price,2)}}</s></span>
							<h4>${{number_format($after_discount,2)}}</h4>
						</div>
						<form action="{{route('single-add-to-cart')}}" method="POST">
							@csrf
							<div class="field">
								<label>Quantity:</label>
								<input type="hidden" name="slug" value="{{$products->slug}}">
								<input type="number" name="quant[1]" data-min="1" data-max="1000" value="1">
							</div>
							<div class="row">
								<button type="submit" class="btn col-md-11 mx-auto">Add to cart</button>
							</div>

						</form>
						<!-- <a href="#" class="cart-button">Add To Cart</a>
					<a href="#" class="buy-button">Buy Now</a> -->
						<div class="last m_wishbtn">
							<a href="{{route('add-to-wishlist',$products->slug)}}">Add To Wishlist</a>
							<!-- <a href="#">Compare</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Shop-details end -->

	<!-- Shop-details tab start -->
	<section class="shop-details-desc">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="desc-wrapper">
						<ul class="nav custom-tabs" id="myTab" role="tablist">
							@if(!$specification->isEmpty())
							<li class="nav-item">
								<a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="home11" aria-selected="true">Specification</a>
							</li>
							@endif
							<li class="nav-item">
								<a class="nav-link active" id="profile-tab11" data-toggle="tab" href="#profile11" role="tab" aria-controls="profile11" aria-selected="false">Description </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab11" data-toggle="tab" href="#contact11" role="tab" aria-controls="contact11" aria-selected="false">Reviews({{$products->getReview->count()}})</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent1">
							@if(!$specification->isEmpty())
							<div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
								<div class="desc-content mt-60">
									<div class="row">
										<div class="col-md-12 mb-30">
											<div class="spe-wrapper">
												<ul>
													<li class="title">Additional information</li>
													@foreach($specification as $specific)
													@php $specvalue=implode(',', json_decode($specific->specification_values)); @endphp
													<li>{{\App\Models\Specification::where(['id' => $specific->specification_id])->pluck('specification_name')->first()}}</li>
													<li>{{ $specvalue }}</li>
													@endforeach
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endif
							<div class="tab-pane fade show active" id="profile11" role="tabpanel" aria-labelledby="profile-tab11">
								<div class="desc-content mt-20">
									<div class="row">
										<div class="col-md-12">
											<div class="single-content mb-10">
												<p>{!!html_entity_decode($products->description)!!}</p>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact11" role="tabpanel" aria-labelledby="contact-tab11">
								<div class="desc-content mt-60">
									<div class="row">
										<div class="comment-review">
											<div class="add-review">
												<h5>Add A Review</h5>
												<p>Your email address will not be published. Required fields are marked</p>
											</div>
											<h4>Your Rating <span class="text-danger">*</span></h4>
											<div class="review-inner">
												@auth
												<form class="form" method="post" action="{{route('review.store',$products->slug)}}">
													@csrf
													<div class="row">
														<div class="col-lg-12 col-12">
															<div class="rating_box">
																<div class="star-rating">
																	<div class="rate">
																		<input type="radio" id="star5" name="rate" value="5" />
																		<label for="star5" title="5 stars">5 stars</label>
																		<input type="radio" id="star4" name="rate" value="4" />
																		<label for="star4" title="4 stars">4 stars</label>
																		<input type="radio" id="star3" name="rate" value="3" />
																		<label for="star3" title="3 stars">3 stars</label>
																		<input type="radio" id="star2" name="rate" value="2" />
																		<label for="star2" title="2 stars">2 stars</label>
																		<input type="radio" id="star1" name="rate" value="1" />
																		<label for="star1" title="1 star">1 star</label>

																		@error('rate')
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-12 col-12">
															<div class="form-group m_rvws">
																<label>Write a review</label>
																<textarea name="review" rows="6" placeholder=""></textarea>
															</div>
														</div>
														<div class="col-lg-12 col-12 m_rvw_btn">
															<div class="form-group button5">
																<button type="submit" class="btn">Submit</button>
															</div>
														</div>
													</div>
												</form>
												@else
												<p class="text-center p-5">
													You need to <a href="{{route('login.form')}}" style="color:rgb(54, 54, 204)">Login</a> OR <a style="color:blue" href="{{route('register.form')}}">Register</a>

												</p>
												<!--/ End Form -->
												@endauth
												<div class="ratting-main">
													<div class="avg-ratting">
														{{-- @php 
												$rate=0;
												foreach($products->rate as $key=>$rate){
													$rate +=$rate
												}
											@endphp --}}
														<h4>{{ceil($products->getReview->avg('rate'))}} <span>(Overall)</span></h4>
														<span>Based on {{$products->getReview->count()}} Comments</span>
													</div>
													@foreach($products['getReview'] as $data)
													<!-- Single Rating -->
													<div class="single-rating m_rvw">
														<div class="rating-author m_ratingauthor">
															@if($data->user_info['photo'])
															<img src="{{$data->user_info['photo']}}" alt="{{$data->user_info['photo']}}">
															@else
															<img src="{{asset('backend/img/avatar.png')}}" alt="Profile.jpg">
															@endif
														</div>
														<div class="rating-des m_rvwname">
															<h6>{{$data->user_info['name']}}</h6>
															<div class="ratings m_rvw">

																<ul class="rating d-flex">
																	@for($i=1; $i<=5; $i++) @if($data->rate>=$i)
																		<li><i class="fa fa-star"></i></li>
																		@else
																		<li><i class="fa fa-star-o"></i></li>
																		@endif
																		@endfor
																</ul>
																<div class="rate-count">(<span>{{$data->rate}}</span>)</div>
															</div>
															<p>{{$data->review}}</p>
														</div>
													</div>
													<!--/ End Single Rating -->
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>
	<!-- Shop-details tab end -->

	<!-- Product  -->
	<div class="product pt-75 product-h-two">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-sm-12">
					<div class="section-header">
						<div class="row align-items-center">
							<div class="col-xl-9 col-sm-6">
								<div class="product-section2">
									<h6 class="product--section__title2"><span>Best Related</span> On Latest Coming</h6>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<!-- <div class="all__product--link text-right">
									<a class="all-link" href="shop-collection.html">Discover All Products<span
											class="lnr lnr-arrow-right"></span></a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="product__active owl-carousel">
						@foreach($products->rel_prods as $data)
						{{-- $data->title --}}
						@if($data->id !==$products->id)
						<div class="product__single">
							<div class="product__box">
								<div class="product__content--top">

									<h5 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$data->slug)}}">{{$data->title}}</a></h5>
								</div>
								<div class="product__thumb">
									<a href="{{route('product-detail',$data->slug)}}" class="img-wrapper">
										@php
										$photo=explode(',',$data->photo);
										@endphp
										<img class="img" src="{{$photo[0]}}" alt="{{$data->title}}">
										<img class="img secondary-img" src="{{$photo[0]}}" alt="{{$data->title}}">
									</a>
								</div>
								<div class="product__content--rating d-flex justify-content-between">
									<div class="rating">
										<ul class="list-inline">
											<li class="rating-active"><i class="fas fa-star"></i></li>
											<li class="rating-active"><i class="fas fa-star"></i></li>
											<li class="rating-active"><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="price">
										@php
										$after_discount=($data->price-(($data->discount*$data->price)/100));
										@endphp
										<span class="old">${{number_format($data->price,2)}}</span>
										<span>${{number_format($after_discount,2)}}</span>
									</div>
								</div>
							</div>
							<div class="product-action">
								<a href="#"><span class="lnr lnr-heart"></span></a>

								<a href="#"><span class="lnr lnr-cart"></span></a>

							</div>
						</div>
						@endif
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product end -->

</main>



@endsection