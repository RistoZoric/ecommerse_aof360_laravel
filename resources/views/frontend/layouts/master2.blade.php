<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
      <meta name="csrf-token" content="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ">
      <!-- Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet" type="text/css">
      <!-- CSS Library-->
      <style>
         :root {
         --color-1st: #fcb800;
         --color-2nd: #222222;
         --primary-font: 'Work Sans', sans-serif;
         --button-text-color: #000;
         --header-text-color: #000;
         --header-button-background-color: #000;
         --header-button-text-color: #fff;
         --header-text-hover-color: #fff;
         --header-text-accent-color: #222222;
         --header-diliver-border-color: rgba(0,0,0, 0.15);
         }
      </style>
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Martfury - Laravel Ecommerce system</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:site_name" content="">
      <meta property="og:title" content="Martfury - Laravel Ecommerce system">
      <meta property="og:description" content="">
      <meta property="og:url" content="http://127.0.0.1:8000">
      <meta property="og:type" content="article">
      <meta name="twitter:title" content="Martfury - Laravel Ecommerce system">
      <meta name="twitter:description" content="">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/demo.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/bootstrap.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/owl.carousel.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/owl.theme.default.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/slick.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/nouislider.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/lightgallery.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/fontawesome-stars.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/select2.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/font-awesome.min.css')}}">
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/style.css?v=1.15.7')}}">
      <link rel="alternate" href="vi" hreflang="vi" />
      <link media="all" type="text/css" rel="stylesheet" href="{{asset('frontend/css2/admin-bar.css')}}">
   </head>
   <body>
      <div id="alert-container"></div>
      <header class="header header--1" data-sticky="true">
         <div class="header__top">
            <div class="ps-container">
               <div class="header__left">
                  <div class="menu--product-categories">
                     <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                     <div class="menu__content" style="display: none">
                        <ul class="menu--dropdown">
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/hot-promotions">
                              <i class="icon-star"></i>
                              Hot Promotions
                              </a>
                           </li>
                           <li  class="menu-item-has-children has-mega-menu" >
                              <a href="http://127.0.0.1:8000/product-categories/electronics">
                              <i class="icon-laundry"></i>
                              Electronics
                              </a>
                              <span class="sub-toggle"></span>
                              <div class="mega-menu">
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/consumer-electronic">
                                       <h4>Consumer Electronic<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/home-audio-theaters">Home Audio &amp; Theaters</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/tv-videos">TV &amp; Videos</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/camera-photos-videos">Camera, Photos &amp; Videos</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/cellphones-accessories">Cellphones &amp; Accessories</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/headphones">Headphones</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/videos-games">Videos games</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/wireless-speakers">Wireless Speakers</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/office-electronic">Office Electronic</a></li>
                                    </ul>
                                 </div>
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/accessories-parts">
                                       <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/digital-cables">Digital Cables</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/audio-video-cables">Audio &amp; Video Cables</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/batteries">Batteries</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/clothing">
                              <i class="icon-shirt"></i>
                              Clothing
                              </a>
                           </li>
                           <li  class="menu-item-has-children has-mega-menu" >
                              <a href="http://127.0.0.1:8000/product-categories/computers">
                              <i class="icon-desktop"></i>
                              Computers
                              </a>
                              <span class="sub-toggle"></span>
                              <div class="mega-menu">
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/computer-technologies">
                                       <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/computer-tablets">Computer &amp; Tablets</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/laptop">Laptop</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/monitors">Monitors</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/computer-components">Computer Components</a></li>
                                    </ul>
                                 </div>
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/networking">
                                       <h4>Networking<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/drive-storages">Drive &amp; Storages</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/gaming-laptop">Gaming Laptop</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/security-protection">Security &amp; Protection</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/accessories">Accessories</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/home-kitchen">
                              <i class="icon-lampshade"></i>
                              Home &amp; Kitchen
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/health-beauty">
                              <i class="icon-heart-pulse"></i>
                              Health &amp; Beauty
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/jewelry-watch">
                              <i class="icon-diamond2"></i>
                              Jewelry &amp; Watch
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/technology-toys">
                              <i class="icon-desktop"></i>
                              Technology Toys
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/phones">
                              <i class="icon-smartphone"></i>
                              Phones
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/babies-moms">
                              <i class="icon-baby-bottle"></i>
                              Babies &amp; Moms
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/sport-outdoor">
                              <i class="icon-baseball"></i>
                              Sport &amp; Outdoor
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/books-office">
                              <i class="icon-book2"></i>
                              Books &amp; Office
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/cars-motorcycles">
                              <i class="icon-car-siren"></i>
                              Cars &amp; Motorcycles
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/home-improvements">
                              <i class="icon-wrench"></i>
                              Home Improvements
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <a class="ps-logo" href="http://127.0.0.1:8000"><img src="http://127.0.0.1:8000/storage/general/logo.png" alt="Martfury - Laravel Ecommerce system" height="40"></a>
               </div>
               <div class="header__center">
                  <form class="ps-form--quick-search" action="http://127.0.0.1:8000/products" data-ajax-url="http://127.0.0.1:8000/ajax/search-products" method="get">
                     <div class="form-group--icon">
                        <div class="product-cat-label">All</div>
                        <select class="form-control product-category-select" name="categories[]">
                           <option value="0">All</option>
                           <option value="1"> Hot Promotions</option>
                           <option value="2"> Electronics</option>
                           <option value="3">&nbsp;&nbsp; Consumer Electronic</option>
                           <option value="4">&nbsp;&nbsp;&nbsp;&nbsp; Home Audio &amp; Theaters</option>
                           <option value="5">&nbsp;&nbsp;&nbsp;&nbsp; TV &amp; Videos</option>
                           <option value="6">&nbsp;&nbsp;&nbsp;&nbsp; Camera, Photos &amp; Videos</option>
                           <option value="7">&nbsp;&nbsp;&nbsp;&nbsp; Cellphones &amp; Accessories</option>
                           <option value="8">&nbsp;&nbsp;&nbsp;&nbsp; Headphones</option>
                           <option value="9">&nbsp;&nbsp;&nbsp;&nbsp; Videos games</option>
                           <option value="10">&nbsp;&nbsp;&nbsp;&nbsp; Wireless Speakers</option>
                           <option value="11">&nbsp;&nbsp;&nbsp;&nbsp; Office Electronic</option>
                           <option value="12">&nbsp;&nbsp; Accessories &amp; Parts</option>
                           <option value="13">&nbsp;&nbsp;&nbsp;&nbsp; Digital Cables</option>
                           <option value="14">&nbsp;&nbsp;&nbsp;&nbsp; Audio &amp; Video Cables</option>
                           <option value="15">&nbsp;&nbsp;&nbsp;&nbsp; Batteries</option>
                           <option value="16"> Clothing</option>
                           <option value="17"> Computers</option>
                           <option value="18">&nbsp;&nbsp; Computer &amp; Technologies</option>
                           <option value="19">&nbsp;&nbsp;&nbsp;&nbsp; Computer &amp; Tablets</option>
                           <option value="20">&nbsp;&nbsp;&nbsp;&nbsp; Laptop</option>
                           <option value="21">&nbsp;&nbsp;&nbsp;&nbsp; Monitors</option>
                           <option value="22">&nbsp;&nbsp;&nbsp;&nbsp; Computer Components</option>
                           <option value="23">&nbsp;&nbsp; Networking</option>
                           <option value="24">&nbsp;&nbsp;&nbsp;&nbsp; Drive &amp; Storages</option>
                           <option value="25">&nbsp;&nbsp;&nbsp;&nbsp; Gaming Laptop</option>
                           <option value="26">&nbsp;&nbsp;&nbsp;&nbsp; Security &amp; Protection</option>
                           <option value="27">&nbsp;&nbsp;&nbsp;&nbsp; Accessories</option>
                           <option value="28"> Home &amp; Kitchen</option>
                           <option value="29"> Health &amp; Beauty</option>
                           <option value="30"> Jewelry &amp; Watch</option>
                           <option value="31"> Technology Toys</option>
                           <option value="32"> Phones</option>
                           <option value="33"> Babies &amp; Moms</option>
                           <option value="34"> Sport &amp; Outdoor</option>
                           <option value="35"> Books &amp; Office</option>
                           <option value="36"> Cars &amp; Motorcycles</option>
                           <option value="37"> Home Improvements</option>
                        </select>
                     </div>
                     <input class="form-control input-search-product" name="q" type="text" placeholder="I&#039;m shopping for..." autocomplete="off">
                     <div class="spinner-icon">
                        <i class="fa fa-spin fa-spinner"></i>
                     </div>
                     <button type="submit">Search</button>
                     <div class="ps-panel--search-result"></div>
                  </form>
               </div>
               <div class="header__right">
                  <div class="header__actions">
                     <a class="header__extra btn-compare" href="http://127.0.0.1:8000/compare"><i class="icon-chart-bars"></i><span><i>0</i></span></a>
                     <a class="header__extra btn-wishlist" href="http://127.0.0.1:8000/wishlist"><i class="icon-heart"></i><span><i>0</i></span></a>
                     <div class="ps-cart--mini">
                        <a class="header__extra btn-shopping-cart" href="http://127.0.0.1:8000/cart"><i class="icon-bag2"></i><span><i>0</i></span></a>
                        <div class="ps-cart--mobile">
                           <div class="ps-cart__content">
                              <div class="ps-cart__items ps-cart_no_items">
                                 <span class="cart-empty-message">No products in the cart.</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right">
                           <a href="http://127.0.0.1:8000/login">Login</a><a href="http://127.0.0.1:8000/register">Register</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <nav class="navigation">
            <div class="ps-container">
               <div class="navigation__left">
                  <div class="menu--product-categories">
                     <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                     <div class="menu__content" style="display: none">
                        <ul class="menu--dropdown">
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/hot-promotions">
                              <i class="icon-star"></i>
                              Hot Promotions
                              </a>
                           </li>
                           <li  class="menu-item-has-children has-mega-menu" >
                              <a href="http://127.0.0.1:8000/product-categories/electronics">
                              <i class="icon-laundry"></i>
                              Electronics
                              </a>
                              <span class="sub-toggle"></span>
                              <div class="mega-menu">
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/consumer-electronic">
                                       <h4>Consumer Electronic<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/home-audio-theaters">Home Audio &amp; Theaters</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/tv-videos">TV &amp; Videos</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/camera-photos-videos">Camera, Photos &amp; Videos</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/cellphones-accessories">Cellphones &amp; Accessories</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/headphones">Headphones</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/videos-games">Videos games</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/wireless-speakers">Wireless Speakers</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/office-electronic">Office Electronic</a></li>
                                    </ul>
                                 </div>
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/accessories-parts">
                                       <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/digital-cables">Digital Cables</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/audio-video-cables">Audio &amp; Video Cables</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/batteries">Batteries</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/clothing">
                              <i class="icon-shirt"></i>
                              Clothing
                              </a>
                           </li>
                           <li  class="menu-item-has-children has-mega-menu" >
                              <a href="http://127.0.0.1:8000/product-categories/computers">
                              <i class="icon-desktop"></i>
                              Computers
                              </a>
                              <span class="sub-toggle"></span>
                              <div class="mega-menu">
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/computer-technologies">
                                       <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/computer-tablets">Computer &amp; Tablets</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/laptop">Laptop</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/monitors">Monitors</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/computer-components">Computer Components</a></li>
                                    </ul>
                                 </div>
                                 <div class="mega-menu__column">
                                    <a href="http://127.0.0.1:8000/product-categories/networking">
                                       <h4>Networking<span class="sub-toggle"></span></h4>
                                    </a>
                                    <ul class="mega-menu__list">
                                       <li><a href="http://127.0.0.1:8000/product-categories/drive-storages">Drive &amp; Storages</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/gaming-laptop">Gaming Laptop</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/security-protection">Security &amp; Protection</a></li>
                                       <li><a href="http://127.0.0.1:8000/product-categories/accessories">Accessories</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/home-kitchen">
                              <i class="icon-lampshade"></i>
                              Home &amp; Kitchen
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/health-beauty">
                              <i class="icon-heart-pulse"></i>
                              Health &amp; Beauty
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/jewelry-watch">
                              <i class="icon-diamond2"></i>
                              Jewelry &amp; Watch
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/technology-toys">
                              <i class="icon-desktop"></i>
                              Technology Toys
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/phones">
                              <i class="icon-smartphone"></i>
                              Phones
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/babies-moms">
                              <i class="icon-baby-bottle"></i>
                              Babies &amp; Moms
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/sport-outdoor">
                              <i class="icon-baseball"></i>
                              Sport &amp; Outdoor
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/books-office">
                              <i class="icon-book2"></i>
                              Books &amp; Office
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/cars-motorcycles">
                              <i class="icon-car-siren"></i>
                              Cars &amp; Motorcycles
                              </a>
                           </li>
                           <li >
                              <a href="http://127.0.0.1:8000/product-categories/home-improvements">
                              <i class="icon-wrench"></i>
                              Home Improvements
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="navigation__right">
                  <ul  class="menu">
                     <li class="   current-menu-item ">
                        <a href="http://127.0.0.1:8000/" >
                        Home
                        </a>
                     </li>
                     <li class=" menu-item-has-children   ">
                        <a href="#" >
                        Pages
                        </a>
                        <span class="sub-toggle"></span>
                        <ul  class="sub-menu">
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/about-us" >
                              About us
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/terms-of-use" >
                              Terms Of Use
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/terms-conditions" >
                              Terms &amp; Conditions
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/refund-policy" >
                              Refund Policy
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/coming-soon" >
                              Coming soon
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class=" menu-item-has-children   ">
                        <a href="http://127.0.0.1:8000/products" >
                        Shop
                        </a>
                        <span class="sub-toggle"></span>
                        <ul  class="sub-menu">
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/products" >
                              All products
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/product-categories/batteries" >
                              Products Of Category
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/products/beat-headphone" >
                              Product Single
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/stores" >
                        Stores
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/blog" >
                        Blog
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/faqs" >
                        FAQs
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/contact" >
                        Contact
                        </a>
                     </li>
                  </ul>
                  <ul class="navigation__extra">
                     <li><a href="http://127.0.0.1:8000/login">Sell On Martfury</a></li>
                     <li><a href="http://127.0.0.1:8000/orders/tracking">Track your order</a></li>
                     <li>
                        <div class="ps-dropdown">
                           <a href="http://127.0.0.1:8000/currency/switch/USD"><span>USD</span></a>
                           <ul class="ps-dropdown-menu">
                              <li><a href="http://127.0.0.1:8000/currency/switch/EUR"><span>EUR</span></a></li>
                              <li><a href="http://127.0.0.1:8000/currency/switch/VND"><span>VND</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <div class="ps-dropdown language">
                           <span>
                           <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                           English
                           </span>
                           <ul class="ps-dropdown-menu ">
                              <li>
                                 <a href="http://127.0.0.1:8000/vi">
                                 <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">                                    <span>Tiếng Việt</span>                                </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <header class="header header--mobile" data-sticky="true">
         <div class="header__top">
            <div class="header__left">
               <p>Welcome to Martfury Online Shopping Store!</p>
            </div>
            <div class="header__right">
               <ul class="navigation__extra">
                  <li><a href="http://127.0.0.1:8000/orders/tracking">Track your order</a></li>
                  <li>
                     <div class="ps-dropdown">
                        <a href="#"><span>USD</span></a>
                        <ul class="ps-dropdown-menu">
                           <li><a href="http://127.0.0.1:8000/currency/switch/USD"><span>USD</span></a></li>
                           <li><a href="http://127.0.0.1:8000/currency/switch/EUR"><span>EUR</span></a></li>
                           <li><a href="http://127.0.0.1:8000/currency/switch/VND"><span>VND</span></a></li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <div class="ps-dropdown language">
                        <span>
                        <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                        English
                        </span>
                        <ul class="ps-dropdown-menu ">
                           <li>
                              <a href="http://127.0.0.1:8000/vi">
                              <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">                                    <span>Tiếng Việt</span>                                </a>
                           </li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="http://127.0.0.1:8000"><img src="http://127.0.0.1:8000/storage/general/logo.png" alt="Martfury - Laravel Ecommerce system"></a></div>
            <div class="navigation__right">
               <div class="header__actions">
                  <div class="ps-cart--mini">
                     <a class="header__extra btn-shopping-cart" href="javascript:void(0)">
                     <i class="icon-bag2"></i><span><i>0</i></span>
                     </a>
                     <div class="ps-cart--mobile">
                        <div class="ps-cart__content">
                           <div class="ps-cart__items ps-cart_no_items">
                              <span class="cart-empty-message">No products in the cart.</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ps-block--user-header">
                     <div class="ps-block__left"><a href="http://127.0.0.1:8000/customer/overview"><i class="icon-user"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="http://127.0.0.1:8000/products" data-ajax-url="http://127.0.0.1:8000/ajax/search-products" method="get">
               <div class="form-group--nest position-relative">
                  <input class="form-control input-search-product" name="q" value="" type="text" autocomplete="off" placeholder="Search something...">
                  <div class="spinner-icon">
                     <i class="fa fa-spin fa-spinner"></i>
                  </div>
                  <button type="submit"><i class="icon-magnifier"></i></button>
                  <div class="ps-panel--search-result"></div>
               </div>
            </form>
         </div>
      </header>
      <div class="ps-panel--sidebar" id="cart-mobile" style="display: none">
         <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
         </div>
         <div class="navigation__content">
            <div class="ps-cart--mobile">
               <div class="ps-cart__content">
                  <div class="ps-cart__items ps-cart_no_items">
                     <span class="cart-empty-message">No products in the cart.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="ps-panel--sidebar" id="navigation-mobile" style="display: none">
         <div class="ps-panel__header">
            <h3>Categories</h3>
         </div>
         <div class="ps-panel__content">
            <ul class="menu--mobile">
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/hot-promotions">
                  <i class="icon-star"></i>
                  Hot Promotions
                  </a>
               </li>
               <li  class="menu-item-has-children has-mega-menu" >
                  <a href="http://127.0.0.1:8000/product-categories/electronics">
                  <i class="icon-laundry"></i>
                  Electronics
                  </a>
                  <span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <a href="http://127.0.0.1:8000/product-categories/consumer-electronic">
                           <h4>Consumer Electronic<span class="sub-toggle"></span></h4>
                        </a>
                        <ul class="mega-menu__list">
                           <li><a href="http://127.0.0.1:8000/product-categories/home-audio-theaters">Home Audio &amp; Theaters</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/tv-videos">TV &amp; Videos</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/camera-photos-videos">Camera, Photos &amp; Videos</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/cellphones-accessories">Cellphones &amp; Accessories</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/headphones">Headphones</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/videos-games">Videos games</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/wireless-speakers">Wireless Speakers</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/office-electronic">Office Electronic</a></li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <a href="http://127.0.0.1:8000/product-categories/accessories-parts">
                           <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                        </a>
                        <ul class="mega-menu__list">
                           <li><a href="http://127.0.0.1:8000/product-categories/digital-cables">Digital Cables</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/audio-video-cables">Audio &amp; Video Cables</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/batteries">Batteries</a></li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/clothing">
                  <i class="icon-shirt"></i>
                  Clothing
                  </a>
               </li>
               <li  class="menu-item-has-children has-mega-menu" >
                  <a href="http://127.0.0.1:8000/product-categories/computers">
                  <i class="icon-desktop"></i>
                  Computers
                  </a>
                  <span class="sub-toggle"></span>
                  <div class="mega-menu">
                     <div class="mega-menu__column">
                        <a href="http://127.0.0.1:8000/product-categories/computer-technologies">
                           <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                        </a>
                        <ul class="mega-menu__list">
                           <li><a href="http://127.0.0.1:8000/product-categories/computer-tablets">Computer &amp; Tablets</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/laptop">Laptop</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/monitors">Monitors</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/computer-components">Computer Components</a></li>
                        </ul>
                     </div>
                     <div class="mega-menu__column">
                        <a href="http://127.0.0.1:8000/product-categories/networking">
                           <h4>Networking<span class="sub-toggle"></span></h4>
                        </a>
                        <ul class="mega-menu__list">
                           <li><a href="http://127.0.0.1:8000/product-categories/drive-storages">Drive &amp; Storages</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/gaming-laptop">Gaming Laptop</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/security-protection">Security &amp; Protection</a></li>
                           <li><a href="http://127.0.0.1:8000/product-categories/accessories">Accessories</a></li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/home-kitchen">
                  <i class="icon-lampshade"></i>
                  Home &amp; Kitchen
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/health-beauty">
                  <i class="icon-heart-pulse"></i>
                  Health &amp; Beauty
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/jewelry-watch">
                  <i class="icon-diamond2"></i>
                  Jewelry &amp; Watch
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/technology-toys">
                  <i class="icon-desktop"></i>
                  Technology Toys
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/phones">
                  <i class="icon-smartphone"></i>
                  Phones
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/babies-moms">
                  <i class="icon-baby-bottle"></i>
                  Babies &amp; Moms
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/sport-outdoor">
                  <i class="icon-baseball"></i>
                  Sport &amp; Outdoor
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/books-office">
                  <i class="icon-book2"></i>
                  Books &amp; Office
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/cars-motorcycles">
                  <i class="icon-car-siren"></i>
                  Cars &amp; Motorcycles
                  </a>
               </li>
               <li >
                  <a href="http://127.0.0.1:8000/product-categories/home-improvements">
                  <i class="icon-wrench"></i>
                  Home Improvements
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="navigation--list">
         <div class="navigation__content">
            <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a>
         </div>
      </div>
      <div class="ps-panel--sidebar" id="search-sidebar" style="display: none">
         <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="http://127.0.0.1:8000/products" data-ajax-url="http://127.0.0.1:8000/ajax/search-products" method="get">
               <div class="form-group--nest position-relative">
                  <input class="form-control input-search-product" name="q" value="" type="text" autocomplete="off" placeholder="Search something...">
                  <div class="spinner-icon">
                     <i class="fa fa-spin fa-spinner"></i>
                  </div>
                  <button type="submit"><i class="icon-magnifier"></i></button>
                  <div class="ps-panel--search-result"></div>
               </div>
            </form>
         </div>
         <div class="navigation__content"></div>
      </div>
      <div class="ps-panel--sidebar" id="menu-mobile" style="display: none">
         <div class="ps-panel__header">
            <h3>Menu</h3>
         </div>
         <div class="ps-panel__content">
            <ul  class="menu--mobile">
               <li class="   current-menu-item ">
                  <a href="http://127.0.0.1:8000/" >
                  Home
                  </a>
               </li>
               <li class=" menu-item-has-children   ">
                  <a href="#" >
                  Pages
                  </a>
                  <span class="sub-toggle"></span>
                  <ul  class="sub-menu">
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/about-us" >
                        About us
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/terms-of-use" >
                        Terms Of Use
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/terms-conditions" >
                        Terms &amp; Conditions
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/refund-policy" >
                        Refund Policy
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/coming-soon" >
                        Coming soon
                        </a>
                     </li>
                  </ul>
               </li>
               <li class=" menu-item-has-children   ">
                  <a href="http://127.0.0.1:8000/products" >
                  Shop
                  </a>
                  <span class="sub-toggle"></span>
                  <ul  class="sub-menu">
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/products" >
                        All products
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/product-categories/batteries" >
                        Products Of Category
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/products/beat-headphone" >
                        Product Single
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="  ">
                  <a href="http://127.0.0.1:8000/stores" >
                  Stores
                  </a>
               </li>
               <li class="  ">
                  <a href="http://127.0.0.1:8000/blog" >
                  Blog
                  </a>
               </li>
               <li class="  ">
                  <a href="http://127.0.0.1:8000/faqs" >
                  FAQs
                  </a>
               </li>
               <li class="  ">
                  <a href="http://127.0.0.1:8000/contact" >
                  Contact
                  </a>
               </li>
            </ul>
            <ul class="menu--mobile menu--mobile-extra">
               <li><a href="http://127.0.0.1:8000/orders/tracking"><i class="icon-check-square"></i> Track your order</a></li>
               <li><a href="http://127.0.0.1:8000/compare"><i class="icon-chart-bars"></i> <span>Compare</span></a></li>
               <li><a href="http://127.0.0.1:8000/wishlist"><i class="icon-heart"></i> <span>Wishlist</span></a></li>
               <li class="menu-item-has-children">
                  <a href="#"><span>USD</span></a>
                  <span class="sub-toggle"></span>
                  <ul class="sub-menu">
                     <li><a href="http://127.0.0.1:8000/currency/switch/EUR"><span>EUR</span></a></li>
                     <li><a href="http://127.0.0.1:8000/currency/switch/VND"><span>VND</span></a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="#">
                  <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                  English
                  </a>
                  <span class="sub-toggle"></span>
                  <ul class="sub-menu">
                     <li>
                        <a href="http://127.0.0.1:8000/vi">
                        <img src="http://127.0.0.1:8000/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">                                                    <span>Tiếng Việt</span>                                                </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
    

      @yield('main-content')



      <footer class="ps-footer">
         <div class="ps-container">
            <div class="ps-footer__widgets">
               <aside class="widget widget_footer widget_contact-us">
                  <h4 class="widget-title">Contact us</h4>
                  <div class="widget_content">
                     <p>Call us 24/7</p>
                     <h3>1800 97 97 69</h3>
                     <p>502 New Street, Brighton VIC, Australia <br><a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                     <ul class="ps-list--social">
                        <li>
                           <a href="https://www.facebook.com/"
                              title="Facebook" style="color: #3b5999">
                           <i class="fa fa-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.twitter.com/"
                              title="Twitter" style="color: #55ACF9">
                           <i class="fa fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/"
                              title="Instagram" style="color: #E1306C">
                           <i class="fa fa-instagram"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.youtube.com/"
                              title="Youtube" style="color: #FF0000">
                           <i class="fa fa-youtube"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </aside>
               <aside class="widget widget_footer">
                  <h4 class="widget-title">Quick links</h4>
                  <ul  class="ps-list--link">
                     <li >
                        <a href="http://127.0.0.1:8000/terms-of-use" >
                        <span>Terms Of Use</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/terms-conditions" >
                        <span>Terms &amp; Conditions</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/refund-policy" >
                        <span>Refund Policy</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/faqs" >
                        <span>FAQs</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/nothing" >
                        <span>404 Page</span>
                        </a>
                     </li>
                  </ul>
               </aside>
               <aside class="widget widget_footer">
                  <h4 class="widget-title">Company</h4>
                  <ul  class="ps-list--link">
                     <li >
                        <a href="http://127.0.0.1:8000/about-us" >
                        <span>About us</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/affiliate" >
                        <span>Affiliate</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/career" >
                        <span>Career</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/contact" >
                        <span>Contact us</span>
                        </a>
                     </li>
                  </ul>
               </aside>
               <aside class="widget widget_footer">
                  <h4 class="widget-title">Business</h4>
                  <ul  class="ps-list--link">
                     <li >
                        <a href="http://127.0.0.1:8000/blog" >
                        <span>Our blog</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/cart" >
                        <span>Cart</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/customer/overview" >
                        <span>My account</span>
                        </a>
                     </li>
                     <li >
                        <a href="http://127.0.0.1:8000/products" >
                        <span>Shop</span>
                        </a>
                     </li>
                  </ul>
               </aside>
            </div>
            <div id="footer-links" class="ps-footer__links"><div><p><strong>Consumer Electric:</strong> <a href="http://127.0.0.1:8000/product-categories/electronics" title="Electronics">Electronics</a><a href="http://127.0.0.1:8000/product-categories/consumer-electronic" title="Consumer Electronic">Consumer Electronic</a><a href="http://127.0.0.1:8000/product-categories/home-audio-theaters" title="Home Audio &amp; Theaters">Home Audio &amp; Theaters</a><a href="http://127.0.0.1:8000/product-categories/tv-videos" title="TV &amp; Videos">TV &amp; Videos</a><a href="http://127.0.0.1:8000/product-categories/camera-photos-videos" title="Camera, Photos &amp; Videos">Camera, Photos &amp; Videos</a><a href="http://127.0.0.1:8000/product-categories/cellphones-accessories" title="Cellphones &amp; Accessories">Cellphones &amp; Accessories</a><a href="http://127.0.0.1:8000/product-categories/computer-technologies" title="Computer &amp; Technologies">Computer &amp; Technologies</a></p></div> <div><p><strong>Clothing &amp; Apparel:</strong> <a href="http://127.0.0.1:8000/product-categories/headphones" title="Headphones">Headphones</a><a href="http://127.0.0.1:8000/product-categories/videos-games" title="Videos games">Videos games</a><a href="http://127.0.0.1:8000/product-categories/wireless-speakers" title="Wireless Speakers">Wireless Speakers</a><a href="http://127.0.0.1:8000/product-categories/office-electronic" title="Office Electronic">Office Electronic</a><a href="http://127.0.0.1:8000/product-categories/accessories-parts" title="Accessories &amp; Parts">Accessories &amp; Parts</a></p></div> <div><p><strong>Home, Garden &amp; Kitchen:</strong> <a href="http://127.0.0.1:8000/product-categories/digital-cables" title="Digital Cables">Digital Cables</a><a href="http://127.0.0.1:8000/product-categories/audio-video-cables" title="Audio &amp; Video Cables">Audio &amp; Video Cables</a><a href="http://127.0.0.1:8000/product-categories/batteries" title="Batteries">Batteries</a><a href="http://127.0.0.1:8000/product-categories/clothing" title="Clothing">Clothing</a><a href="http://127.0.0.1:8000/product-categories/computers" title="Computers">Computers</a></p></div> <div><p><strong>Health &amp; Beauty:</strong> <a href="http://127.0.0.1:8000/product-categories/laptop" title="Laptop">Laptop</a><a href="http://127.0.0.1:8000/product-categories/monitors" title="Monitors">Monitors</a><a href="http://127.0.0.1:8000/product-categories/computer-components" title="Computer Components">Computer Components</a><a href="http://127.0.0.1:8000/product-categories/networking" title="Networking">Networking</a><a href="http://127.0.0.1:8000/product-categories/drive-storages" title="Drive &amp; Storages">Drive &amp; Storages</a></p></div> <div><p><strong>Computer &amp; Technologies:</strong> <a href="http://127.0.0.1:8000/product-categories/computer-tablets" title="Computer &amp; Tablets">Computer &amp; Tablets</a><a href="http://127.0.0.1:8000/product-categories/gaming-laptop" title="Gaming Laptop">Gaming Laptop</a><a href="http://127.0.0.1:8000/product-categories/security-protection" title="Security &amp; Protection">Security &amp; Protection</a><a href="http://127.0.0.1:8000/product-categories/accessories" title="Accessories">Accessories</a><a href="http://127.0.0.1:8000/product-categories/home-kitchen" title="Home &amp; Kitchen">Home &amp; Kitchen</a><a href="http://127.0.0.1:8000/product-categories/health-beauty" title="Health &amp; Beauty">Health &amp; Beauty</a></p></div></div>
            <div class="ps-footer__copyright">
               <p>© 2021 Martfury. All Rights Reserved.</p>
               <div class="footer-payments">
                  <span>We Using Safe Payment For:</span>
                  <p class="d-sm-inline-block d-block">
                     <span><img src="http://127.0.0.1:8000/storage/general/payment-method-1.jpg" alt="payment method"></span>
                     <span><img src="http://127.0.0.1:8000/storage/general/payment-method-2.jpg" alt="payment method"></span>
                     <span><img src="http://127.0.0.1:8000/storage/general/payment-method-3.jpg" alt="payment method"></span>
                     <span><img src="http://127.0.0.1:8000/storage/general/payment-method-4.jpg" alt="payment method"></span>
                     <span><img src="http://127.0.0.1:8000/storage/general/payment-method-5.jpg" alt="payment method"></span>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <div data-session-domain="127.0.0.1"></div>
      <div class="ps-popup" id="subscribe" data-time="10000" style="display: none">
         <div class="ps-popup__content bg--cover" data-background="http://127.0.0.1:8000/storage/general/newsletter.jpg" style="background-size: cover!important;">
            <a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form method="post" action="http://127.0.0.1:8000/newsletter/subscribe" class="ps-form--subscribe-popup newsletter-form">
               <input type="hidden" name="_token" value="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ">                    
               <div class="ps-form__content">
                  <h4>Get 25% Discount</h4>
                  <p>Subscribe to the mailing list to receive updates on new arrivals, special offers and our promotions.</p>
                  <div class="form-group">
                     <input class="form-control" name="email" type="email"  placeholder="Email Address" required>
                  </div>
                  <div class="form-group">
                     <button class="ps-btn" type="submit" >Subscribe</button>
                  </div>
                  <div class="ps-checkbox">
                     <input class="form-control" type="checkbox" id="dont_show_again" name="dont_show_again">
                     <label for="dont_show_again">Don&#039;t show this popup again</label>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div id="back2top"><i class="icon icon-arrow-up"></i></div>
      <div class="ps-site-overlay"></div>
      <div class="ps-search" id="site-search">
         <a class="ps-btn--close" href="#"></a>
         <div class="ps-search__content">
            <form class="ps-form--primary-search" action="http://127.0.0.1:8000/products" data-ajax-url="http://127.0.0.1:8000/ajax/search-products" method="get">
               <input class="form-control input-search-product" name="q" value="" type="text" autocomplete="off" placeholder="Search for...">
               <div class="spinner-icon">
                  <i class="fa fa-spin fa-spinner"></i>
               </div>
               <button><i class="aroma-magnifying-glass"></i></button>
               <div class="ps-panel--search-result"></div>
            </form>
         </div>
      </div>
      <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
               <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
               </article>
            </div>
         </div>
      </div>
      <script>
         window.trans = {
             "View All": "View All",
             "No reviews!": "No reviews!",
         }
         window.siteUrl = "http://127.0.0.1:8000";
      </script>
      <script src="{{asset('frontend/js2/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('frontend/js2/nouislider.min.js')}}"></script>
      <script src="{{asset('frontend/js2/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js2/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js2/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js2/jquery.matchHeight-min.js')}}"></script>
      <script src="{{asset('frontend/js2/slick.min.js')}}"></script>
      <script src="{{asset('frontend/js2/jquery.barrating.min.js')}}"></script>
      <script src="{{asset('frontend/js2/slick-animation.min.js')}}"></script>
      <script src="{{asset('frontend/js2/lightgallery.min.js')}}"></script>
      <script src="{{asset('frontend/js2/sticky-sidebar.min.js')}}"></script>
      <script src="{{asset('frontend/js2/select2.min.js')}}"></script>
      <script src="{{asset('frontend/js2/main.js?v=1.15.7')}}"></script>
      <script src="{{asset('frontend/js2/backend.js?v=1.15.7')}}"></script>
      <script src="{{asset('frontend/js2/change-product-swatches.js')}}"></script>
      <script src="{{asset('frontend/js2/language-public.js?v=1.0.0')}}"></script>
      <script src="{{asset('frontend/js2/app.js?v=1.15.7')}}"></script>
      <div id="fb-root"></div>
      <script>
         window.fbAsyncInit = function() {
             FB.init({
                 xfbml            : true,
                 version          : 'v7.0'
             });
         };
         
         (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
             fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <nav id="admin_bar">
         <div class="admin-bar-container">
            <div class="admin-bar-logo">
               <a href="http://127.0.0.1:8000/admin" title="Go to dashboard">
               <img src="http://127.0.0.1:8000/storage/general/logo-light.png" alt="logo"/>
               </a>
            </div>
            <ul class="admin-navbar-nav">
               <li class="admin-bar-dropdown">
                  <a href="javascript:;" class="dropdown-toggle">
                  Appearance
                  </a>
                  <ul class="admin-bar-dropdown-menu">
                     <li>
                        <a href="http://127.0.0.1:8000/admin">
                        Dashboard
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/settings/general">
                        Settings
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/theme/all">
                        Themes
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/theme/options">
                        Theme options
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/widgets">
                        Widgets
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="admin-bar-dropdown">
                  <a href="javascript:;" class="dropdown-toggle">
                  Add new
                  </a>
                  <ul class="admin-bar-dropdown-menu">
                     <li>
                        <a href="http://127.0.0.1:8000/admin/system/users/create">
                        Users
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/pages/create">
                        Pages
                        </a>
                     </li>
                     <li>
                        <a href="http://127.0.0.1:8000/admin/blog/posts/create">
                        Post
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="http://127.0.0.1:8000/admin/pages/edit/1">Edit this page</a>
               </li>
            </ul>
            <ul class="admin-navbar-nav admin-navbar-nav-right">
               <li class="admin-bar-dropdown">
                  <a href="http://127.0.0.1:8000/admin/system/users/profile/1" class="dropdown-toggle">
                  System Admin
                  </a>
                  <ul class="admin-bar-dropdown-menu">
                     <li><a href="http://127.0.0.1:8000/admin/system/users/profile/1">Profile</a></li>
                     <li><a href="http://127.0.0.1:8000/admin/logout">Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </nav>
      <script type="text/javascript">
         document.getElementsByTagName('body')[0].classList.add('show-admin-bar');
      </script>
   </body>
</html>