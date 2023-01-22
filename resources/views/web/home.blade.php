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
    

    <!--  @yield('main-content')  -->
    <div id="homepage-1">
         <div id="app">
            <div>
               <div class="ps-home-banner ps-home-banner--1">
                  <div class="ps-container">
                     <div class="ps-section__left">
                        <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                           <div class="ps-banner bg--cover" data-background="http://127.0.0.1:8000/storage/sliders/1.jpg">
                              <a class="ps-banner__overlay" href="http://127.0.0.1:8000/products"></a>
                           </div>
                           <div class="ps-banner bg--cover" data-background="http://127.0.0.1:8000/storage/sliders/2.jpg">
                              <a class="ps-banner__overlay" href="http://127.0.0.1:8000/products"></a>
                           </div>
                           <div class="ps-banner bg--cover" data-background="http://127.0.0.1:8000/storage/sliders/3.jpg">
                              <a class="ps-banner__overlay" href="http://127.0.0.1:8000/products"></a>
                           </div>
                        </div>
                     </div>
                     <div class="ps-section__right">
                        <div class="ps-collection">
                           <div><a href="http://127.0.0.1:8000/ads-click/27VEKFOB3Q5J" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/1.jpg" style="max-width: 100%" alt="Top Slider Image 1"></a></div>
                        </div>
                        <div class="ps-collection">
                           <div><a href="http://127.0.0.1:8000/ads-click/SLCZBWZXDSDO" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/2.jpg" style="max-width: 100%" alt="Top Slider Image 2"></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-site-features">
                  <div class="ps-container">
                     <div class="ps-block--site-features">
                        <div class="ps-block__item">
                           <div class="ps-block__left"><i class="icon-rocket"></i></div>
                           <div class="ps-block__right">
                              <h4>Free Delivery</h4>
                              <p>For all orders over $99</p>
                           </div>
                        </div>
                        <div class="ps-block__item">
                           <div class="ps-block__left"><i class="icon-sync"></i></div>
                           <div class="ps-block__right">
                              <h4>90 Days Return</h4>
                              <p>If goods have problems</p>
                           </div>
                        </div>
                        <div class="ps-block__item">
                           <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                           <div class="ps-block__right">
                              <h4>Secure Payment</h4>
                              <p>100% secure payment</p>
                           </div>
                        </div>
                        <div class="ps-block__item">
                           <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                           <div class="ps-block__right">
                              <h4>24/7 Support</h4>
                              <p>Dedicated support</p>
                           </div>
                        </div>
                        <div class="ps-block__item">
                           <div class="ps-block__left"><i class="icon-gift"></i></div>
                           <div class="ps-block__right">
                              <h4>Gift Service</h4>
                              <p>Support gift service</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div></div>
            <div>
               <div class="ps-top-categories mt-40 mb-40">
                  <div class="ps-container">
                     <h3>Top Categories</h3>
                     <featured-product-categories-component url="http://127.0.0.1:8000/ajax/featured-product-categories"></featured-product-categories-component>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-home-ads mt-40 mb-40">
                  <div class="ps-container">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="ps-collection">
                              <div><a href="http://127.0.0.1:8000/ads-click/IZ6WU8KUALYD" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/3.jpg" style="max-width: 100%" alt="Homepage middle 1"></a></div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="ps-collection">
                              <div><a href="http://127.0.0.1:8000/ads-click/ILSFJVYFGCPZ" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/4.jpg" style="max-width: 100%" alt="Homepage middle 2"></a></div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="ps-collection">
                              <div><a href="http://127.0.0.1:8000/ads-click/ZDOZUZZIU7FT" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/5.jpg" style="max-width: 100%" alt="Homepage middle 3"></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-product-list mt-40 mb-40">
                  <div class="ps-container">
                     <div class="ps-section__header">
                        <h3>Featured products</h3>
                        <ul class="ps-section__links">
                           <li><a href="http://127.0.0.1:8000/products">View All</a></li>
                        </ul>
                     </div>
                     <featured-products-component url="http://127.0.0.1:8000/ajax/featured-products" limit=""></featured-products-component>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-home-ads mt-40 mb-40">
                  <div class="ps-container">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ps-collection">
                              <div><a href="http://127.0.0.1:8000/ads-click/Q9YDUIC9HSWS" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/6.jpg" style="max-width: 100%" alt="Homepage big 1"></a></div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="ps-collection">
                              <div><a href="http://127.0.0.1:8000/ads-click/IZ6WU8KUALYE" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/9.jpg" style="max-width: 100%" alt="Homepage big 2"></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-product-list mb-60">
                  <product-collections-component title="Exclusive Products" :product_collections="[{&quot;id&quot;:1,&quot;name&quot;:&quot;New Arrival&quot;,&quot;slug&quot;:&quot;new-arrival&quot;},{&quot;id&quot;:2,&quot;name&quot;:&quot;Best Sellers&quot;,&quot;slug&quot;:&quot;best-sellers&quot;},{&quot;id&quot;:3,&quot;name&quot;:&quot;Special Offer&quot;,&quot;slug&quot;:&quot;special-offer&quot;}]" url="http://127.0.0.1:8000/ajax/products" all="http://127.0.0.1:8000/products"></product-collections-component>
               </div>
            </div>
            <div>
               <div class="ps-product-list">
                  <product-category-products-component limit="" :category="{&quot;id&quot;:18,&quot;name&quot;:&quot;Computer &amp; Technologies&quot;,&quot;parent_id&quot;:17,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:0,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;children&quot;:[{&quot;id&quot;:19,&quot;name&quot;:&quot;Computer &amp; Tablets&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:0,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:20,&quot;name&quot;:&quot;Laptop&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:1,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:21,&ququot;name&quot;:&quot;Monitors&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:2,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;}]}" :children="[{&quot;id&quot;:19,&quot;name&quot;:&quot;Computer &amp; Tablets&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:0,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:20,&quot;name&quot;:&quot;Laptop&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:1,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:21,&quot;name&quot;:&quot;Monitors&quot;,&quot;parent_id&quot;:18,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:2,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;}]" url="http://127.0.0.1:8000/ajax/product-categories/products" all="http://127.0.0.1:8000/product-categories/computer-technologies"></product-category-products-component>
               </div>
            </div>
            <div>
               <div class="ps-download-app">
                  <div class="ps-container">
                     <div class="ps-block--download-app">
                        <div class="container">
                           <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                 <div class="ps-block__thumbnail">
                                    <img src="http://127.0.0.1:8000/storage/general/app.png" alt="screenshot">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                 <div class="ps-block__content">
                                    <h3>Download Martfury App Now!</h3>
                                    <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone.</p>
                                    <form class="ps-form--download-app" action="http://127.0.0.1:8000/ajax/send-download-app-links" method="post">
                                       <input type="hidden" name="_token" value="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ">                                
                                       <div class="form-group--nest">
                                          <input class="form-control" type="email" name="email" placeholder="Email Address">
                                          <button class="ps-btn" type="submit">Subscribe</button>
                                       </div>
                                    </form>
                                    <p class="download-link">
                                       <a href="https://www.appstore.com"><img src="http://127.0.0.1:8000/themes/martfury/img/google-play.png" alt="Google Play"></a>
                                       <a href="https://play.google.com/store"><img src="http://127.0.0.1:8000/themes/martfury/img/app-store.png" alt="App Store"></a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <div class="ps-product-list">
                  <product-category-products-component limit="" :category="{&quot;id&quot;:23,&quot;name&quot;:&quot;Networking&quot;,&quot;parent_id&quot;:17,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:1,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;children&quot;:[{&quot;id&quot;:24,&quot;name&quot;:&quot;Drive &amp; Storages&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:0,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:25,&quot;name&quot;:&quot;Gaming Laptop&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:1,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:26,&quot;name&quot;:&quot;Security &amp; Protection&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:2,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;}]}" :children="[{&quot;id&quot;:24,&quot;name&quot;:&quot;Drive &amp; Storages&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:0,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:25,&quot;name&quot;:&quot;Gaming Laptop&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:1,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;},{&quot;id&quot;:26,&quot;name&quot;:&quot;Security &amp; Protection&quot;,&quot;parent_id&quot;:23,&quot;description&quot;:null,&quot;status&quot;:&quot;published&quot;,&quot;order&quot;:2,&quot;image&quot;:null,&quot;is_featured&quot;:0,&quot;created_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-18T13:25:10.000000Z&quot;}]" url="http://127.0.0.1:8000/ajax/product-categories/products" all="http://127.0.0.1:8000/product-categories/networking"></product-category-products-component>
               </div>
            </div>
            <div>
               <div class="ps-newsletter mt-40">
                  <div class="ps-container newsletter-form">
                     <form class="ps-form--newsletter" method="post" action="http://127.0.0.1:8000/newsletter/subscribe">
                        <div class="row">
                           <div class="col-xl-5">
                              <div class="ps-form__left">
                                 <h3>Join Our Newsletter Now</h3>
                                 <p>Subscribe to get information about products and coupons</p>
                              </div>
                           </div>
                           <div class="col-xl-7">
                              <div class="ps-form__right">
                                 <input type="hidden" name="_token" value="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ">                        
                                 <div class="form-group--nest">
                                    <input class="form-control" name="email" type="email" placeholder="Email address">
                                    <button class="ps-btn" type="submit">Subscribe</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="homepage-1">
        <div id="app"><div><div class="ps-home-banner ps-home-banner--1"><div class="ps-container"><div class="ps-section__left"><div data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut" class="ps-carousel--nav-inside owl-slider owl-carousel owl-loaded owl-drag">  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4156px, 0px, 0px); transition: all 0s ease 0s; width: 7275px;"><div class="owl-item cloned" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/2.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/2.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item cloned" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/3.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/3.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/1.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/1.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/2.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/2.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item animated owl-animated-in fadeIn active" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/3.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/3.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/1.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/1.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div><div class="owl-item cloned" style="width: 1039.2px;"><div data-background="http://127.0.0.1:8000/storage/sliders/2.jpg" class="ps-banner bg--cover" style="background-image: url(&quot;http://127.0.0.1:8000/storage/sliders/2.jpg&quot;); background-color: rgb(255, 255, 255);"><a href="http://127.0.0.1:8000/products" class="ps-banner__overlay"></a></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div></div> <div class="ps-section__right"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/27VEKFOB3Q5J" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/1.jpg" alt="Top Slider Image 1" style="max-width: 100%;"></a></div></div> <div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/SLCZBWZXDSDO" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/2.jpg" alt="Top Slider Image 2" style="max-width: 100%;"></a></div></div></div></div></div></div><div><div class="ps-site-features"><div class="ps-container"><div class="ps-block--site-features"><div class="ps-block__item"><div class="ps-block__left"><i class="icon-rocket"></i></div> <div class="ps-block__right"><h4>Free Delivery</h4> <p>For all orders over $99</p></div></div> <div class="ps-block__item"><div class="ps-block__left"><i class="icon-sync"></i></div> <div class="ps-block__right"><h4>90 Days Return</h4> <p>If goods have problems</p></div></div> <div class="ps-block__item"><div class="ps-block__left"><i class="icon-credit-card"></i></div> <div class="ps-block__right"><h4>Secure Payment</h4> <p>100% secure payment</p></div></div> <div class="ps-block__item"><div class="ps-block__left"><i class="icon-bubbles"></i></div> <div class="ps-block__right"><h4>24/7 Support</h4> <p>Dedicated support</p></div></div> <div class="ps-block__item"><div class="ps-block__left"><i class="icon-gift"></i></div> <div class="ps-block__right"><h4>Gift Service</h4> <p>Support gift service</p></div></div></div></div></div></div><div></div><div><div class="ps-top-categories mt-40 mb-40"><div class="ps-container"><h3>Top Categories</h3> <div class="row justify-content-center"><!----> <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/electronics" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/1-300x300.jpg" alt="Electronics"> <p>Electronics</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/clothing" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/2-300x300.jpg" alt="Clothing"> <p>Clothing</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/computers" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/3-300x300.jpg" alt="Computers"> <p>Computers</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/home-kitchen" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/4-300x300.jpg" alt="Home &amp; Kitchen"> <p>Home &amp; Kitchen</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/health-beauty" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/5-300x300.jpg" alt="Health &amp; Beauty"> <p>Health &amp; Beauty</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/jewelry-watch" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/6-300x300.jpg" alt="Jewelry &amp; Watch"> <p>Jewelry &amp; Watch</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/technology-toys" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/7-300x300.jpg" alt="Technology Toys"> <p>Technology Toys</p></div></div><div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6"><div class="ps-block--category"><a href="http://127.0.0.1:8000/product-categories/phones" class="ps-block__overlay"></a><img src="http://127.0.0.1:8000/storage/product-categories/8-300x300.jpg" alt="Phones"> <p>Phones</p></div></div></div></div></div></div><div><div class="ps-home-ads mt-40 mb-40"><div class="ps-container"><div class="row"><div class="col-lg-4"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/IZ6WU8KUALYD" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/3.jpg" alt="Homepage middle 1" style="max-width: 100%;"></a></div></div></div> <div class="col-lg-4"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/ILSFJVYFGCPZ" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/4.jpg" alt="Homepage middle 2" style="max-width: 100%;"></a></div></div></div> <div class="col-lg-4"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/ZDOZUZZIU7FT" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/5.jpg" alt="Homepage middle 3" style="max-width: 100%;"></a></div></div></div></div></div></div></div><div><div class="ps-product-list mt-40 mb-40"><div class="ps-container"><div class="ps-section__header"><h3>Featured products</h3> <ul class="ps-section__links"><li><a href="http://127.0.0.1:8000/products">View All</a></li></ul></div> <div class="ps-section__content"><!----> <div data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on" class="ps-carousel--responsive owl-slider owl-carousel owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-729px, 0px, 0px); transition: all 0s ease 0s; width: 2189px;"><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/dual-camera-20mp">
                <img src="http://127.0.0.1:8000/storage/products/1-300x300.jpg" alt="Dual Camera 20MP">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="1" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/1" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/1" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/1" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/dual-camera-20mp">Dual Camera 20MP</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 77.142857142857%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$80.25 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-watches">
                <img src="http://127.0.0.1:8000/storage/products/2-300x300.jpg" alt="Smart Watches">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="2" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/2" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/2" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/2" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-watches">Smart Watches</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 56.666666666667%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$40.50 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/beat-headphone">
                <img src="http://127.0.0.1:8000/storage/products/3-300x300.jpg" alt="Beat Headphone">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #ec2434">Hot</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="3" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/3" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/3" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/3" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/beat-headphone">Beat Headphone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 48.571428571429%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$20.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/red-black-headphone">
                <img src="http://127.0.0.1:8000/storage/products/4-300x300.jpg" alt="Red &amp; Black Headphone">
            </a>
                                                            <div class="ps-product__badge">-14%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="4" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/4" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/4" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/4" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/red-black-headphone">Red &amp; Black Headphone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 55%"></div>
                        </div>
                        <span class="rating_num">(4)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$486.76  <del>$566.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-watch-external">
                <img src="http://127.0.0.1:8000/storage/products/5-300x300.jpg" alt="Smart Watch External">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="5" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/5" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/5" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/5" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/dianna-price">Dianna Price</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-watch-external">Smart Watch External</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 55%"></div>
                        </div>
                        <span class="rating_num">(4)</span>
                    </div>
                            
                <p class="ps-product__price ">$730.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/nikon-hd-camera">
                <img src="http://127.0.0.1:8000/storage/products/6-300x300.jpg" alt="Nikon HD camera">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #00c9a7">New</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="6" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/6" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/6" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/6" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/nikon-hd-camera">Nikon HD camera</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 48.571428571429%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$480.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/audio-equipment">
                <img src="http://127.0.0.1:8000/storage/products/7-300x300.jpg" alt="Audio Equipment">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="7" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/7" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/7" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/7" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/daisy-tillman">Daisy Tillman</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/audio-equipment">Audio Equipment</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 50%"></div>
                        </div>
                        <span class="rating_num">(2)</span>
                    </div>
                            
                <p class="ps-product__price ">$540.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-televisions">
                <img src="http://127.0.0.1:8000/storage/products/8-300x300.jpg" alt="Smart Televisions">
            </a>
                                                            <div class="ps-product__badge">-26%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="8" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/8" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/8" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/8" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-televisions">Smart Televisions</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(1)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$804.46  <del>$1,102.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/samsung-smart-phone">
                <img src="http://127.0.0.1:8000/storage/products/9-300x300.jpg" alt="Samsung Smart Phone">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #00c9a7">New</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="9" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/9" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/9" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/9" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/amie-ohara">Amie O'Hara</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/samsung-smart-phone">Samsung Smart Phone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 46.666666666667%"></div>
                        </div>
                        <span class="rating_num">(3)</span>
                    </div>
                            
                <p class="ps-product__price ">$564.00 </p>
                
            </div>
        </div>
    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div></div></div></div></div><div><div class="ps-home-ads mt-40 mb-40"><div class="ps-container"><div class="row"><div class="col-lg-6"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/Q9YDUIC9HSWS" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/6.jpg" alt="Homepage big 1" style="max-width: 100%;"></a></div></div></div> <div class="col-lg-6"><div class="ps-collection"><div><a href="http://127.0.0.1:8000/ads-click/IZ6WU8KUALYE" target="_blank"><img src="http://127.0.0.1:8000/storage/promotion/9.jpg" alt="Homepage big 2" style="max-width: 100%;"></a></div></div></div></div></div></div></div><div><div class="ps-product-list mb-60"><div class="ps-container"><div class="ps-section__header"><h3>Exclusive Products</h3> <ul class="ps-section__links"><li><a id="new-arrival-tab" data-toggle="tab" href="#new-arrival" role="tab" aria-controls="new-arrival" aria-selected="true" class="active">New Arrival</a></li><li><a id="best-sellers-tab" data-toggle="tab" href="#best-sellers" role="tab" aria-controls="best-sellers" aria-selected="true" class="">Best Sellers</a></li><li><a id="special-offer-tab" data-toggle="tab" href="#special-offer" role="tab" aria-controls="special-offer" aria-selected="true" class="">Special Offer</a></li> <li><a href="http://127.0.0.1:8000/products">View All</a></li></ul></div> <div class="ps-section__content"><!----> <div id="new-arrival" role="tabpanel" aria-labelledby="new-arrival-tab" class="tab-pane fade show active"><div data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on" class="ps-carousel--nav owl-slider owl-carousel owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1216px;"><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/beat-headphone">
                <img src="http://127.0.0.1:8000/storage/products/3-300x300.jpg" alt="Beat Headphone">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #ec2434">Hot</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="3" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/3" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/3" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/3" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/beat-headphone">Beat Headphone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 48.57142%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$20.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/bo-play-mini-bluetooth-speaker">
                <img src="http://127.0.0.1:8000/storage/products/14-300x300.jpg" alt="B&amp;O Play Mini Bluetooth Speaker">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="14" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/14" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/14" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/14" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/daisy-tillman">Daisy Tillman</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/bo-play-mini-bluetooth-speaker">B&amp;O Play Mini Bluetooth Speaker</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 56%"></div>
                        </div>
                        <span class="rating_num">(5)</span>
                    </div>
                            
                <p class="ps-product__price ">$535.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/apple-macbook-air-retina-12-inch-laptop">
                <img src="http://127.0.0.1:8000/storage/products/16-300x300.jpg" alt="Apple MacBook Air Retina 12-Inch Laptop">
            </a>
                                                            <div class="ps-product__badge">-24%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="16" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/16" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/16" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/16" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/amie-ohara">Amie O'Hara</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/apple-macbook-air-retina-12-inch-laptop">Apple MacBook Air Retina 12-Inch Laptop</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(5)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$456.00  <del>$600.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/aveeno-moisturizing-body-shower-450ml">
                <img src="http://127.0.0.1:8000/storage/products/18-300x300.jpg" alt="Aveeno Moisturizing Body Shower 450ml">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #00c9a7">New</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="18" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/18" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/18" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/18" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/aveeno-moisturizing-body-shower-450ml">Aveeno Moisturizing Body Shower 450ml</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 30%"></div>
                        </div>
                        <span class="rating_num">(2)</span>
                    </div>
                            
                <p class="ps-product__price ">$1,270.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/nyx-beauty-couton-pallete-makeup-12">
                <img src="http://127.0.0.1:8000/storage/products/19-300x300.jpg" alt="NYX Beauty Couton Pallete Makeup 12">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="19" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/19" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/19" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/19" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/dianna-price">Dianna Price</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/nyx-beauty-couton-pallete-makeup-12">NYX Beauty Couton Pallete Makeup 12</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 43.33334%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$1,199.00 </p>
                
            </div>
        </div>
    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="icon-chevron-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div></div></div></div></div></div><div><div class="ps-product-list"><div class="ps-container"><div class="ps-section__header"><h3>Computer &amp; Technologies</h3> <ul class="ps-section__links"><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Computer &amp; Tablets</a></li><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Laptop</a></li><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Monitors</a></li> <li><a href="http://127.0.0.1:8000/product-categories/computer-technologies">View All</a></li></ul></div> <div class="ps-section__content"><!----> <div role="tabpanel" aria-labelledby="undefined-tab" class="tab-pane fade show active"><div data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on" class="ps-carousel--nav owl-slider owl-carousel owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2432px;"><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/dual-camera-20mp">
                <img src="http://127.0.0.1:8000/storage/products/1-300x300.jpg" alt="Dual Camera 20MP">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="1" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/1" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/1" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/1" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/dual-camera-20mp">Dual Camera 20MP</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 77.14286%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$80.25 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-watch-external">
                <img src="http://127.0.0.1:8000/storage/products/5-300x300.jpg" alt="Smart Watch External">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="5" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/5" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/5" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/5" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/dianna-price">Dianna Price</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-watch-external">Smart Watch External</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 55%"></div>
                        </div>
                        <span class="rating_num">(4)</span>
                    </div>
                            
                <p class="ps-product__price ">$730.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/samsung-gear-vr-virtual-reality-headset">
                <img src="http://127.0.0.1:8000/storage/products/17-300x300.jpg" alt="Samsung Gear VR Virtual Reality Headset">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="17" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/17" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/17" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/17" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/dianna-price">Dianna Price</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/samsung-gear-vr-virtual-reality-headset">Samsung Gear VR Virtual Reality Headset</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(3)</span>
                    </div>
                            
                <p class="ps-product__price ">$525.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/aveeno-moisturizing-body-shower-450ml">
                <img src="http://127.0.0.1:8000/storage/products/18-300x300.jpg" alt="Aveeno Moisturizing Body Shower 450ml">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #00c9a7">New</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="18" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/18" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/18" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/18" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/aveeno-moisturizing-body-shower-450ml">Aveeno Moisturizing Body Shower 450ml</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 30%"></div>
                        </div>
                        <span class="rating_num">(2)</span>
                    </div>
                            
                <p class="ps-product__price ">$1,270.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/mvmth-classical-leather-watch-in-black">
                <img src="http://127.0.0.1:8000/storage/products/21-300x300.jpg" alt="MVMTH Classical Leather Watch In Black">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #ec2434">Hot</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="21" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/21" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/21" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/21" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/amie-ohara">Amie O'Hara</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/mvmth-classical-leather-watch-in-black">MVMTH Classical Leather Watch In Black</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 56%"></div>
                        </div>
                        <span class="rating_num">(5)</span>
                    </div>
                            
                <p class="ps-product__price ">$607.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/baxter-care-hair-kit-for-bearded-mens">
                <img src="http://127.0.0.1:8000/storage/products/22-300x300.jpg" alt="Baxter Care Hair Kit For Bearded Mens">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="22" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/22" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/22" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/22" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/dianna-price">Dianna Price</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/baxter-care-hair-kit-for-bearded-mens">Baxter Care Hair Kit For Bearded Mens</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 86.66666%"></div>
                        </div>
                        <span class="rating_num">(3)</span>
                    </div>
                            
                <p class="ps-product__price ">$691.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/ciate-palemore-lipstick-bold-red-color">
                <img src="http://127.0.0.1:8000/storage/products/23-300x300.jpg" alt="Ciate Palemore Lipstick Bold Red Color">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="23" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/23" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/23" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/23" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/ciate-palemore-lipstick-bold-red-color">Ciate Palemore Lipstick Bold Red Color</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 90%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$717.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-televisions">
                <img src="http://127.0.0.1:8000/storage/products/8-300x300.jpg" alt="Smart Televisions">
            </a>
                                                            <div class="ps-product__badge">-26%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="8" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/8" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/8" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/8" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-televisions">Smart Televisions</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(1)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$804.46  <del>$1,102.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/samsung-smart-phone">
                <img src="http://127.0.0.1:8000/storage/products/9-300x300.jpg" alt="Samsung Smart Phone">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #00c9a7">New</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="9" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/9" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/9" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/9" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/amie-ohara">Amie O'Hara</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/samsung-smart-phone">Samsung Smart Phone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 46.66666%"></div>
                        </div>
                        <span class="rating_num">(3)</span>
                    </div>
                            
                <p class="ps-product__price ">$564.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/xbox-one-wireless-controller-black-color">
                <img src="http://127.0.0.1:8000/storage/products/11-300x300.jpg" alt="Xbox One Wireless Controller Black Color">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="11" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/11" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/11" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/11" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/xbox-one-wireless-controller-black-color">Xbox One Wireless Controller Black Color</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 83.33334%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$1,195.00 </p>
                
            </div>
        </div>
    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div></div></div></div></div></div><div><div class="ps-download-app"><div class="ps-container"><div class="ps-block--download-app"><div class="container"><div class="row"><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 "><div class="ps-block__thumbnail"><img src="http://127.0.0.1:8000/storage/general/app.png" alt="screenshot"></div></div> <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 "><div class="ps-block__content"><h3>Download Martfury App Now!</h3> <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone.</p> <form action="http://127.0.0.1:8000/ajax/send-download-app-links" method="post" class="ps-form--download-app"><input type="hidden" name="_token" value="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ"> <div class="form-group--nest"><input type="email" name="email" placeholder="Email Address" class="form-control"> <button type="submit" class="ps-btn">Subscribe</button></div></form> <p class="download-link"><a href="https://www.appstore.com"><img src="http://127.0.0.1:8000/themes/martfury/img/google-play.png" alt="Google Play"></a> <a href="https://play.google.com/store"><img src="http://127.0.0.1:8000/themes/martfury/img/app-store.png" alt="App Store"></a></p></div></div></div></div></div></div></div></div><div><div class="ps-product-list"><div class="ps-container"><div class="ps-section__header"><h3>Networking</h3> <ul class="ps-section__links"><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Drive &amp; Storages</a></li><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Gaming Laptop</a></li><li><a id="undefined-tab" data-toggle="tab" href="#undefined" role="tab" aria-selected="true" class="">Security &amp; Protection</a></li> <li><a href="http://127.0.0.1:8000/product-categories/networking">View All</a></li></ul></div> <div class="ps-section__content"><!----> <div role="tabpanel" aria-labelledby="undefined-tab" class="tab-pane fade show active"><div data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on" class="ps-carousel--nav owl-slider owl-carousel owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2432px;"><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/dual-camera-20mp">
                <img src="http://127.0.0.1:8000/storage/products/1-300x300.jpg" alt="Dual Camera 20MP">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="1" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/1" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/1" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/1" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/dual-camera-20mp">Dual Camera 20MP</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 77.14286%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$80.25 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/beat-headphone">
                <img src="http://127.0.0.1:8000/storage/products/3-300x300.jpg" alt="Beat Headphone">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #ec2434">Hot</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="3" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/3" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/3" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/3" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/beat-headphone">Beat Headphone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 48.57142%"></div>
                        </div>
                        <span class="rating_num">(7)</span>
                    </div>
                            
                <p class="ps-product__price ">$20.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/red-black-headphone">
                <img src="http://127.0.0.1:8000/storage/products/4-300x300.jpg" alt="Red &amp; Black Headphone">
            </a>
                                                            <div class="ps-product__badge">-14%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="4" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/4" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/4" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/4" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/red-black-headphone">Red &amp; Black Headphone</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 55%"></div>
                        </div>
                        <span class="rating_num">(4)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$486.76  <del>$566.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-televisions">
                <img src="http://127.0.0.1:8000/storage/products/8-300x300.jpg" alt="Smart Televisions">
            </a>
                                                            <div class="ps-product__badge">-26%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="8" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/8" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/8" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/8" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-televisions">Smart Televisions</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(1)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$804.46  <del>$1,102.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/xbox-one-wireless-controller-black-color">
                <img src="http://127.0.0.1:8000/storage/products/11-300x300.jpg" alt="Xbox One Wireless Controller Black Color">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="11" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/11" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/11" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/11" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/nya-jast">Nya Jast</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/xbox-one-wireless-controller-black-color">Xbox One Wireless Controller Black Color</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 83.33334%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$1,195.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item active" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/epsion-plaster-printer">
                <img src="http://127.0.0.1:8000/storage/products/12-300x300.jpg" alt="EPSION Plaster Printer">
            </a>
                                                            <span class="ps-product__badge" style="background-color: #ec2434">Hot</span>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="12" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/12" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/12" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/12" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/epsion-plaster-printer">EPSION Plaster Printer</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(1)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$389.90  <del>$557.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/bo-play-mini-bluetooth-speaker">
                <img src="http://127.0.0.1:8000/storage/products/14-300x300.jpg" alt="B&amp;O Play Mini Bluetooth Speaker">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="14" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/14" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/14" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/14" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/daisy-tillman">Daisy Tillman</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/bo-play-mini-bluetooth-speaker">B&amp;O Play Mini Bluetooth Speaker</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 56%"></div>
                        </div>
                        <span class="rating_num">(5)</span>
                    </div>
                            
                <p class="ps-product__price ">$535.00 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/nyx-beauty-couton-pallete-makeup-12">
                <img src="http://127.0.0.1:8000/storage/products/20-300x300.jpg" alt="NYX Beauty Couton Pallete Makeup 12">
            </a>
                                                            <div class="ps-product__badge">-14%</div>
                                                <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="20" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/20" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/20" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/20" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/nyx-beauty-couton-pallete-makeup-12">NYX Beauty Couton Pallete Makeup 12</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 60%"></div>
                        </div>
                        <span class="rating_num">(5)</span>
                    </div>
                            
                <p class="ps-product__price  sale ">$620.06  <del>$721.00 </del> </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/smart-watches">
                <img src="http://127.0.0.1:8000/storage/products/2-300x300.jpg" alt="Smart Watches">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="2" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/2" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/2" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/2" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/ally-treutel-iv">Ally Treutel IV</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/smart-watches">Smart Watches</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 56.66666%"></div>
                        </div>
                        <span class="rating_num">(6)</span>
                    </div>
                            
                <p class="ps-product__price ">$40.50 </p>
                
            </div>
        </div>
    </div></div><div class="owl-item" style="width: 243.2px;"><div class="ps-product"><div class="ps-product__thumbnail">
            <a href="http://127.0.0.1:8000/products/audio-equipment">
                <img src="http://127.0.0.1:8000/storage/products/7-300x300.jpg" alt="Audio Equipment">
            </a>
                                                                    <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="7" href="#" data-url="http://127.0.0.1:8000/cart/add-to-cart" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a class="js-quick-view-button" href="#" data-url="http://127.0.0.1:8000/ajax/quick-view/7" title="Quick View"><i class="icon-eye"></i></a></li>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="http://127.0.0.1:8000/wishlist/7" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                <li><a class="js-add-to-compare-button" href="#" data-url="http://127.0.0.1:8000/compare/7" title="Compare"><i class="icon-chart-bars"></i></a></li>
            </ul>
        </div>
        <div class="ps-product__container">
                        <a class="ps-product__vendor" href="http://127.0.0.1:8000/stores/daisy-tillman">Daisy Tillman</a>
                    <div class="ps-product__content">
                <a class="ps-product__title" href="http://127.0.0.1:8000/products/audio-equipment">Audio Equipment</a>
                                <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: 50%"></div>
                        </div>
                        <span class="rating_num">(2)</span>
                    </div>
                            
                <p class="ps-product__price ">$540.00 </p>
                
            </div>
        </div>
    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div></div></div></div></div></div><div><div class="ps-newsletter mt-40"><div class="ps-container newsletter-form"><form method="post" action="http://127.0.0.1:8000/newsletter/subscribe" class="ps-form--newsletter"><div class="row"><div class="col-xl-5"><div class="ps-form__left"><h3>Join Our Newsletter Now</h3> <p>Subscribe to get information about products and coupons</p></div></div> <div class="col-xl-7"><div class="ps-form__right"><input type="hidden" name="_token" value="iNcLolkQlbMNtuLU0AaffR2vovEFrVtBdj3fIIWJ"> <div class="form-group--nest"><input name="email" type="email" placeholder="Email address" class="form-control"> <button type="submit" class="ps-btn">Subscribe</button></div></div></div></div></form></div></div></div></div>
    
</div>


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