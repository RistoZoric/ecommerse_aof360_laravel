<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        // $brand=Brand::orderBy('id','DESC')->paginate();
        // return view('backend.ecommerce.index');
    }

 	public function about()
    {
        return view('backend.pages.about');
    }
   
    public function contact()
    {
        return view('backend.pages.contact');
    }

   public function terms()
    {
        return view('backend.pages.terms');
    }

    public function payments()
    {
        return view('backend.pages.payments');
    }

    public function refunds()
    {
        return view('backend.pages.refunds');
    }
}
