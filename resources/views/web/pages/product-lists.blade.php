@extends('web.layouts.master')

@section('title','E-SHOP || PRODUCT PAGE')

@section('main-content')
	
  <!-- shop area start -->
  <div class="product shop-page pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="common-sidebar shop-banner-sidebar">
                    <div class="common-cat">
                        <div class="side-title">
                            <h6>Categories</h6>
                        </div>
                        <ul>
                          @php
                            // $category = new Category();
                            $menu=App\Models\Category::getAllParentWithChild();
                          @endphp
                          @if($menu)
                            <li>@foreach($menu as $cat_info)
                                    @if($cat_info->child_cat->count()>0)
                                        <li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a>
                                            <ul>
                                                @foreach($cat_info->child_cat as $sub_menu)
                                                    <li><a href="{{route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>
                                    @endif
                            @endforeach</li>
                            @endif
                            {{-- @foreach(Helper::productCategoryList('products') as $cat)
                                @if($cat->is_parent==1)
                                    <li><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></li>
                                @endif
                            @endforeach --}}
                        </ul>
                    </div>
                    <!-- <div class="slider-range mt-50">
                        <div class="side-title mb-30">
                            <h6>Filter By Price</h6>
                        </div>
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price :</label>
                            <input type="text" id="amount" readonly>
                        </p>
                    </div> -->
                     <div class="side-color mt-45">
                        <div class="side-title">
                            <h6>Brands</h6>
                        </div>
                        <ul class="mt-15">
                          
                        @php
                            $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();
                        @endphp
                        @foreach($brands as $brand)
                            <li><a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a></li>
                        @endforeach
                        
                        </ul>
                    </div>
                    <!-- <div class="side-size mt-50">
                        <div class="side-title">
                            <h6>Size</h6>
                        </div>
                        <ul class="mt-15">
                            <li>
                                <a href="#">Small (2)</a>
                                <a href="#">Large (53)</a>
                            </li>
                            <li>
                                <a href="#">Extra Large (16)</a>
                                <a href="#">Medium (20)</a>
                            </li>
                            <li><a href="#">Extra Small (2)</a></li>
                            <li><a href="#">Huge (53)</a></li>
                        </ul>
                    </div>
                    <div class="common-tag mt-50">
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
                    </div>  -->
                </div>
            </div>

            <div class="col-lg-9 order-1 order-lg-2">
                <div class="border-b">
                    <div class="row">
                        <div class="col-lg-5 col-md-4">
                            <div class="shop-bar d-flex align-items-center">
                                <h4 class="f-800 cod__black-color">Shop</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop.</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <!-- <div class="bar-wrapper">
                                <div class="select-text">
                                    <span>Showing 1–11 of 23 Results</span>
                                </div>
                                <div class="shop-select">
                                    <select name="select" id="shop-select-one">
                                        <option value="1">Deafult Sorting</option>
                                        <option value="2">Deafult Sorting</option>
                                        <option value="3">Deafult Sorting</option>
                                        <option value="4">Deafult Sorting</option>
                                    </select>
                                </div>
                                <div class="shop-select">
                                    <select name="select" id="shop-select-two">
                                        <option value="1">Categories</option>
                                        <option value="2">Categories 01</option>
                                        <option value="3">Categories 02</option>
                                        <option value="4">Categories 03</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
          
                <div class="row mt-30">
                 
                        @if(!$products->isEmpty())
                        
                            @foreach($products as $product)
                            
                            @php if(is_object($product)):
                                
                            @endphp
                            <div class="product__single col-lg-3">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="{{route('product-detail',$product->slug)}}" class="img-wrapper">
                                            <img class="img" src="{{$product->photo}}" alt="{{$product->title}}">
                                            <img class="img secondary-img" src="{{$product->photoone}}" alt="{{$product->title}}">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        @php 
                                        if($product->child_cat_id != ""){
                                            $catid = $product->child_cat_id;
                                        }else{
                                            $catid = $product->cat_id;
                                        }
                                        @endphp
                                        <span class="cate-name">{{ \App\Models\Category::where(['id' => $catid])->pluck('title')->first() }}</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">${{$product->price}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="{{route('add-to-wishlist',$product->slug)}}"><span class="lnr lnr-heart"></span></a>
                                    <!-- <a href="#"><span class="lnr lnr-eye"></span></a> -->
                                    <a href="{{route('add-to-cart',$product->slug)}}"><span class="lnr lnr-cart"></span></a>
                                    <!-- <a href="#"><span class="lnr lnr-sync"></span></a> -->
                                </div>
                            </div>
                            @php endif; @endphp  
                            @endforeach
                        
                        @else
                        <h3>No Products Found</h3>
                        @endif
                  
                </div>
                @if(!$products->isEmpty())
                <div class="row mt-10">
                    <div class="col-sm-12">
                        <div class="common-pagination">
                            <nav aria-label="Page navigation example">
                                
                                <!-- <ul class="pagination">
                                
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i> Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-angle-right"></i></a></li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- shop area end -->

    <!-- Subscribe -->
    <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img src="{{asset('web/img/icon/notification-icon.png')}}" alt="notification"></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                    free delivery.</p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                            <button class="btn newsletter--button" type="button"><img src="{{asset('web/img/icon/plan-icon.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

	
@endsection
@push ('styles')
<style>
	 .pagination{
        display:inline-flex;
    }
	.filter_button{
        /* height:20px; */
        text-align: center;
        background:#F7941D;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						}); 
                    }
                }
            })
        });
	</script> --}}
	<script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>

@endpush