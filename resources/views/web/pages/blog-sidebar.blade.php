@extends('web.layouts.master')

@section('title','E-TECH || Blog Detail page')

@section('main-content')

<!-- Main -->
        <main class="main--wrapper">

           <!-- page banner area start -->
            <section class="page-banner-area blog-page mt-25" data-background="{{URL::asset('web/img/bg/blog-page-banner.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner-text text-center pt-50 pb-45">
                                <h2 class="f-800 cod__black-color">The Blogs</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog.</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page banner area end -->

            <!-- blog area start -->
            <section class="blog-area-three blog-page pb-25 pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 order-2 order-lg-1">
                            <div class="common-sidebar">
                                <div class="search-field">
                                    <form action="#">
                                        <input type="text" placeholder="Search for Blog...">
                                        <button type="submit"><i class="icofont-search-1"></i></button>
                                    </form>
                                </div>
                                <div class="common-cat">
                                   <div class="side-title mt-40">
                                        <h6>Categories</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Accessories Part<span>08</span></a></li>
                                        <li><a href="#">Appiliances<span>15</span></a></li>
                                        <li><a href="#">Clothing<span>37</span></a></li>
                                        <li><a href="#">Categoried<span>56</span></a></li>
                                        <li><a href="#">Indoor Plants<span>24</span></a></li>
                                        <li><a href="#">Sweaters<span>20</span></a></li>
                                        <li><a href="#">Accessories<span>33</span></a></li>
                                        <li><a href="#">Electronic Drone<span>10</span></a></li>
                                        <li><a href="#">Mattrress<span>89</span></a></li>
                                        <li><a href="#">Computer & PC<span>57</span></a></li>
                                        <li><a href="#">View More<span>63</span></a></li>
                                    </ul>
                                </div>
                                <div class="common-tag mt-40">
                                    <div class="side-title">
                                        <h6>Popular Tag</h6>
                                    </div>
                                    <ul class="mt-25 mb-15">
                                        <li><a href="#">Small</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Yellows</a></li>
                                        <li><a href="#">Magenta</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Small</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Grey</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12 order-1 order-lg-2">
                            <div class="row small-padding">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-single mb-60">
                                        <div class="image">
                                            <a href="#"><img src="{{URL::asset('web/img/offer/offer__thumb__17.jpg')}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                                            <span class="blog-title"><a href="#" class="cod__black-color f-700">There are many variations of passages</a></span>
                                            <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,</p>
                                            <a href="#" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-single mb-60">
                                        <div class="image">
                                            <a href="#"><img src="{{URL::asset('web/img/offer/offer__thumb__18.jpg')}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                                            <span class="blog-title"><a href="#" class="cod__black-color f-700">There are many variations of passages</a></span>
                                            <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,</p>
                                            <a href="#" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-single mb-60">
                                        <div class="image">
                                            <a href="#"><img src="{{URL::asset('web/img/offer/offer__thumb__19.jpg')}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                                            <span class="blog-title"><a href="#" class="cod__black-color f-700">Contrary to Popular Belief Ipsum</a></span>
                                            <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,</p>
                                            <a href="#" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-single mb-60">
                                        <div class="image">
                                            <a href="#"><img src="{{URL::asset('web/img/offer/offer__thumb__27.jpg')}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                                            <span class="blog-title"><a href="#" class="cod__black-color f-700">Contrary to Popular Belief Ipsum</a></span>
                                            <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,</p>
                                            <a href="#" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-single mb-60">
                                        <div class="image">
                                            <a href="#"><img src="{{URL::asset('web/img/offer/offer__thumb__28.jpg')}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                                            <span class="blog-title"><a href="#" class="cod__black-color f-700">Contrary to Popular Belief Ipsum</a></span>
                                            <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,</p>
                                            <a href="#" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog area end -->

            <!-- Subscribe -->
            <div class="subscribe subscribe--area grenadier-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                                <div class="left d-flex justify-content-between align-items-center">
                                    <div class="newsletter__title">
                                        <span class="notification--icon"><img src="{{URL::asset('web/img/icon/notification-icon.png')}}"
                                                alt="notification"></span>
                                        <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                                    </div>
                                    <div class="newsletter--message d-none d-xl-block">
                                        <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                            free delivery.</p>
                                    </div>
                                </div>
                                <form class="right newsletter--form pos-rel">
                                    <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                                    <button class="btn newsletter--button" type="button"><img src="{{URL::asset('web/img/icon/plan-icon.png')}}"
                                            alt=""></button>
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