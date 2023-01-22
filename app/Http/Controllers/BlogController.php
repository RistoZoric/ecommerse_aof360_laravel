<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $blog=Blog::orderBy('id','DESC')->paginate(10);
        return view('backend.blog.index')->with('abouts',$blog);
    } 

    public function create()
    {
        return view('backend.blog.create');
    }
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:500',
            'photo'=>'string|required',
            'short_desc'=>'string|required|max:1000',
            'is_featured'=>'string|required|max:500',
            'content'=>'string|required|max:2000',
            'status'=>'string|required|max:500',
            'meta_title'=>'string|required|max:1000',
            'meta_description'=>'string|required',
            'keyword'=>'string|required|max:500',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Blog::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Blog::create($data);
        if($status){
            request()->session()->flash('success','About successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding About Details');
        }
        return redirect()->route('pages-blog');
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
