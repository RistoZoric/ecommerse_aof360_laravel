<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;
use Illuminate\Support\Str;
use Session;
use DB;
use Storage;
use Auth;

class SpecificationController extends Controller
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
        $specification=Specification::orderBy('id','DESC')->paginate();
        // print_r($specification); exit;
        return view('backend.specification.index')->with('specifications',$specification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.specification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'specification_name'=>'string|required',
            'field_type'=>'required',
        ]); 
        $data=$request->all();
        $slug=Str::slug($request->specification_name);
        $count=Specification::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;
        $status=Specification::create($data);
        if($status){
            request()->session()->flash('success','Specification successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('specifications.index');
    }

    public function edit($id)
    {
        $specification=Specification::find($id);
        if(!$specification){
            request()->session()->flash('error','Specification not found');
        }
        return view('backend.specification.edit')->with('specifications',$specification);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fieldvals = $request->field_values;
        
        $specification=Specification::find($id);
        $this->validate($request,[
            'specification_name'=>'string|required',
            'field_type'=>'required',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->specification_name);
        $count=Specification::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        if($request->field_values ==''){
            $SpecifValueUpdate = DB::table('specifications')->where( 'id', $id)->update(['field_values'=>'']);
        }
       
        $status=$specification->fill($data)->save();
        if($status){
            request()->session()->flash('success','Specification successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('specifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $attribute=Specification::find($id);
        if($attribute){
            $status=$attribute->delete();
            if($status){
                request()->session()->flash('success','Specification successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('specifications.index');
        }
        else{
            request()->session()->flash('error','Specification not found');
            return redirect()->back();
        }
    }

}
