<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Cart;
use App\Models\Brand;
use App\Models\Attribute;
use App\Models\ProductAttribute;
use App\Models\Specification;
use App\Models\ProductSpecification;
use App\Models\CampaignCategory;
use App\Models\ProductReview;
use App\Models\AboutPage;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Pincode;
use App\User;
use Auth;
use Session;
use Newsletter;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
   
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }
 
    public function home(){
         $ids=ProductReview::where('rate','5')->get();
        $revpro=array();
        $trepro=array();
        $poppro=array();
      if(!$ids->isEmpty()){
        
        foreach($ids as $prid){
            
            $productid= $prid->product_id;
           
           // $revpro=Product::where('id',$productid)->get();
            $revpro[]=Product::where('id',$productid)->orderBy('id','DESC')->get();
           // $revpro=(array)$revpro;
            
          }
           
      }
//    print_r($revpro[1]);
 // exit;
        $p_ids=DB::table('product_types')->where('types','Popular')->get();
        if(!$p_ids->isEmpty()){
            foreach($p_ids as $p_id){
            $pro_id= $p_id->product_id;
            $poppro[]=Product::where('id',$pro_id)->orderBy('id','DESC')->get();
            }
        }
        $t_ids=DB::table('product_types')->where('types','Trending')->get();
        if(!$t_ids->isEmpty()){
            foreach($t_ids as $t_id){
            $tre_id= $t_id->product_id;
            $trepro[]=Product::where('id',$tre_id)->orderBy('id','DESC')->get();
            }
        }
        $featured=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->limit(6)->get(); 
        $latest=Product::where('status','active')->orderBy('id','DESC')->limit(10)->get();
        $discounted=Product::where('status','active')->orderBy('id','DESC')->where('discount','>=',1)->limit(10)->get();  
        $posts=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        $banners=Banner::where('status','active')->limit(10)->orderBy('id','DESC')->get(); 
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        $category=DB::table('categories')->where('is_parent',1)->where('status','active')->orderBy('title','ASC')->get();
        $campaigns=DB::table('campaigns')->where('status','active')->orderBy('id','ASC')->get();
        $campaign_categories=DB::table('campaign_categories')->where('status','active')->limit(5)->orderBy('id','ASC')->get();
        
       
        // dd($trepro); exit;

        return view('web.index')
                ->with('featured',$featured)
                ->with('latest',$latest)
                ->with('discounted',$discounted)
                ->with('posts',$posts)
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('category',$category)  
                ->with('revpros',$revpro)
                ->with('poppro',$poppro)
                ->with('campaigns',$campaigns)
                ->with('campaign_categories',$campaign_categories)
                ->with('trepro',$trepro);
            }

       
    public function aboutUs(){
        $about_detail=AboutPage::latest()->paginate(1);
        return view('web.pages.about-us')->with('about_detail',$about_detail);
    }

    public function blog(){
        $blog_detail=Blog::latest()->paginate(5);
        $blog_category=Blogcategory::latest()->paginate(5);
        // dd($blog_category);
        //$blog_detail=Blog::all();
        return view('web.pages.blog')
                                ->with('blog_detail',$blog_detail)
                                ->with('blog_category',$blog_category);

    }

    // public function checkPincode(Request $request){
    //     // $poppro[]=Product::where('id',$pro_id)->orderBy('id','DESC')->get();
    //     // $pincode=Pincode::all();
    //     // dd($pincode);
    //      if($request->isMethod('post')){
    //      $data = $request->all();
    //     //print_r($data);
    //     // echo '<pre>';print_r($data); die;
    //     //$codpincodecount=Pincode::where('pincodes',$data['pincode'])->count();
    //  $codpincodecount = DB::table('cod_pincodes')->where('pincodes',$data['pincode'])->count();
   
    //   if($codpincodecount==0){
    //       echo "This pincode is not available for Delivery";
    //   }else{
    //       echo "This pincode is Available for Delivery";
    //   }
    //   }

    // //   return view('web.pages.check-pincode')->with('pincode',$pincode);
    //   // if($request->isMethod('post')){
    //   //     $data = $request->all();
    //   // //    print_r($data);
    //   // //     echo '<pre>';print_r($data); die;
    //   // $codpincodecount = DB::table('cod_pincodes')->where('pincodes',$data['pincode'])->count();
    //   // dd($codpincodecount);
    //   // if($codpincodecount==0){
    //   //     echo "This pincode is not available for Delivery";
    //   // }else{
    //   //     echo "This pincode is Available for Delivery";
    //   // }
    //   // }
  
    // }  

    public function blogCategory(){
        $blog_category=Blogcategory::latest()->paginate(5);
        //$blog_detail=Blog::all();
        // dd($blog_category);
        return view('web.pages.blog-category')->with('blog_category',$blog_category);
    }

    public function show_single_blog(Request $request){
       $blog_single = Blog::where('slug', $request->slug)->get();
        //$blog_single = Blog::all()->first();
    //    $blog_single = Blog::latest()->paginate(5);
        //$blog_detail=Blog::all();
        // dd($blog_category);
        return view('web.pages.blog-single')->with('blog_single',$blog_single);
    }

    public function contact(){
        return view('web.pages.contact');
    }

    public function form(Request $request){

        $name = $request->input('name');
       $email = $request->input('email');
       $subject = $request->input('subject');
       $decription = $request->input('decription');

        $data = array('name' => $name,'email' => $email,'subject' => $subject,'decription' => $decription);
        $query=Contact::insert($data);
        Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from('chitaranjansahoo073@gmail.com', "Booking details");
            $message->subject("Your booking request has been successfully submitted");
            $message->to('chitaranjansahoo073@gmail.com');
        });
       // return redirect('thanks');
            if(count(Mail::failures()) == 0){
                echo "yes";
            }else{
                echo "noo";
            }
       
    }
    public function webShop(){
        if(isset($_GET['product_type'])){
            $product_type=$_GET['product_type'];
            $poppro[]='';
            $product_ids=DB::table('product_types')->where('types', $product_type)->get();
           
            $all_products=Product::where('status','active')->orderBy('id','DESC')->get();
            $all_feture_product=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->get(); 

            if(!$product_ids->isEmpty()){
                foreach($product_ids as $p_id){
                    $pro_id= $p_id->product_id;
                   $poppro[]=Product::where('id',$pro_id)->orderBy('id','DESC')->get();
                   
                }
            }
            //dd($poppro[1][0]->slug);
            return view('web.pages.products')
                ->with('all_products',$all_products)
                ->with('all_feture_product',$all_feture_product)
                ->with('products_type',$poppro);
        }

      
        //$pros=Product::where('status','active')->orderBy('id','DESC')->get();
        //return view('web.pages.products')->with('poppro',$poppro);
    }

    // Temporary functions for template implementation
    public function productDetailsone(){
        return view('web.pages.product-detailsone');
    }
    public function productDetailsTwo(){
        return view('web.pages.product-detailtwo');
    }
    public function blogDetails(){
        return view('web.pages.blog-detail');
    }
    public function blogSidebar(){
        return view('web.pages.blog-sidebar');
    }
    // Temporary functions for template implementation ends here

    public function productDetail($slug){
        //$product_detail= Product::getProductBySlug($slug);

        $product_detail=Product::where('slug',$slug)->get();
        $product_id=$product_detail[0]->id;
        $specifications=ProductSpecification::where('product_id',$product_id)->get();
        $attributes=ProductAttribute::where('product_id',$product_id)->get();

        //dd($prdidbyslug);
        return view('web.pages.product_detail')->with('product_detail',$product_detail)->with('specification', $specifications)->with('attribute', $attributes);
    }

    public function productGrids(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(12);
        }
        // Sort by name , price, category

      
        return view('web.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productLists(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids)->paginate;
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(6);
        }
        // Sort by name , price, category

      
        return view('web.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productFilter(Request $request){
            $data= $request->all();
            // return $data;
            $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

            $catURL="";
            if(!empty($data['category'])){
                foreach($data['category'] as $category){
                    if(empty($catURL)){
                        $catURL .='&category='.$category;
                    }
                    else{
                        $catURL .=','.$category;
                    }
                }
            }

            $brandURL="";
            if(!empty($data['brand'])){
                foreach($data['brand'] as $brand){
                    if(empty($brandURL)){
                        $brandURL .='&brand='.$brand;
                    }
                    else{
                        $brandURL .=','.$brand;
                    }
                }
            }
            // return $brandURL;

            $priceRangeURL="";
            if(!empty($data['price_range'])){
                $priceRangeURL .='&price='.$data['price_range'];
            }
            if(request()->is('e-shop.loc/product-grids')){
                return redirect()->route('product-grids',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
            else{
                return redirect()->route('product-lists',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('web.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }

    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        if(request()->is('e-shop.loc/product-grids')){
            return view('web.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('web.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productCat(Request $request){
        // $products=Category::getProductByCat($request->slug)->paginate(10);
         $catidbyslug=Category::where('slug',$request->slug)->get();
         $cat_id_slug=$catidbyslug[0]->id;
         $products=Product::where('cat_id',$cat_id_slug)->where('status','active')->orderBy('id','DESC')->paginate(12);
            //dd($products);
         // return $request->slug;
         $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
 
         if(request()->is('e-shop.loc/product-grids')){
             return view('web.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
         }
         else{
             return view('web.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
         }
 
     }
    public function productSubCat(Request $request){
        $products=Category::getProductBySubCat($request->sub_slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }

    }

    // public function blog(){
    //     $post=Post::query();
        
    //     if(!empty($_GET['category'])){
    //         $slug=explode(',',$_GET['category']);
    //         // dd($slug);
    //         $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
    //         return $cat_ids;
    //         $post->whereIn('post_cat_id',$cat_ids);
    //         // return $post;
    //     }
    //     if(!empty($_GET['tag'])){
    //         $slug=explode(',',$_GET['tag']);
    //         // dd($slug);
    //         $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
    //         // return $tag_ids;
    //         $post->where('post_tag_id',$tag_ids);
    //         // return $post;
    //     }

    //     if(!empty($_GET['show'])){
    //         $post=$post->where('status','active')->orderBy('id','DESC')->paginate($_GET['show']);
    //     }
    //     else{
    //         $post=$post->where('status','active')->orderBy('id','DESC')->paginate(9);
    //     }
    //     // $post=Post::where('status','active')->paginate(8);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
    //     return view('web.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    // }

    // public function blogDetail($slug){
    //     $post=Post::getPostBySlug($slug);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
    //     // return $post;
    //     return view('frontend.pages.blog-detail')->with('post',$post)->with('recent_posts',$rcnt_post);
    // }

    // public function blogSearch(Request $request){
    //     // return $request->all();
    //     $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
    //     $posts=Post::orwhere('title','like','%'.$request->search.'%')
    //         ->orwhere('quote','like','%'.$request->search.'%')
    //         ->orwhere('summary','like','%'.$request->search.'%')
    //         ->orwhere('description','like','%'.$request->search.'%')
    //         ->orwhere('slug','like','%'.$request->search.'%')
    //         ->orderBy('id','DESC')
    //         ->paginate(8);
    //     return view('frontend.pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    // }

    // public function blogFilter(Request $request){
    //     $data=$request->all();
    //     // return $data;
    //     $catURL="";
    //     if(!empty($data['category'])){
    //         foreach($data['category'] as $category){
    //             if(empty($catURL)){
    //                 $catURL .='&category='.$category;
    //             }
    //             else{
    //                 $catURL .=','.$category;
    //             }
    //         }
    //     }

    //     $tagURL="";
    //     if(!empty($data['tag'])){
    //         foreach($data['tag'] as $tag){
    //             if(empty($tagURL)){
    //                 $tagURL .='&tag='.$tag;
    //             }
    //             else{
    //                 $tagURL .=','.$tag;
    //             }
    //         }
    //     }
    //     // return $tagURL;
    //         // return $catURL;
    //     return redirect()->route('blog',$catURL.$tagURL);
    // }

    // public function blogByCategory(Request $request){
    //     $post=PostCategory::getBlogByCategory($request->slug);
    //     $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
    //     return view('frontend.pages.blog')->with('posts',$post->post)->with('recent_posts',$rcnt_post);
    // }

    // public function blogByTag(Request $request){
    //     // dd($request->slug);
    //     $post=Post::getBlogByTag($request->slug);
    //     // return $post;
    //     $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
    //     return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    // }

    // Login
    public function login(){
        return view('web.pages.login');
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }

    public function register(){
        return view('web.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.old-reset');
    }

    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Please check your email');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Something went wrong! please try again');
                }
            }
            else{
                request()->session()->flash('error','Already Subscribed');
                return back();
            }
    }
    
}
