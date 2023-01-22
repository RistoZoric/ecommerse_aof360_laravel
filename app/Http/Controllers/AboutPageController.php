<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use Illuminate\Support\Str;

class AboutPageController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $about=AboutPage::orderBy('id','DESC')->paginate(10);
        return view('backend.about.index')->with('abouts',$about);
    } 

    public function create()
    {
        return view('backend.about.create');
    }
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:500',
            'description'=>'string|required|max:1000',
            'photo'=>'string|required',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=AboutPage::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=AboutPage::create($data);
        if($status){
            request()->session()->flash('success','About successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding About Details');
        }
        return redirect()->route('pages-about');
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
