<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blogcategory;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $blogcategory=Blogcategory::orderBy('id','DESC')->paginate(10);
        return view('backend.blogcategory.index')->with('blogcategory',$blogcategory);
    } 

    public function create()
    {
        return view('backend.blogcategory.create');
    }
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:500',
            'description'=>'string|required|max:1000',
            'status'=>'string|required|max:500',
            'meta_title'=>'string|required|max:1000',
            'meta_description'=>'string|required',
            'keyword'=>'string|required|max:500',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Blogcategory::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Blogcategory::create($data);
        if($status){
            request()->session()->flash('success','About successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding About Details');
        }
        return redirect()->route('pages-blog-category');
    }
    // public function index(){
        
    //     $about = AboutPage::all();
    //     return view('backend.pages.about',compact('about'));
    //     // $banner=AboutPage::orderBy('id','DESC')->paginate(10);
    //     // return view('backend.banner.index')->with('banners',$banner);
    //     // return view('backend.pages.about');
    //     // $brand=Brand::orderBy('id','DESC')->paginate();
    //     // return view('backend.ecommerce.index');
    // }
  
 
}
