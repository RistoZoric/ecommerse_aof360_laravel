@extends('web.layouts.master')
@section('title','E-COMMERCE')

@section('main-content')

<main class="main--wrapper">
   
    <!-- <section class="hero hero__area">
        <div class="hero__active slider-active">
            @foreach($banners as $banner)
            <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="{{$banner->photo}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="hero__caption">
                                <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">{{$banner->title}}</span>
                                <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">{{ strip_tags( $banner->description ) }}</h2>
                                <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300"> {{$banner->offer_title}}</span> <span class="price f-800"><sup>$</sup>{{$banner->offer_price}}</span></p>
                                <a href="{{$banner->button_link}}" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section> -->
  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            
            @foreach($banners as $key => $slider)
                <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($banners as $key => $slider)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <img src="{{$slider->photo}}" class="d-block w-100" style="height: 350px"  alt="..."> 
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Categories Slider -->
    <!-- <section class="categories-slider pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="categories-slider--active owl-carousel" data-wrap="false" data-bs-interval="false">

                            @foreach($category as $key=>$categorys)
                            @php
                            $catimg=$categorys->photo;

                            if($categorys->photo==' ' || $categorys->photo==NULL ){

                            $catimg=asset('web/img/thumbnail-default.jpg');
                            }
                            @endphp

                                <div class="single-categories">
                                    <div class="icon gray-bg-icon cat_icon">
                                    <a href="<?php echo route('product-cat', $categorys->slug); ?>"><img class="img" src="{{ $catimg }}" alt="{{ $categorys->title }}"></a>
                                    </div>
                                    <h6><a href="{{ $categorys->slug }}">{{ $categorys->title }}</a></h6>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Categories Slider End -->

            <!-- Categories Slider -->
            {{-- <section class="categories-slider pt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul style="display:flex;">
                            <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                    <div class="icon iconCats">
                                        <img src="/web/img/bg/ca.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Cameras</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/sm.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Smartwatch</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/la.webp" alt="" style="width: 100%;height: 100%;border-radius: 50%;">
                                    </div>
                                    <h6><a href="#">Laptop</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/ta.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Tablet</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/tv.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Television</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/mo.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Phone</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/co.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Computers</a></h6>
                                </div></li>
                                <li><div class="single-categoriess" style="margin-left:2.5rem;">
                                <div class="icon iconCats">
                                        <img src="/web/img/bg/h.webp" alt="" style="width: 100%;height: 100%;">
                                    </div>
                                    <h6><a href="#">Headphone</a></h6>
                                </div></li>
                               
                                
                                
                            </div>
                            </ul>
                    </div>
                </div>
            </section> --}}
            <!-- Categories Slider End -->

    <!-- what shop-max offer -->
    <section class="offer gray-bg pt-60 pb-50">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-6 col-lg-6">
                    <div class="offer-banner offer--banner__bg mb-30" data-background="{{URL::asset('web/img/offer/smart-watch-1.png')}}">
                        <div class="offer--banner__text">
                            <span class="f-200 white-color">Exclusive Smart Watch</span>
                            <h4 class="white-color f-900 mb-40">40% Flate</h4>
                            <a href="{{route('products','product_type=featured')}}">View Collection<i class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="offer-banner offer--banner__bg mb-30" data-background="{{URL::asset('web/img/offer/ipad-1.png')}}">
                        <div class="offer--banner__text">
                            <span class="f-200 white-color">The New iPad Models</span>
                            <h4 class="white-color f-900 mb-40">50% Flate</h4>
                            <a href="{{route('products','product_type=featured')}}">View Collection<i class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="offer__section--text pt-25 mb-75">
                        <h4 class="offer-title f-800 black-color position-relative mb-40">What this ecommerse Offer?</h4>
                        <p>This ecommerse description.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="features mb-25">
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-6 col-md-6 d-lg-none d-xl-block">
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
    <!-- what shop-max offer end -->

    <!-- Discover All Product  -->
    <section class="all__product pt-80 pb-20">
        <div class="all__product--nav">
            <div class="container">
                <div class="row all__product--row align-items-center justify-content-between">
                    <div class="col-xl-9 col-md-9">
                        <div class="all__product--menu mb-30">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active btn orange-bg-btn pure__black-color" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">latest Products</a>
                                    <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Discounted products</a>
                                    <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Top ratted products</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="all__product--link text-right mb-30">
                            <a class="all-link" href="{{route('products','product_type=all')}}">Discover All Products<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all__product--body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="product__active owl-carousel">
                                    @foreach($latest as $key=>$feature)

                                      @php 
                                        if($feature->child_cat_id != ""){
                                            $catid = $feature->child_cat_id;
                                        }else{
                                            $catid = $feature->cat_id;
                                        }
                                        @endphp

                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__thumb">
                                                <a href="{{route('product-detail',$feature->slug)}}" class="img-wrapper">
                                                    <img class="img" src="{{$feature->photo}}" alt="">
                                                    <img class="img secondary-img" src="{{$feature->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--top">
                                                <span class="cate-name">{{ \App\Models\Category::where(['id' => $catid])->pluck('title')->first() }}</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
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
                                                    <h5 class="grenadier-color f-600">${{$feature->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="{{route('add-to-wishlist',$feature->slug)}}"><span class="lnr lnr-heart"></span></a>
                                            
                                            <a href="{{route('add-to-cart',$feature->slug)}}"><span class="lnr lnr-cart"></span></a>
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="product__active owl-carousel">
                                    @foreach($discounted as $key=>$feature)
                                    @php
                                    $after_discount=($feature->price-(($feature->price*$feature->discount)/100));
                                    @endphp
                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__thumb">
                                                <a href="{{route('product-detail',$feature->slug)}}" class="img-wrapper">
                                                    <img class="img" src="{{$feature->photo}}" alt="">
                                                    <img class="img secondary-img" src="{{$feature->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--top">
                                                <span class="cate-name">{{$feature->slug}}</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
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
                                                    <s>${{number_format($feature->price,2)}}</s>
                                                    <h5 class="grenadier-color f-600">${{number_format($after_discount,2)}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="{{route('add-to-wishlist',$feature->slug)}}"><span class="lnr lnr-heart"></span></a>
                                            
                                            <a href="{{route('add-to-cart',$feature->slug)}}"><span class="lnr lnr-cart"></span></a>
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="product__active owl-carousel">

                                    @foreach($revpros as $key=>$features)
                                   

                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__thumb">
                                                <a href="{{route('product-detail',$feature->slug)}}" class="img-wrapper">
                                                    <img class="img" src="{{$feature->photo}}" alt="">
                                                    <img class="img secondary-img" src="{{$feature->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content--top">
                                                <span class="cate-name">{{$feature->slug}}</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
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
                                                    <h5 class="grenadier-color f-600">${{$feature->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="{{route('add-to-wishlist',$feature->slug)}}"><span class="lnr lnr-heart"></span></a>
                                            
                                            <a href="{{route('add-to-cart',$feature->slug)}}"><span class="lnr lnr-cart"></span></a>
                                            
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discover All Product end -->

    <!-- offer heading  -->
    <div class="offer__heading grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="offer__heading--title text-center">
                        <p class="mb-0"><a class="white-color" href="#">Don’t Miss Our Electronics Products & Discount 70% Special Offer - <strong class="f-800">‘NEW01’</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer heading end -->

    



    <!-- Weekly Deals -->
        <!-- @if(!$campaigns->isEmpty())
    <div class="offer-deals">
        <div class="offer--deals__main offer-deals--bg pt-75 pb-45" data-background="{{URL::asset('web/img/bg/pin1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="offer--deals__tabs">
                            <div class="tab-content" id="myTabContent">
                                @php $count=1; @endphp
                                @foreach($campaigns as $campaign)
                                @php
                                    $prod_id = $campaign->product_id;
                                    $camp_prdname = \App\Models\Product::where(['id' => $prod_id])->pluck('title')->first();
                                    $camp_prdslug = \App\Models\Product::where(['id' => $prod_id])->pluck('slug')->first();
                                    $camp_prdprice = \App\Models\Product::where(['id' => $prod_id])->pluck('price')->first();
                                    $camp_prddiscount = \App\Models\Product::where(['id' => $prod_id])->pluck('discount')->first();
                                @endphp
                                <div class="tab-pane fade {{(($count==1) ?'show active':'')}}" id="camp{{$campaign->id}}" role="tabpanel" aria-labelledby="camp{{$campaign->id}}-tab">
                                    <div class="row align-items-center">
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="offer--deals__title mb-30">
                                                <h2><span class="f-800 pure__black-color d-block" style="color:#fff !important;">{{$campaign->title}}</span></h2>
                                                <p style="color:#fff !important;">{!!html_entity_decode($campaign->description)!!}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                            <div class="offer--deals__products mb-30">
                                                
                                                <div class="products--deals__content mb-35">
                                                    <h6 class="f-700 mb-20" style="color:#fff !important;"><a href="#">{{$camp_prdname}}</a></h6>
                                                    
                                                    <span class="price-new f-600 grenadier-color" style="color:#fff !important;">${{$camp_prdprice}}</span>
                                                </div>
                                                <div class="product-countdown mb-15">
                                                    <div class="time-count-deal">
                                                        <div class="countdown-list" data-countdown="{{$campaign->start_on}}"></div>
                                                    </div>
                                                </div>
                                                <div class="product--footer__deals">
                                                    <a href="" class="add-link f-700">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer--deals__menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="deals--nav__menu">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                @php $count2=1; @endphp
                                @foreach($campaigns as $campaign)
                                <li class="nav-item">
                                    <a class="nav-link {{(($count2==1) ?'active':'')}}" id="camp{{$campaign->id}}-tab" data-toggle="tab" href="#camp{{$campaign->id}}" role="tab" aria-controls="camp{{$campaign->id}}" aria-selected="true">{{\App\Models\CampaignCategory::where(['id' => $campaign->category_id])->pluck('title')->first()}}</a>
                                </li>
                                @php $count2++; @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif -->
    <!-- Weekly Deals end -->

    <!-- Feature Product  -->
    <div class="product pt-40 pb-50 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header section-header-two">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Best Seller’s</span> Featured Items</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="{{route('products','product_type=featured')}}">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                       <div class="col-xl-5 d-none d-xl-block">
                            <div class="small__banner mb-30">
                                <div class="small__banner--thumb position-relative">
                                    <a href="#"><img src="web/img/bg/t.jpg" alt=""></a>
                                    <!-- <div class="small__banner--content">
                                       <h3 class="f-800 cod__black-color">Best Seller's Product</h3>
                                        <span class="f-300 cod__black-color">All Premium Products</span>
                                        <a href="{{route('products','product_type=featured')}}" class="f-700 white-color grenadier-bg ">Start Buying</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                        <div class="row">
                                @foreach($featured as $key=>$feature)
                                @php
                                $proimg=$feature->photo;
                                if($feature->photo==' ' || $feature->photo==NULL ){
                                $proimg=asset('web/img/thumbnail-default.jpg');
                                }
                                @endphp
                                <div class="col-md-4">
                                <div class="product__single">
                                    <div class="product-wrapper">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">{{ \App\Models\Category::where(['id' => $feature->cat_id])->pluck('title')->first() }}</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
                                            </div>
                                            <div class="product__thumb">
                                            <a href="{{route('product-detail',$feature->slug)}}" class="img-wrapper">
                                                <img class="img" src="{{ $proimg }}" alt="{{$feature->title}}">
                                                <img class="img secondary-img" src="{{ $proimg }}" alt="{{$feature->title}}">
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
                                                    <h5 class="grenadier-color f-600">${{$feature->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="{{route('add-to-wishlist',$feature->slug)}}"><span class="lnr lnr-heart"></span></a>
                                            
                                            <a href="{{route('add-to-cart',$feature->slug)}}"><span class="lnr lnr-cart"></span></a>
                                            
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                            </div>
                                @endforeach
                                
                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->

    <!--Trending Product  -->
    <div class="product pt-10 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Trending </span> On This Week</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="{{route('products','product_type=trending')}}">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30"> 
                    <div class="col-sm-12">
                        <div class="row">
                        @foreach($trepro as $features)

                                    @php

                                    $feature=$features[0];

                                    @endphp

                                    @php
                                    if($feature->child_cat_id != ""){
                                    $catid = $feature->child_cat_id;
                                    }else{
                                    $catid = $feature->cat_id;
                                    }
                                    @endphp
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product__single mb-30">
                                            <div class="product__box featured__box--item">
                                                <div class="product__thumb">
                                                    <a href="{{route('product-detail',$feature->slug)}}">
                                                        <img class="img" src="{{$feature->photo}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product--flex__right">
                                                    <div class="product__content--top">
                                                        <span class="cate-name">{{ \App\Models\Category::where(['id' => $catid])->pluck('title')->first() }}</span>
                                                        <h6 class="product__title mine__shaft-color f-700 mb-30"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
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
                                                            <h5 class="grenadier-color f-600">${{$feature->price}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->

            <!--Popular Product  -->
            <div class="product pt-10 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Popular Products </span></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="{{route('products','product_type=popular')}}">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30"> 
                    <div class="col-sm-12">
                        <div class="row">
                                
                            @foreach($poppro as $features)
                @php
                $feature=$features[0];
                @endphp

                @php
                if($feature->child_cat_id != ""){
                $catid = $feature->child_cat_id;
                }else{
                $catid = $feature->cat_id;
                }
                @endphp
                <div class="col-lg-4 col-md-6">
                    <div class="product__single mb-30">
                        <div class="product__box featured__box--item">
                            <div class="product__thumb">
                                <a href="{{route('product-detail',$feature->slug)}}">
                                    <img class="img" src="{{$feature->photo}}" alt="">
                                </a>
                            </div>
                            <div class="product--flex__right">
                                <div class="product__content--top">
                                    <span class="cate-name">{{ \App\Models\Category::where(['id' => $catid])->pluck('title')->first() }}</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-30"><a href="{{route('product-detail',$feature->slug)}}">{{$feature->title}}</a></h6>
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
                                        <h5 class="grenadier-color f-600">${{$feature->price}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular end -->

    <!-- what shop-max offer -->
    <!-- <section class="offer gray-bg pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="offer__section--text pt-25 mb-75">
                        <h4 class="offer-title f-800 black-color position-relative mb-40">What SHOP Offer?</h4>
                        <p>Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
                            has been the industry's standard dummy text ever since 1500s exting of the printing and
                            typesetting amet industry.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="features mb-25">
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-4 col-md-6">
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
                            <div class="col-xl-6 col-lg-6 col-md-6 d-lg-none d-xl-block">
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
    </section> -->
    <!-- what shop-max offer end -->

    <!-- Subscribe -->
    <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img src="{{URL::asset('web/img/icon/notification-icon.png')}}" alt="notification"></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                    free delivery.</p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                            <button class="btn newsletter--button" type="button"><img src="{{URL::asset('web/img/icon/plan-icon.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

</main>
<!-- Main End -->


@endsection