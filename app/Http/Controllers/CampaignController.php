<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\Product;
use Illuminate\Support\Str;
use Session;
use DB;
use Storage;
use Auth;

class CampaignController extends Controller
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
        $campaign=Campaign::orderBy('id','DESC')->paginate();
        return view('backend.campaign.index')->with('campaigns',$campaign);
    }

    public function create()
    {
    	$category=CampaignCategory::where('status','active')->get();
    	$products=Product::where('status','active')->get();
        return view('backend.campaign.create')->with('products',$products)->with('categories',$category);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required',
            'description'=>'string|required',
            'product_id'=>'required',
            'category_id'=>'required',
            'image'=>'string|required',
            'start_on'=>'required',
            'end_on'=>'required',
            'status'=>'required',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Campaign::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;
        $status=Campaign::create($data);
        if($status){
            request()->session()->flash('success','Campaigns successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('campaigns.index');
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        $campaign=Campaign::find($id);
        $category=CampaignCategory::where('status','active')->get();
    	$products=Product::where('status','active')->get();
        if(!$campaign){
            request()->session()->flash('error','Campaign not found');
        }
        return view('backend.campaign.edit')->with('campaigns',$campaign)->with('categories',$category)->with('products',$products);
    }

    public function update(Request $request, $id)
    {
        $attrvals = $request->attr_values;
        
        $campaign=Campaign::find($id);
        $this->validate($request,[
            'title'=>'string|required',
            'description'=>'string|required',
            'product_id'=>'required',
            'category_id'=>'required',
            'image'=>'string|required',
            'start_on'=>'required',
            'end_on'=>'required',
            'status'=>'required',
        ]);
        $data=$request->all();
       
        $status=$campaign->fill($data)->save();
        if($status){
            request()->session()->flash('success','Campaign successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('campaigns.index');
    }

    public function destroy($id){
        $campaign=Campaign::find($id);
        if($campaign){
            $status=$campaign->delete();
            if($status){
                request()->session()->flash('success','Campaign successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('campaigns.index');
        }
        else{
            request()->session()->flash('error','Campaign not found');
            return redirect()->back();
        }
    }


    ####################################################################
    ########## Campaign Category Functions Starts From Here  ###########
    ####################################################################
    public function category()
    {
        $campCategory=CampaignCategory::orderBy('id','DESC')->paginate(10);
        return view('backend.campcategory.index')->with('campCategories',$campCategory);
    }

    public function createcategory()
    {
        return view('backend.campcategory.create');
    }

    public function storecategory(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=CampaignCategory::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $status=CampaignCategory::create($data);
        if($status){
            request()->session()->flash('success','Campaign Category Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('campcategory');
    }

    public function editcategory($id)
    {
        $campCategory=CampaignCategory::findOrFail($id);
        return view('backend.campcategory.edit')->with('campCategory',$campCategory);
    }

    public function updatecategory(Request $request, $id)
    {
        $campCategory=CampaignCategory::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        $status=$campCategory->fill($data)->save();
        if($status){
            request()->session()->flash('success','Campaign Category Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('campcategory');
    }

    public function destroycategory($id)
    {
        $campCategory=CampaignCategory::findOrFail($id);
       
        $status=$campCategory->delete();
        
        if($status){
            request()->session()->flash('success','Campaign Category successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting campaign category');
        }
        return redirect()->route('campcategory');
    }
}
