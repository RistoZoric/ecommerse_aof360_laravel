<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Auth::routes(['register'=>false]);

Route::get('user/login','FrontendController@login')->name('login.form');
Route::post('user/login','FrontendController@loginSubmit')->name('login.submit');
Route::get('user/logout','FrontendController@logout')->name('user.logout');

Route::get('user/register','FrontendController@register')->name('register.form');
Route::post('user/register','FrontendController@registerSubmit')->name('register.submit');
// Reset password
Route::post('password-reset', 'FrontendController@showResetForm')->name('password.reset'); 
// Socialite 
Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');

Route::get('/','FrontendController@home')->name('home');

// Frontend Routes 
Route::get('/home', 'FrontendController@index');
Route::get('/about-us','FrontendController@aboutUs')->name('about-us');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/products','FrontendController@webshop')->name('products');

// Temporary routes for template implementation
Route::get('/product-detailsone','FrontendController@productdetailsone')->name('product-detailsone');
Route::get('/product-detailstwo','FrontendController@productdetailstwo')->name('product-detailstwo');
Route::get('/blog-details','FrontendController@blogdetails')->name('blog-details');
Route::get('/blog-sidebar','FrontendController@blogsidebar')->name('blog-sidebar');

// Temporary routes for template implementation ends here
 
Route::post('/contact/message','MessageController@store')->name('contact.store');
Route::get('product-detail/{slug}','FrontendController@productDetail')->name('product-detail');
Route::post('/product/search','FrontendController@productSearch')->name('product.search');
Route::get('/product-cat/{slug}','FrontendController@productCat')->name('product-cat');
Route::get('/product-sub-cat/{slug}/{sub_slug}','FrontendController@productSubCat')->name('product-sub-cat');
Route::get('/product-brand/{slug}','FrontendController@productBrand')->name('product-brand');
// Cart section
Route::get('/add-to-cart/{slug}','CartController@addToCart')->name('add-to-cart')->middleware('user');
Route::post('/add-to-cart','CartController@singleAddToCart')->name('single-add-to-cart')->middleware('user');
Route::get('cart-delete/{id}','CartController@cartDelete')->name('cart-delete');
Route::post('cart-update','CartController@cartUpdate')->name('cart.update');

Route::get('/cart',function(){
    return view('web.pages.cart');
})->name('cart');
Route::get('/checkout','CartController@checkout')->name('checkout')->middleware('user');
// Wishlist
Route::get('/wishlist',function(){
    return view('web.pages.wishlist');
})->name('wishlist');
Route::get('/wishlist/{slug}','WishlistController@wishlist')->name('add-to-wishlist')->middleware('user');
Route::get('wishlist-delete/{id}','WishlistController@wishlistDelete')->name('wishlist-delete');
Route::post('cart/order','OrderController@store')->name('cart.order');
Route::get('order/pdf/{id}','OrderController@pdf')->name('order.pdf');
Route::get('/income','OrderController@incomeChart')->name('product.order.income');
// Route::get('/user/chart','AdminController@userPieChart')->name('user.piechart');
Route::get('/product-grids','FrontendController@productGrids')->name('product-grids');
Route::get('/product-lists','FrontendController@productLists')->name('product-lists');
Route::match(['get','post'],'/filter','FrontendController@productFilter')->name('shop.filter');
// Order Track
Route::get('/product/track','OrderController@orderTrack')->name('order.track');
Route::post('product/track/order','OrderController@productTrackOrder')->name('product.track.order');
// Blog
Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/blog-detail/{slug}','FrontendController@blogDetail')->name('blog.detail');
Route::get('/blog/search','FrontendController@blogSearch')->name('blog.search');
Route::post('/blog/filter','FrontendController@blogFilter')->name('blog.filter');
Route::get('blog-cat/{slug}','FrontendController@blogByCategory')->name('blog.category');
Route::get('blog-tag/{slug}','FrontendController@blogByTag')->name('blog.tag');

//custom
Route::get('blog-category','FrontendController@blogCategory')->name('blog.category');
Route::get('/blog/{slug}','FrontendController@show_single_blog')->name('blog-single');
 // Route::any('/post/{slug}','BlogSingleController@show_single_blog')->name('custom-single.show_single_blog');

 Route::post('check-pincode','ProductController@checkPincode');



// NewsLetter
Route::post('/subscribe','FrontendController@subscribe')->name('subscribe');

// Product Review
Route::resource('/review','ProductReviewController');
Route::post('product/{slug}/review','ProductReviewController@store')->name('review.store');

// Post Comment 
Route::post('post/{slug}/comment','PostCommentController@store')->name('post-comment.store');
Route::resource('/comment','PostCommentController');
// Coupon
Route::post('/coupon-store','CouponController@couponStore')->name('coupon-store');
// Payment
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


 
// Backend section start
 
Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/file-manager',function(){
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users','UsersController');
    // Banner
    Route::resource('banner','BannerController'); 

  // About page
//   Route::resource('about','AboutPageController'); 


    // Brand
    Route::resource('brand','BrandController');
    // Profile
    Route::get('/profile','AdminController@profile')->name('admin-profile');
    Route::post('/profile/{id}','AdminController@profileUpdate')->name('profile-update');
    // Category
    Route::resource('/category','CategoryController');
    // Product
    Route::resource('/product','ProductController');
    Route::post('/attrvalues','ProductController@getattributes')->name('attrvalues');
    Route::post('/specvalues','ProductController@getspecifications')->name('specvalues');
    // Ajax for sub category
    Route::post('/category/{id}/child','CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category','PostCategoryController');
    // Post tag
    Route::resource('/post-tag','PostTagController');
    // Post
    Route::resource('/post','PostController');
    // Message
    Route::resource('/message','MessageController');
    Route::get('/message/five','MessageController@messageFive')->name('messages.five');

    // Order
    Route::resource('/order','OrderController');
    // Shipping
    Route::resource('/shipping','ShippingController');
    // Coupon
    Route::resource('/coupon','CouponController');
    // Settings
    Route::get('settings','AdminController@settings')->name('settings');
    Route::post('setting/update','AdminController@settingsUpdate')->name('settings.update');

    // Notification
    Route::get('/notification/{id}','NotificationController@show')->name('admin.notification');
    Route::get('/notifications','NotificationController@index')->name('all.notification');
    Route::delete('/notification/{id}','NotificationController@delete')->name('notification.delete');
    // Password Change
    Route::get('change-password', 'AdminController@changePassword')->name('change.password.form');
    Route::post('change-password', 'AdminController@changPasswordStore')->name('change.password');

    ######## New Admin Routes Added By Shashikanta #############
    // Product Attributes
    Route::resource('attributes','AttributeController'); 
    Route::resource('specifications','SpecificationController');
    Route::resource('campaigns','CampaignController');
    Route::resource('product-types','ProductTypeController');

    Route::get('campcategory','CampaignController@category')->name('campcategory');
    Route::get('createcampcat','CampaignController@createcategory')->name('createcampcat');
    Route::post('storecampcat','CampaignController@storecategory')->name('storecampcat');
    Route::get('editcampcat/{id}','CampaignController@editcategory')->name('editcampcat');
    Route::post('updatecampcat/{id}','CampaignController@updatecategory')->name('updatecampcat');
    Route::get('deletecampcat/{id}','CampaignController@destroycategory')->name('deletecampcat');

    Route::get('new-attrvalue','AttributeController@AddValue')->name('new-attrvalue');
    Route::get('view-attrvalue/{id}','AttributeController@ViewAttrvalue')->name('view-attrvalue');
    Route::post('attrvalue-insert','AttributeController@AttrvalueInsert')->name('attrvalue-insert');
    Route::get('edit-attrvalue/{id}','AttributeController@EditAttrvalue')->name('edit-attrvalue');
    Route::post('attrvalue_update','AttributeController@AttrvalueUpdate')->name('attrvalue_update');
    Route::get('delete-attrvalue/{id}','AttributeController@AttrvalueDestroy')->name('delete-attrvalue');


    // Ecommerce Setups
    Route::get('ecommerce-general','EcommerceController@general')->name('ecommerce-general');
    Route::get('ecommerce-shipping','EcommerceController@shipping')->name('ecommerce-shipping');
    Route::get('ecommerce-taxes','EcommerceController@taxes')->name('ecommerce-taxes');
    Route::get('ecommerce-payments','EcommerceController@payments')->name('ecommerce-payments');

    // Route::get('pages-about','PageController@about')->name('pages-about');
    Route::get('pages-contact','PageController@contact')->name('pages-contact');
    Route::get('pages-terms','PageController@terms')->name('pages-terms');
    Route::get('pages-payments','PageController@payments')->name('pages-payments');
    Route::get('pages-refunds','PageController@refunds')->name('pages-refunds');

    Route::get('pages-about','AboutPageController@index')->name('pages-about');

    // Route::get('pages-front','AboutPageController@store')->name('pages-front');
    Route::get('about-store','AboutPageController@store')->name('about-store');
    Route::get('pages-about-create','AboutPageController@create')->name('pages-about-create');

    // blog
    Route::get('pages-blog','BlogController@index')->name('pages-blog');
    Route::get('blog-store','BlogController@store')->name('blog-store');
    Route::get('pages-blog-create','BlogController@create')->name('pages-blog-create');

      // blog category
      Route::get('pages-blog-category','BlogCategoryController@index')->name('pages-blog-category');
      Route::get('blog-category-store','BlogCategoryController@store')->name('blog-category-store');
      Route::get('pages-blog-category-create','BlogCategoryController@create')->name('pages-blog-category-create');
    
});










// User section start
Route::group(['prefix'=>'/user','middleware'=>['user']],function(){
    Route::get('/','HomeController@index')->name('user');
     // Profile
     Route::get('/profile','HomeController@profile')->name('user-profile');
     Route::post('/profile/{id}','HomeController@profileUpdate')->name('user-profile-update');
    //  Order
    Route::get('/order',"HomeController@orderIndex")->name('user.order.index');
    Route::get('/order/show/{id}',"HomeController@orderShow")->name('user.order.show');
    Route::get('/order/view/{id}',"HomeController@orderView")->name('order.view');
    Route::delete('/order/delete/{id}','HomeController@userOrderDelete')->name('user.order.delete');

    Route::get('/order/cancel/{id}','HomeController@userOrderCancel')->name('user.order.cancel');
//  Tracking
    //Route::get('/order',"HomeController@orderIndex")->name('user.order.index');

    // Product Review
    Route::get('/user-review','HomeController@productReviewIndex')->name('user.productreview.index');
    Route::delete('/user-review/delete/{id}','HomeController@productReviewDelete')->name('user.productreview.delete');
    Route::get('/user-review/edit/{id}','HomeController@productReviewEdit')->name('user.productreview.edit');
    Route::patch('/user-review/update/{id}','HomeController@productReviewUpdate')->name('user.productreview.update');
    
    // Post comment
    Route::get('user-post/comment','HomeController@userComment')->name('user.post-comment.index');
    Route::delete('user-post/comment/delete/{id}','HomeController@userCommentDelete')->name('user.post-comment.delete');
    Route::get('user-post/comment/edit/{id}','HomeController@userCommentEdit')->name('user.post-comment.edit');
    Route::patch('user-post/comment/udpate/{id}','HomeController@userCommentUpdate')->name('user.post-comment.update');
    
    // Password Change
    Route::get('change-password', 'HomeController@changePassword')->name('user.change.password.form');
    Route::post('change-password', 'HomeController@changPasswordStore')->name('change.password');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});