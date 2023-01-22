<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')


	<header class="header header--1" data-sticky="true">
         <div class="header__top">
            <div class="ps-container">
               <div class="header__left">
                  <div class="menu--product-categories">
                     <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                     <div class="menu__content" style="">
                        <ul class="menu--dropdown">
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/hot-promotions">
                              <i class="icon-star"></i>
                              Hot Promotions
                              </a>
                           </li>
                           <li class="menu-item-has-children has-mega-menu">
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
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/clothing">
                              <i class="icon-shirt"></i>
                              Clothing
                              </a>
                           </li>
                           <li class="menu-item-has-children has-mega-menu">
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
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/home-kitchen">
                              <i class="icon-lampshade"></i>
                              Home &amp; Kitchen
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/health-beauty">
                              <i class="icon-heart-pulse"></i>
                              Health &amp; Beauty
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/jewelry-watch">
                              <i class="icon-diamond2"></i>
                              Jewelry &amp; Watch
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/technology-toys">
                              <i class="icon-desktop"></i>
                              Technology Toys
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/phones">
                              <i class="icon-smartphone"></i>
                              Phones
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/babies-moms">
                              <i class="icon-baby-bottle"></i>
                              Babies &amp; Moms
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/sport-outdoor">
                              <i class="icon-baseball"></i>
                              Sport &amp; Outdoor
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/books-office">
                              <i class="icon-book2"></i>
                              Books &amp; Office
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/cars-motorcycles">
                              <i class="icon-car-siren"></i>
                              Cars &amp; Motorcycles
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/home-improvements">
                              <i class="icon-wrench"></i>
                              Home Improvements
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <a class="ps-logo" href="http://127.0.0.1:8000"><img src="http://127.0.0.1:8000/storage/photos/1/demo_logo.png" alt="Martfury - Laravel Ecommerce system" height="40"></a>
               </div>
               <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option >All Category</option>
                                @foreach(Helper::getAllCategory() as $cat)
                                    <option>{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <form method="POST" action="{{route('product.search')}}" class="newsletter-inner">
                                @csrf
                                <input name="search" class="size"  placeholder="Search Products Here....." type="search">
                                <button class="btn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
               <div class="header__right">
                  <div class="header__actions">
                     <a class="header__extra btn-compare" href="http://127.0.0.1:8000/compare"><i class="icon-chart-bars"></i><span><i>0</i></span></a>
                     <a class="header__extra btn-wishlist" href="http://127.0.0.1:8000/wishlist"><i class="icon-heart"></i><span><i>{{Helper::wishlistCount()}}</i></span></a>
                     <div class="ps-cart--mini">
                        <a class="header__extra btn-shopping-cart" href="http://127.0.0.1:8000/cart"><i class="icon-bag2"></i><span><i>{{Helper::cartCount()}}</i></span></a>
                        <div class="ps-cart--mobile">
                           <div class="ps-cart__content">
                              <div class="ps-cart__items ps-cart_no_items">
                              @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                                        <a href="{{route('cart')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromCart() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">${{number_format(Helper::totalCartPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            @endauth
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right">
                           <a href="{{route('login.form')}}">Login</a><a href="{{route('register.form')}}">Register</a>
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
                  <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                           {{Helper::getHeaderCategory()}}
                                            </ul>
                                    </div>
                                </div>
                            </nav>
                     <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                     <div class="menu__content" style="">
                     <!--   <ul class="menu--dropdown">
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/hot-promotions">
                              <i class="icon-star"></i>
                              Hot Promotions
                              </a>
                           </li>
                           <li class="menu-item-has-children has-mega-menu">
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
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/clothing">
                              <i class="icon-shirt"></i>
                              Clothing
                              </a>
                           </li>
                           <li class="menu-item-has-children has-mega-menu">
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
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/home-kitchen">
                              <i class="icon-lampshade"></i>
                              Home &amp; Kitchen
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/health-beauty">
                              <i class="icon-heart-pulse"></i>
                              Health &amp; Beauty
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/jewelry-watch">
                              <i class="icon-diamond2"></i>
                              Jewelry &amp; Watch
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/technology-toys">
                              <i class="icon-desktop"></i>
                              Technology Toys
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/phones">
                              <i class="icon-smartphone"></i>
                              Phones
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/babies-moms">
                              <i class="icon-baby-bottle"></i>
                              Babies &amp; Moms
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/sport-outdoor">
                              <i class="icon-baseball"></i>
                              Sport &amp; Outdoor
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/books-office">
                              <i class="icon-book2"></i>
                              Books &amp; Office
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/cars-motorcycles">
                              <i class="icon-car-siren"></i>
                              Cars &amp; Motorcycles
                              </a>
                           </li>
                           <li>
                              <a href="http://127.0.0.1:8000/product-categories/home-improvements">
                              <i class="icon-wrench"></i>
                              Home Improvements
                              </a>
                           </li>
                        </ul>
-->
</div>
                  </div>
               </div>
               <div class="navigation__right">
               <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                         <!--   {{Helper::getHeaderCategory()}}  -->
                                              
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a></li>												
                                              
                                            <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									
                                               
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                 <!-- <ul class="menu">
                    <li class="   current-menu-item "><a href="http://127.0.0.1:8000/">Home</a></li>
                    <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>
                    <li class=""><a href="{{route('product-grids')}}">Products</a></li>												
                                    {{Helper::getHeaderCategory()}}
                    <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									
                            
                     <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                   
                     <li class=" menu-item-has-children   ">
                        <a href="http://127.0.0.1:8000/products">
                        Shop
                        </a>
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/products">
                              All products
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/product-categories/batteries">
                              Products Of Category
                              </a>
                           </li>
                           <li class="  ">
                              <a href="http://127.0.0.1:8000/products/beat-headphone">
                              Product Single
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/stores">
                        Stores
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/blog">
                        Blog
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/faqs">
                        FAQs
                        </a>
                     </li>
                     <li class="  ">
                        <a href="http://127.0.0.1:8000/contact">
                        Contact
                        </a>
                     </li>-->
                  
                  </ul>  
                    <!--  <ul class="nav main-menu menu navbar-nav">
                        <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                        <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>
                        <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a><span class="new">New</span></li>												
                           {{Helper::getHeaderCategory()}}
                        <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									
                           
                        <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                     </ul>-->
                  
                  <ul class="navigation__extra">
                     <!-- <li><a href="http://127.0.0.1:8000/login">Sell On Martfury</a></li> -->
                     <li><a href="http://127.0.0.1:8000/product/track">Track your order</a></li>
                     @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li><i class="ti-user"></i> <a href="{{route('user')}}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">Logout</a></li>

                            @else
                                <li><i class="ti-power-off"></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></li>
                            @endauth
                    <!-- <li>
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
                     </li>-->
                  </ul>
               </div>
            </div>
         </nav>
      </header>

	<!--/ End Header -->
	@yield('main-content')
	
	@include('frontend.layouts.footer')

</body>
</html>