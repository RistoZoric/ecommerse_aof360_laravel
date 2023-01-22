<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Product;
use Illuminate\Support\Str;
use Session;
use DB;
use Storage;
use Auth;

class ProductTypeController extends Controller
{
    public function __construct()
    {
         
    }

    private function checkNameForAll($table, $name){
        $result = DB::table($table)
                    ->where('name', '=', $name)
                    ->first();
        if(!empty($result)){
            return false;
        }else{
            return true;
        }
    }

    public function index(){
        $prodtype=ProductType::orderBy('id','DESC')->paginate();
        return view('backend.product_type.index')->with('productTypes',$prodtype);
    }

    public function create()
    {
    	$products=Product::where('status','active')->get();
        return view('backend.product_type.create')->with('products',$products);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'product_id'=>'required',
            'types'=>'required',
            'status'=>'required',
        ]);
        $data=$request->all();
        // return $data;
        $status=ProductType::create($data);
        if($status){
            request()->session()->flash('success','Product Type successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('product-types.index');
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        $prodtypess=ProductType::find($id);
    	$products=Product::where('status','active')->get();
        if(!$prodtypess){
            request()->session()->flash('error','Product Type not found');
        }
        return view('backend.product_type.edit')->with('prodtypes',$prodtypess)->with('products',$products);
    }

    public function update(Request $request, $id)
    {   
        $prodtype=ProductType::find($id);
        $this->validate($request,[
            'product_id'=>'required',
            'types'=>'required',
            'status'=>'required',
        ]);
        $data=$request->all();
       
        $status=$prodtype->fill($data)->save();
        if($status){
            request()->session()->flash('success','Product Type successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('product-types.index');
    }

    public function destroy($id){
        $prodtype=ProductType::find($id);
        if($prodtype){
            $status=$prodtype->delete();
            if($status){
                request()->session()->flash('success','Product Type successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('product-types.index');
        }
        else{
            request()->session()->flash('error','Product Type not found');
            return redirect()->back();
        }
    }
}
