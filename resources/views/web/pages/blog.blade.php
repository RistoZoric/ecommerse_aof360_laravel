@extends('web.layouts.master')

@section('title','E-SHOP || Blog Page')

@section('main-content')
<!-- Main -->
<main class="main--wrapper">

    <!-- page banner area start -->
    <section class="page-banner-areas blog-page" data-background="{{URL::asset('web/img/bg/r.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-50 pb-45">
                        <!-- <h2 class="f-800 cod__black-color text-white">The Blogs</h2> -->
                        <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active text-white"><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item active text-white" aria-current="page">Blog.</li>
                                </ol>
                            </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- blog area start -->
    <section class="blog-area-three blog-page pb-80 ">
        <div class="container customContainer">
            <div class="row small-padding">
                <div class="col-lg-9 col-sm-6">
                    @foreach($blog_detail as $key => $blog)
                    <div class="blogLeft">
                        <h2 class="blog-title">
                            <a href="/blog/{{$blog->slug}}" class="cod__black-color f-700">
                                {{$blog->title}}</a>
                        </h2>
                        <div class="clearfix post-meta">
                            <p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> {{$blog->updated_at}} </span>
                            </p>
                        </div>
                        <div class="blog-single mb-60 d-flex mt-10 single_content ">
                            <div class="col-md-3">
                                <div class="blogimage">
                                    <a href="#">
                                        <img src="{{$blog->photo}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="content">
                                    <p class="f-400">
                                        {{$blog->content}}
                                    </p>
                                    <a href="#" class="f-600 "> Read More <i class="icofont-long-arrow-right "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="blogLeft">
                        <h2 class="blog-title">
                            <a href="#" class="cod__black-color f-700">
                                Contrary to Popular Belief Ipsum</a>
                        </h2>
                        <div class="clearfix post-meta">
                            <p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i>2021-10-22 05:15:41 </span>
                            </p>
                        </div>
                        <div class="blog-single mb-60 d-flex mt-10 single_content ">
                            <div class="col-md-4">
                                <div class="blogimage">
                                    <a href="#">
                                        <img src="{{URL::asset('web/img/bg/ecc.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content">
                                    <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,
                                        Lorem ipsum dolor sit amet, consectetur adipiscing Sed tincidunt malesuada aliquam,
                                    </p>
                                    <a href="#" class="f-600 "> Read More <i class="icofont-long-arrow-right "></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="singleSidebar">

                        <div class="card">
                            <div class="ca4rd-header">
                                <h2>Categories</h2>
                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">
                                @foreach($blog_category as $key => $blogcat)
                                <h3> <a href=""> {{$blogcat->title}}</a></h3>
                                @endforeach

                            </div>
                        </div>


                    </div>
                    <div class="singleSidebar">

                        <div class="card">
                            <div class="ca4rd-header">
                                <h2>Most Popular Posts</h2>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">
                            @foreach($blog_detail as $key => $blog)
                                <h3> <a href="">  {{$blog->title}}</a></h3>
                                @endforeach
                            



                            </div>
                        </div>


                    </div>

                </div>


            </div>
        </div>
        </div>
    </section>
    <!-- blog area end -->

</main>
<!-- Main End -->

@endsection