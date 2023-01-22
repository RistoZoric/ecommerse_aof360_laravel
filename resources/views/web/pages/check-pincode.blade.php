@extends('web.layouts.master')

@section('title','E-SHOP || Blog Page')

@section('main-content')
<!-- Main -->
<main class="main--wrapper">

    @foreach($pincode as $key => $blog)
                    <div class="blogLeft">
                        <h2 class="blog-title">
                            <a href="" class="cod__black-color f-700">
                                {{$blog->pincodes}}</a>
                        </h2>
            @endforeach

</main>
<!-- Main End -->

@endsection