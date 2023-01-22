<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blogcategory;
use App\Models\Blog;
use Illuminate\Support\Str;

class SinglePageController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        // $blogcategory=Blogcategory::orderBy('id','DESC')->paginate(10);
        // return view('backend.blogcategory.index')->with('blogcategory',$blogcategory);
    } 

    public function show_single_blog($slug){
        
        $blog = Blog::where('slug', $slug)->first();
  //$blog = Blog::orderBy('created_at','desc')->where( 'status', '=', 'Published' )->paginate(12);

 
//$blog = Blog::orderBy('created_at','desc')->where( 'status', '=', 'Published' )->paginate(12);
// return view('web.pages.blog-single')->with('blog',$blog);
 

      
        }
}
