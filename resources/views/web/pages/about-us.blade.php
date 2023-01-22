@extends('web.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')

<!-- Main -->
<main class="main--wrapper">
@foreach($about_detail as $key => $abt)
<!-- page banner area start -->
<section class="page-banner-area" data-background="{{$abt->photo}}">
<!-- <section class="page-banner-area" data-background="{{URL::asset('web/img/bg/watch.jpg')}}"> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12">
				<div class="banner-text text-center pt-90 pb-25">
					
					<!-- <h2 class="f-800 cod__black-color text-white">About Us</h2> -->
					<!-- <p class="mb-60 text-white">AOF Shop is simply dummy texting of the printings and typesettingi amet industry Simply Dummyhas    been of the printing and typesetting amet industry.</p> -->
					<!-- <nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us.</li>
						</ol>
					</nav> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page banner area end -->

<!-- what shop-max offer -->
<section class="offer gray-bg pt-50 pb-20">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="offer__section--text pt-25 mb-30">

			

					<h4 class="offer-title f-800 black-color position-relative mb-40">{{$abt->title}}</h4>
				
			
					<p>{{$abt->description}}</p>
					<!-- <img src="{{$abt->photo}}" class="d-block w-100"  alt="...">  -->
					
			
				</div>
			</div>
			<div class="col-xl-6">
				<div class="features mb-25">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="features-box d-flex align-items-center justify-content-between mb-10">
								<div class="features--box__text">
									<h5 class="f-700 pure__black-color"><a href="#">Easy & Free Return</a></h5>
									<p>All Over Worldwide</p>
								</div>
								<div class="features--box__icon">
									<i><img src="{{URL::asset('web/img/icon/money-back-gurantee.svg')}}" alt=""></i>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="features-box d-flex align-items-center justify-content-between mb-10">
								<div class="features--box__text">
									<h5 class="f-700 pure__black-color"><a href="#">Money Guarantee</a></h5>
									<p>Seal Of Trusts</p>
								</div>
								<div class="features--box__icon">
									<i><img src="{{URL::asset('web/img/icon/money-back-gurantee.svg')}}" alt=""></i>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="features-box d-flex align-items-center justify-content-between mb-10">
								<div class="features--box__text">
									<h5 class="f-700 pure__black-color"><a href="#">Online Need Helps</a></h5>
									<p>24/7 Online Support</p>
								</div>
								<div class="features--box__icon">
									<i><img src="{{URL::asset('web/img/icon/money-back-gurantee.svg')}}" alt=""></i>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="features-box d-flex align-items-center justify-content-between mb-10">
								<div class="features--box__text">
									<h5 class="f-700 pure__black-color"><a href="#">Gift Card & Voucher</a></h5>
									<p>Item per Month</p>
								</div>
								<div class="features--box__icon">
									<i><img src="{{URL::asset('web/img/icon/money-back-gurantee.svg')}}" alt=""></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endforeach
<!-- what shop-max offer end -->

<!-- Brand -->
<div class="brand brand-two pt-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="brand-active">
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo1.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo2.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo3.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo4.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo5.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo2.png')}}" alt="">
					</div>
					<div class="single-brand">
						<img src="{{URL::asset('web/img/brand/brand-logo1.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Brand End -->

<!-- about area start -->
<section class="about-two pb-45">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="about-single mb-30">
					<div class="about-img mb-20">
						<img src="{{URL::asset('web/img/bg/ecc.jpg')}}" class="img-fluid" alt="">
					</div>
					<p>Shop is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
						has been the industry's standard dummy text ever since 1500s exting of the printing and typesetting
						amet industry typesetting.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about-single mb-30">
					<div class="about-img mb-20">
						<img src="{{URL::asset('web/img/bg/ec.jpg')}}" class="img-fluid" alt="">
					</div>
					<p>Shop is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
						has been the industry's standard dummy text ever since 1500s exting of the printing and typesetting
						amet industry typesetting.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about area end -->

</main>
<!-- Main End -->
@endsection