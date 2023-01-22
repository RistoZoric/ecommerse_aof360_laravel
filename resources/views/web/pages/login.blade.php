@extends('web.layouts.master')

@section('title','E-Shop || Login Page')

@section('main-content')

<!-- Main -->
<main class="main--wrapper">
    <!-- page banner area start -->
    <section class="page-banner-area" data-background="{{URL::asset('web/img/bg/watch.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <!-- <div class="banner-text text-center pt-90 pb-25">
                        <h2 class="f-800 cod__black-color">Sign Up</h2>
                        <p class="mb-60 text-white">Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry Simply Dummyhas    been of the printing and typesetting amet industry.</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- reg area start -->
    <section class="reg-area pt-60 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="reg-wrapper">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item mr-40">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item ml-40">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign Up</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form class="form" method="post" action="{{route('login.submit')}}">
                                @csrf
                                    <div class="field">
                                        <label>Username or Email ID</label>
                                        <input type="email" name="email" placeholder="Username or Email Address" required="required">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="********" required="required">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button class="btn" type="submit">Login</button>
                                    <!-- OR
                                        <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i class="ti-facebook"></i></a>
                                        <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i class="ti-github"></i></a>
                                        <a href="{{route('login.redirect','google')}}" class="btn btn-google"><i class="ti-google"></i></a> -->
                                    <span>
                                        <input type="checkbox" name="news" class="check">
                                        Remember me
                                    </span>
                                    <a href="{{ route('password.reset') }}" class="lost-pass">Lost Your Password?</a>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form class="form" method="post" action="{{route('register.submit')}}">
                            @csrf
                                    <div class="field">
                                        <label>Username</label>
                                        <input type="text" name="name" placeholder="Username" required>
                                    </div>
                                    <div class="field">
                                        <label>Email ID</label>
                                        <input type="text" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="field">
                                        <label>Conform Password</label>
                                        <input type="password" name="password_confirmation" placeholder="Password" required>
                                    </div>
                                    <button type="submit">Register</button>
                                    <span>
                                        <input type="checkbox" class="check">
                                        Remember me
                                    </span>
                                    <a href="#" class="lost-pass">Lost Your Password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reg area end -->

    

</main>

@endsection
