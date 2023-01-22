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
            <section class="blog-details-area pb-80 pt-80">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-9">
                           <div class="main-wrapper">
                               <div class="blog-details-img-active">
                                   <div class="single-img">
                                       <img src="{{URL::asset('web/img/offer/blog-sidebar-thumb.jpg')}}" class="img-fluid" alt="">
                                   </div>
                                   <div class="single-img">
                                       <img src="{{URL::asset('web/img/offer/blog-sidebar-thumb.jpg')}}" class="img-fluid" alt="">
                                   </div>
                                   <div class="single-img">
                                       <img src="{{URL::asset('web/img/offer/blog-sidebar-thumb.jpg')}}" class="img-fluid" alt="">
                                   </div>
                               </div>
                               <div class="content-wrapper">
                                   <div class="date">
                                       <h2>15</h2>
                                       <span>May, 2020</span>
                                   </div>
                                   <div class="text">
                                       <h4>Beauty is about Shopping.</h4>
                                       <ul class="mb-35 mt-15">
                                           <li><a href="#"><span class="lnr lnr-user"></span>By James Smith</a></li>
                                           <li><a href="#"><span class="lnr lnr-bubble"></span>3 comments</a></li>
                                           <li><a href="#"><span class="lnr lnr-bookmark"></span>Lifestyles</a></li>
                                       </ul>
                                       <p class="f-400 mb-20">em ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoquead penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies aliquam convallis. Maecenas ut tellus mi. Proin tincidunt, lectus eu volutpat mattis, ante metus lacinia tellus, vitae condimentum nulla enim bibendumda danibh. Praesent turpis risus, interdum nec venenatis id, pretium sit amet purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eu lorem nibh. Mauris ex dolor, rutrum in odio vel, suscipit ultrices nunc. Cras ipsumda dolor, eleifend et nisl vel.</p>

                                       <p class="f-600 mb-20">Maecenas ut tellus mi. Proin tincidunt, lectus eu volutpat mattis, ante metus lacinia tellus, vitae condimentum nulla enim bibendumda danibh.</p>

                                       <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoquead penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies aliquam convallis. Maecenas ut tellus mi. Proin tincidunt, lectus eu volutpat mattis, ante metus lacinia tellus, vitae condimentum nulla enim bibendumda danibh.</p>
                                   </div>
                                   <div class="tag-wrapper mt-45 mb-50">
                                       <div class="tags">
                                           <h5 class="title">Tags</h5>
                                           <ul>
                                               <li><a href="#">Blue,</a></li>
                                               <li><a href="#">Casual,</a></li>
                                               <li><a href="#">Fashion,</a></li>
                                               <li><a href="#">Fashion Week,</a></li>
                                               <li><a href="#">Make Up,</a></li>
                                               <li><a href="#">Pastel,</a></li>
                                               <li><a href="#">Suits</a></li>
                                           </ul>
                                       </div>
                                       <div class="social-icon">
                                           <a href="#"><i class="icofont-facebook"></i></a>
                                           <a href="#"><i class="icofont-twitter"></i></a>
                                           <a href="#"><i class="icofont-wifi"></i></a>
                                           <a href="#"><i class="icofont-instagram"></i></a>
                                           <a href="#"><i class="icofont-dribble"></i></a>
                                       </div>
                                   </div>
                                   <div class="comment-wrapper">
                                       <div class="com-img">
                                           <img src="{{URL::asset('web/img/offer/comment-img-1.jpg')}}" class="img-fluid" alt="">
                                       </div>
                                       <div class="com-text">
                                           <h5>James Smith</h5>
                                           <p class="f-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoquead penatibus et magnis dis parturient montes.</p>
                                           <div class="social-icon">
                                               <a href="#"><i class="icofont-facebook"></i></a>
                                               <a href="#"><i class="icofont-twitter"></i></a>
                                               <a href="#"><i class="icofont-wifi"></i></a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="reply-wrapper pt-40 pb-50">
                                       <h4 class="title mb-40">12 Replies To “Benefits Of Orange”</h4>
                                       <div class="single-reply">
                                           <div class="reply-img">
                                               <img src="{{URL::asset('web/img/offer/com-reply-1.jpg')}}" class="img-fluid" alt="">
                                           </div>
                                           <div class="reply-text">
                                               <div class="header">
                                                   <h5>Helen Mask<span>22 May, 2020</span></h5>
                                                   <a href="#">Replay</a>
                                               </div>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis often natoquead penatibus et magnis dis parturient montes.</p>
                                           </div>
                                       </div>
                                       <div class="single-reply middle">
                                           <div class="reply-img">
                                               <img src="{{URL::asset('web/img/offer/com-reply-2.jpg')}}" class="img-fluid" alt="">
                                           </div>
                                           <div class="reply-text">
                                               <div class="header">
                                                   <h5>Carmella Bing<span>22 May, 2020</span></h5>
                                                   <a href="#">Replay</a>
                                               </div>
                                               <p>Dolor amet consectetur adipiscing elit. In ut ullamcorper, eget euismod orci. Cum sociis often natoquead penatibus et magnis dis parturient montes.</p>
                                           </div>
                                       </div>
                                       <div class="single-reply">
                                           <div class="reply-img">
                                               <img src="{{URL::asset('web/img/offer/com-reply-3.jpg')}}" class="img-fluid" alt="">
                                           </div>
                                           <div class="reply-text">
                                               <div class="header">
                                                   <h5>Tommy Singh<span>22 May, 2020</span></h5>
                                                   <a href="#">Replay</a>
                                               </div>
                                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis often natoquead penatibus et magnis dis parturient montes.</p>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="contact-area reply-form mt-40">
                                       <div class="contact-form">
                                           <h5 class="title mb-25">Leave a Reply</h5>
                                           <form action="#">
                                               <div class="field">
                                                   <input type="text" placeholder="Your Name">
                                                   <input type="email" placeholder="Your Email">
                                               </div>
                                               <input type="text" placeholder="Website">
                                               <textarea placeholder="Write Your Comment..."></textarea>
                                               <button type="submit">Submit</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <div class="col-lg-3">
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
