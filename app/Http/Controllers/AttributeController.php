<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;
use Illuminate\Support\Str;
use Session;
use DB;
use Storage;
use Auth;

class AttributeController extends Controller
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
        $attribute=Attribute::orderBy('id','DESC')->paginate();
        return view('backend.attributes.index')->with('attributes',$attribute);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.attributes.create');
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
            'attribute_name'=>'string|required',
            'attr_type'=>'required',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->attribute_name);
        $count=Attribute::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;
        $status=Attribute::create($data);
        if($status){
            request()->session()->flash('success','Attributes successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('attributes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute=Attribute::find($id);
        if(!$attribute){
            request()->session()->flash('error','Attribute not found');
        }
        return view('backend.attributes.edit')->with('attributes',$attribute);
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
        $attrvals = $request->attr_values;
        
        $attribute=Attribute::find($id);
        $this->validate($request,[
            'attribute_name'=>'string|required',
            'attr_type'=>'required',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->attribute_name);
        $count=Attribute::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        if($request->attr_values ==''){
            $AttrValueUpdate = DB::table('attributes')->where( 'id', $id)->update(['attr_values'=>'']);
        }
       
        $status=$attribute->fill($data)->save();
        if($status){
            request()->session()->flash('success','Attribute successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('attributes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $attribute=Attribute::find($id);
        if($attribute){
            $status=$attribute->delete();
            if($status){
                request()->session()->flash('success','Attribute successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('attributes.index');
        }
        else{
            request()->session()->flash('error','Attribute not found');
            return redirect()->back();
        }
    }


    public function AddValue(){
        return view('backend.attributes.createvalue');
    }
     
    public function ViewAttrvalue(request $request, $id){
        if(isset($id) && $id){
            $attrvalues = DB::table('attribute_values')->where('attribute_id',$id)->orderBy('id','DESC')->paginate();
            $attr = DB::table('attributes')->where('id',$id)->get();
            // dd($attr); exit;
            if(!$attrvalues->isEmpty()){
                $attributes = $attr->toArray();
                // $attrvalues = $attrvalue->toArray();
                return view('backend.attributes.dispvalue', compact('attributes','attrvalues'));
            }else{
                return back()->with('error','Values not found!');
            }
        }
    }
    
    public function EditAttrvalue(request $request, $id){
        if(isset($id) && $id){
            $attrvalue = DB::table('attribute_values')->where('id',$id)->get();
            if(!$attrvalue->isEmpty()){
                $attrivals = $attrvalue->toArray();
                $attrId = $attrivals[0]->attribute_id;
                $attr = DB::table('attributes')->where('id', $attrId)->get();
                $attributes = $attr->toArray();
                return view('backend.attributes.editvalue', compact('attributes','attrivals'));
            }else{
                return back()->with('error','Values not found!');
            }
        
        }
    }
    
    public function AttrvalueInsert(request $request){
        $AttrValueId = 0;
        $attrId = $request->attribute_id;
        if($request->values !=''){
            $str = str_replace(PHP_EOL,',',trim($request->values));
            $pieces = explode(",", $str);     
            foreach($pieces as $values){
                $values = trim($values);
                if($values != ""){
                    if($this->checkNameForAll('attribute_values', $values)){
                        $AttrValueId = DB::table('attribute_values')->insertGetId( ['attribute_id' => $attrId, 'name' => $values]);
                    }  
                }
            }
        } else {
            return back()->with('error','Values not found!');
        }
        if($AttrValueId){
            return redirect()->route('attributes.index')->with('success','Values added successfully!');
        }else{
            return back()->with('error','Invalid Data!'); 
        }
    }
    
    public function AttrvalueUpdate(request $request){
        if ($request->values !='' && $request->id){
            $affected = DB::update(
                'UPDATE attribute_values SET name = "'.$request->values.'" WHERE id = ?',
                [$request->id]
            );
            // request()->session()->flash('success','Value Updated successfully');
            // return redirect()->intended('attributes')->withSuccess(['Updated successfully!']);
            return redirect()->route('attributes.index')->with('success','Value Updated successfully');
        } else {
            return back()->with('error','Invalid Data!');
        }
    }

    public function AttrvalueDestroy($id){
        $attributeval=DB::table('attribute_values')->where('id',$id)->delete();
        if($attributeval){
            //request()->session()->flash('success','Attribute Value successfully deleted');
            return redirect()->route('attributes.index')->with('success','Attribute Value successfully deleted');
        }
        else{
            request()->session()->flash('error','Attribute Value not found');
            return redirect()->back();
        }
    }
}
