@extends('web.layouts.master')

@section('main-content')
	
  <!-- Main -->
    <main class="main--wrapper">

        <!-- contact google map start -->
        <section class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3475.1926506228206!2d-95.23106898255615!3d29.423165300000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86408f4f48ddae03%3A0x2755cc4d60517efa!2sAOF%20Engineering%20Systems!5e0!3m2!1sen!2sin!4v1646946091809!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!-- contact google map end -->

        <!-- contact area start -->
        <section class="contact-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-form">
                            <h4 class="title">Send A Message</h4>
                            <form action="#">
                                <div class="field">
                                    <input type="text" placeholder="Enter Name">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Desciption"></textarea>
                                <div class="m_rvw_btn">
                                <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-lg-5">
                        <div class="contact-text">
                            <div class="single-text mb-30">
                                <i class="icofont-telephone"></i>
                                <h5>Contact customer service</h5>
                                <p>Need assistance? Our customer service is here to
                                    assist you Monday through Friday from
                                    9 am CST to 10 pm CST.</p>
                                    <h5>+1 (409) 739 6346</h5>
                            </div>
                            <div class="single-text">
                                <i class="icofont-bug"></i>
                                <h5>Shop FAQs</h5>
                                <p>You might find the answer you’re looking for in our
                                    frequently asked questions.</p>
                                    <a href="#"><i class="icofont-plus"></i>View FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <!-- Brand -->
        <div class="brand brand-two pt-60">
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

    </main>
    <!-- Main End -->
	
@endsection
