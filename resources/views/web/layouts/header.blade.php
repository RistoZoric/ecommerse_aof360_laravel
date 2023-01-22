<!-- Header -->

<header class="header">

        <div class="middle header__middle bg--header__middle pt-35 pb-35 header-middle-two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-md-4 col-sm-2">
                            <div class="logo" style="display: flex; justify-content:center">
                            <a class="logo__link" href="{{route('home')}}"><img src="{{ asset('storages/photos/1/logo.png') }}" alt=""  style="width:100px;height:60px"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block text-center">
                            <div class="main-menu main-menu2">
                                <nav id="mobile-menu">
                                    <ul>
                                    <li><a class="cod__gray-color" href="{{route('home')}}">Home</a></li>
                                        <li><a class="cod__gray-color" href="{{route('product-grids')}}">Electronics <span class="offer2">Hot</span></a></li>
                                        <li><a class="cod__gray-color" href="{{route('products','product_type=trending')}}">Trending Item</a></li>
                                        <li><a class="cod__gray-color" href="{{route('product-grids')}}">Products <span class="offer2 new">New</span></a></li>

                                        <li class="dropdown-icon">
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('about-us')}}">About</a>
                                                </li>
                                                <li>
                                                <a href="{{route('contact')}}">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('blog')}}">Blog</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-8 col-sm-10">
                            <div class="user-access2" style="display: flex; justify-content:center">
                                <ul class="list-inline" style="display: flex;">
                                    <li>
                                        <div class="user-access--box">
                                            <div class="user-access--icon uacont">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </div>
                                            <div class="user-access--content ">
                                                <h5>Support</h5>
                                                <span>+1 (000) 000 0000</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-access--box">
                                            <div class="user-access--icon lnuser">
                                                <span class="lnr lnr-user "></span>
                                            </div>
                                            <div class="user-access--content">
                                                <!-- <h5>Account</h5>
                                                <a>Login / Register</a> -->
                                                <ul class="list-inline">
                                        <li>
                                            
                                        @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">Admin Dashboard</a></li>
                                @else 
                                <li class="nav--top__dropdown position-relative"><a class=" lang--top__link dove__gray-color text-capitalize position-relative" href="#">
                                    <!-- <i class="fal fa-user-plus"></i> -->
                                  
                                   Hello, {{Auth::user()->name}}
                                   
                                    <span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="dropdown-show newOne">
                                        <li><a class=" text-capitalize" href="{{route('user-profile')}}">Profile</a></li>
                                        <li><a class=" text-capitalize" href="{{route('user.order.index')}}">Order</a></li>
                                        <!-- <li><a class=" text-capitalize" href="{{route('order.track')}}">Tracking</a></li> -->
                                        <li><a class=" text-capitalize" href="{{route('user.productreview.index')}}">Product Review</a></li>
                                        <!-- <li><a class=" text-capitalize" href="{{route('user.post-comment.index')}}">Comments</a></li> -->
                                        <li><a class=" text-capitalize" href="{{route('wishlist')}}">WishList</a></li>
                                        <li><a class=" text-capitalize" href="{{route('user.change.password.form')}}">Change Password</a></li>
                                        <li><a class=" text-capitalize" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif

                            @else
                                <li><i class="ti-power-off"></i>
                                  <a href="{{route('login.form')}}">Login </a> 
                               </li>
                            @endauth
                                        </li>
                                        
                                    </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom header__bottom grenadier-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-10">
                            <div class="dept__menu position-relative">
                                <nav>
                                    <ul class="dept__menu--list dept__menu--list2">
                                        <li><a class="dept__menu-mlink dept__menu-mlink2 f-900 cod__gray-color" href="#">Shop By Category</a>
                                            <ul class="dept__menu--dropdown">
                                            {{Helper::getHeaderCategory()}}
                                                
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7 col-2 d-flex align-items-center">
                            <div class="search--header__middle h2search--header__middle d-none d-lg-block">
                                <form class="search--header__form position-relative" method="POST" action="{{route('product.search')}}">
                                @csrf
                                    <div class="header--search__box">
                                        <input class="header--search__query" type="search" name="search"
                                            placeholder="Search For Products...">
                                        <button class="header--search__btn" type="submit"><i class="icofont-search-2"></i></button>
                                    </div>
                                    <div class="header--search__cate">
                                    <select>
                                        <option >All Category</option>
                                        @foreach(Helper::getAllCategory() as $cat)
                                            <option>{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </form>
                            </div>
                            <div class="cart--header__middle cart--header__two">
                                <div class="cart--header__list cart--header__list2 d-none d-xl-block header">
                                    <ul class="list-inline shopping">
                                        <!-- <li><a href="#"><i class="fal fa-user-plus"></i></a></li> -->
                                        @php 
                                $total_prod=0;
                                $total_amount=0;
                            @endphp
                           @if(session('wishlist'))
                                @foreach(session('wishlist') as $wishlist_items)
                                    @php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    @endphp
                                @endforeach
                           @endif
                <a href="{{route('wishlist')}}"><i class="fal fa-heart"><span class="cart__count">{{Helper::wishlistCount()}}</span></i></a>

                                        @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                        <a href="{{route('wishlist')}}">View Wishlist</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromWishlist() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-trash"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">Cart</a>
                                    </div>
                                </div>
                            @endauth

                                        <!-- <li><a class="mini__cart--link" href="{{route('cart')}}"><i class="fal fa-bags-shopping"><span class="cart__count">{{Helper::cartCount()}}</span></i><span class="cart__amount"></span></a></li> -->
                                        <!-- <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span
                                                        class="cart__count">3</span></i><span class="cart__amount">$
                                                    3550</span></a></li> -->
                                    </ul>
                                </div>
                                <div class="sinlge-bar shopping">
                                <li><a class="mini__cart--link" href="{{route('cart')}}"><i class="fal fa-bags-shopping"><span class="cart__count">{{Helper::cartCount()}}</span></i><span class="cart__amount"></span></a></li>
                                <!-- <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a> -->
                            <!-- Shopping Item -->
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
                                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-trash"></i></a>
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
                            <!--/ End Shopping Item -->
                        </div>
                                <!-- <div class="mini__cart--box">
                                    <ul>
                                        <li class="mb-20">
                                            <div class="cart-image">
                                                <a href="#"><img src="img/allproducts/cart__thumb__1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <a href="#" class="title f-400 cod__black-color">Pink JacketS</a>
                                                <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                            </div>
                                            <div class="del-button">
                                                <a href="#"><i class="icofont-close-line"></i></a>
                                            </div>
                                        </li>
                                        <li class="mb-20">
                                            <div class="cart-image">
                                                <a href="#"><img src="img/allproducts/cart__thumb__2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                                <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                            </div>
                                            <div class="del-button">
                                                <a href="#"><i class="icofont-close-line"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="total-text d-flex justify-content-between">
                                                <span class="f-800 cod__black-color">Total Bag </span>
                                                <span class="f-800 cod__black-color">$ 99.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="checkout">Checkout</a>
                                                <a href="#" class="viewcart">View Cart</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- Header end /-->