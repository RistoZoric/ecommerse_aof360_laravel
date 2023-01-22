<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Attribute;
use App\Models\Specification;
use App\Models\ProductAttribute;
use App\Models\ProductSpecification;
use DB;

use Illuminate\Support\Str;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products=Product::getAllProduct();
        // return $products;
        return view('backend.product.index')->with('products',$products);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $brand=Brand::get();
        $category=Category::where('is_parent',1)->get();
        $attributes=Attribute::get();
        $specifications=Specification::get();
        
        return view('backend.product.create')->with('categories',$category)->with('brands',$brand)->with('attributes',$attributes)->with('specifications',$specifications);
    }
 
    public function store(Request $request){
        //return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'product_code'=>'string',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'weight'=>'string|required',
            'length'=>'string|required',
            'wide'=>'string|required',
            'height'=>'string|required',
            'photo'=>'string|required',
            'stock'=>"required|numeric",
            'cat_id'=>'required|exists:categories,id',
            'brand_id'=>'nullable|exists:brands,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'status'=>'required|in:active,inactive',
            'condition'=>'required|in:default,new,hot',
            'price'=>'required',
            'seo_title'=>'string|required',
            'seo_description'=>'string|required',
            'discount'=>'nullable|numeric'
        ]);

        $data=$request->all();
        
        
       // dd($data); exit;
        $slug=Str::slug($request->title);
        $count=Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_featured']=$request->input('is_featured',0);

        $status=Product::create($data);

        //  dd($last);
        if($request->addmore != "" ){
            foreach ($request->addmore as $key => $value) {
                $last = Product::latest()->orderBy('id', 'DESC')->first();
                if( $value['question'] != '' || $value['answer'] != '' ){
                    DB::table('productfaqs')->insert([
                        'product_id' => $last['id'],
                        'question' => $value['question'],
                        'answer' => $value['answer']
                    ]);
                }
            }
        }

        if($request->attribute_selects != "" ){
            $attribute_ids = $data['attribute_selects'];
            $attribute_fields = $data['attrfield'];
            foreach($attribute_fields as $key => $attrfields){
                $last = Product::latest()->orderBy('id', 'DESC')->first();
                DB::table('product_attributes')->insert([
                    'product_id' => $last['id'],
                    'attribute_id' => $key,
                    'attribute_values' => json_encode($attrfields)
                ]);
            }
        }

        if($request->specifications != "" ){
            $specification_ids = $data['specifications'];
            $specification_fields = $data['specfield'];
            foreach($specification_fields as $key => $specififields){
                $last = Product::latest()->orderBy('id', 'DESC')->first();
                DB::table('product_specifications')->insert([
                    'product_id' => $last['id'],
                    'specification_id' => $key,
                    'specification_values' => json_encode($specififields)
                ]);
            }
        }
        
        if($status){
            request()->session()->flash('success','Product Successfully added');
        }else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');

    }

    public function show($id){
        //
    }

    public function edit($id){
        $brand=Brand::get();
        $product=Product::findOrFail($id);
        $category=Category::where('is_parent',1)->get();
        $items=Product::where('id',$id)->get();
        // print_r($items); exit;
        $attributes=Attribute::get();
        $specifications=Specification::get();

         // Dynamic Attributes Edit Section
        $prod_attrs=DB::table('product_attributes')->where('product_id',$id)->get();
        $obdata = "";
        if(!$prod_attrs->isEmpty()){
            foreach ($prod_attrs as $key => $proattrs) {
                $pratid=$proattrs->attribute_id;
                $pratvals = json_decode($proattrs->attribute_values);
               
                $attrtype=Attribute::where('id', $pratid)->get();
                $fldtype = $attrtype[0]->attr_type;
                
                if($fldtype=='text'){
                    $obdata .= '<div class="form-group"><label for="pro_text_'.$pratid.'" class="col-form-label">'.$attrtype[0]->attribute_name.'</label><input id="pro_text_'.$pratid.'" type="text" name="attrfield['.$pratid.'][]" value="'.$pratvals[0].'" class="form-control"></div>';
                }elseif($fldtype=='select'){
                    $selectvals = $attrtype[0]->attr_values;
                    $selectvalues=explode(",",$selectvals);
                    $selectopts ="";
                    foreach($selectvalues as $value){
                        $sel='';
                        foreach($pratvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='selected';
                            }
                        }
                        $selectopts .= '<option '.$sel.' value="'.$value.'">'.$value.'</option>';
                    }
                    $obdata .= '<div class="form-group"><label for="pro_select_'.$pratid.'" class="col-form-label">'.$attrtype[0]->attribute_name.'</label><select name="attrfield['.$pratid.'][]" id="pro_select_'.$pratid.'" class="form-control">'.$selectopts.'</select></div>';
                }elseif($fldtype=='checkbox'){
                    $checkvals = $attrtype[0]->attr_values;
                    $checkvalues=explode(",",$checkvals);
                    $checkdata ="";
                    $count=1;
                    foreach($checkvalues as $value){
                         $sel='';
                        foreach($pratvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='checked';
                            }
                        }
                        $checkdata .= '<input '.$sel.' type="checkbox" id="check'.$count.'" name="attrfield['.$pratid.'][]" value="'.$value.'">&nbsp;<label for="check'.$count.'">'.$value.'</label>&emsp;';
                        $count++;
                    }
                    $obdata .= '<div class="form-group"><p>Select '.$attrtype[0]->attribute_name.':</p>'.$checkdata.'</div>';
                }elseif($fldtype=='number'){
                    $obdata .= '<div class="form-group"><label for="pro_num_'.$pratid.'" class="col-form-label">'.$attrtype[0]->attribute_name.'</label><input id="pro_num_'.$pratid.'" type="number" name="attrfield['.$pratid.'][]" value="'.$pratvals[0].'" class="form-control"></div>';
                }elseif($fldtype=='textarea'){
                    $obdata .= '<div class="form-group"><label for="pro_textarea_'.$pratid.'" class="col-form-label">'.$attrtype[0]->attribute_name.'</label><textarea class="form-control" id="pro_textarea_'.$pratid.'" name="attrfield['.$pratid.'][]">'.$pratvals[0].'</textarea></div>';
                }elseif($fldtype=='url'){
                    $obdata .= '<div class="form-group"><label for="pro_url_'.$pratid.'" class="col-form-label">'.$attrtype[0]->attribute_name.'</label><input id="pro_url_'.$pratid.'" type="url" name="attrfield['.$pratid.'][]" value="'.$pratvals[0].'" class="form-control"></div>';
                }elseif($fldtype=='radio'){
                    $radiovals = $attrtype[0]->attr_values;
                    $radiovalues=explode(",",$radiovals);
                    $radiodata ="";
                    $count=1;
                    foreach($radiovalues as $value){
                          $sel='';
                        foreach($pratvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='checked';
                            }
                        }
                        $radiodata .= '<input '.$sel.'  type="radio" id="radio'.$count.'" name="attrfield['.$pratid.'][]" value="'.$value.'" class="">&nbsp;<label for="radio'.$count.'">'.$value.'</label>&emsp;';
                        $count++;
                    }
                    $obdata .= '<div class="form-group append-radio"><p>Choose '.$attrtype[0]->attribute_name.':</p>'.$radiodata.'</div>';
                }else{
                    $obdata = "";
                }
                
            }
            
        }

        // Dynamic Specification Edit Section
        $pro_specifics=DB::table('product_specifications')->where('product_id',$id)->get();
        $spdata = "";
        if(!$pro_specifics->isEmpty()){
            foreach ($pro_specifics as $key => $proaspecs) {
                $prspid=$proaspecs->specification_id;
                $prspvals = json_decode($proaspecs->specification_values);
               
                $spectype=Specification::where('id', $prspid)->get();
                if(!$spectype->isEmpty()){
                    $fieldtype = $spectype[0]->field_type;
                }else{
                    $fieldtype='';
                }
                
                if($fieldtype=='text'){
                    $spdata .= '<div class="form-group"><label for="pro_text_'.$prspid.'" class="col-form-label">'.$spectype[0]->specification_name.'</label><input id="pro_text_'.$prspid.'" type="text" name="specfield['.$prspid.'][]" value="'.$prspvals[0].'" class="form-control"></div>';
                }elseif($fieldtype=='select'){
                    $selectvals = $spectype[0]->field_values;
                    $selectvalues=explode(",",$selectvals);
                    $selectopts ="";
                    foreach($selectvalues as $value){
                        $sel='';
                        foreach($prspvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='selected';
                            }
                        }
                        $selectopts .= '<option '.$sel.' value="'.$value.'">'.$value.'</option>';
                    }
                    $spdata .= '<div class="form-group"><label for="pro_select_'.$prspid.'" class="col-form-label">'.$spectype[0]->specification_name.'</label><select name="specfield['.$prspid.'][]" id="pro_select_'.$prspid.'" class="form-control">'.$selectopts.'</select></div>';
                }elseif($fieldtype=='checkbox'){
                    $checkvals = $spectype[0]->field_values;
                    $checkvalues=explode(",",$checkvals);
                    $checkdata ="";
                    $count=1;
                    foreach($checkvalues as $value){
                         $sel='';
                        foreach($prspvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='checked';
                            }
                        }
                        $checkdata .= '<input '.$sel.' type="checkbox" id="check'.$count.'" name="specfield['.$prspid.'][]" value="'.$value.'">&nbsp;<label for="check'.$count.'">'.$value.'</label>&emsp;';
                        $count++;
                    }
                    $spdata .= '<div class="form-group"><p>Select '.$spectype[0]->specification_name.':</p>'.$checkdata.'</div>';
                }elseif($fieldtype=='number'){
                    $spdata .= '<div class="form-group"><label for="pro_num_'.$prspid.'" class="col-form-label">'.$spectype[0]->specification_name.'</label><input id="pro_num_'.$prspid.'" type="number" name="specfield['.$prspid.'][]" value="'.$prspvals[0].'" class="form-control"></div>';
                }elseif($fieldtype=='textarea'){
                    $spdata .= '<div class="form-group"><label for="pro_textarea_'.$prspid.'" class="col-form-label">'.$spectype[0]->specification_name.'</label><textarea class="form-control" id="pro_textarea_'.$pratid.'" name="specfield['.$prspid.'][]">'.$prspvals[0].'</textarea></div>';
                }elseif($fieldtype=='url'){
                    $spdata .= '<div class="form-group"><label for="pro_url_'.$prspid.'" class="col-form-label">'.$spectype[0]->specification_name.'</label><input id="pro_url_'.$prspid.'" type="url" name="specfield['.$prspid.'][]" value="'.$prspvals[0].'" class="form-control"></div>';
                }elseif($fieldtype=='radio'){
                    $radiovals = $spectype[0]->field_values;
                    $radiovalues=explode(",",$radiovals);
                    $radiodata ="";
                    $count=1;
                    foreach($radiovalues as $value){
                          $sel='';
                        foreach($prspvals as $a)
                        {

                            if($a==$value)
                            {
                                $sel='checked';
                            }
                        }
                        $radiodata .= '<input '.$sel.'  type="radio" id="radio'.$count.'" name="specfield['.$prspid.'][]" value="'.$value.'" class="">&nbsp;<label for="radio'.$count.'">'.$value.'</label>&emsp;';
                        $count++;
                    }
                    $spdata .= '<div class="form-group append-radio"><p>Choose '.$spectype[0]->specification_name.':</p>'.$radiodata.'</div>';
                }else{
                    $spdata = "";
                }
                
            }
            
        }

        
        $pro_faq = DB::table('productfaqs')->where('product_id',$id)->get();
        
        // return $pro_faq;
        return view('backend.product.edit')->with('product',$product)
                    ->with('brands',$brand)
                    ->with('categories',$category)->with('items',$items)
                    ->with('attributes',$attributes)
                    ->with('specifications',$specifications)
                    ->with(['pro_faq' => $pro_faq])
                    ->with(['prod_attrs' => $obdata])
                    ->with(['prod_attrss'=>$prod_attrs])
                    ->with(['prod_specss' => $pro_specifics])
                    ->with(['prod_specs' => $spdata]);
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
        $product=Product::findOrFail($id);

        $this->validate($request,[
            'title'=>'string|required',
            'product_code'=>'string',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'stock'=>"required|numeric",
            'cat_id'=>'required|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'brand_id'=>'nullable|exists:brands,id',
            'status'=>'required|in:active,inactive',
            'condition'=>'required|in:default,new,hot',
            'price'=>'required',
            'discount'=>'nullable|numeric'
        ]);

        $data=$request->all();
        $data['is_featured']=$request->input('is_featured',0);
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }
        // return $data;
        
        $status=$product->fill($data)->save();

        if($request->addmore != "" ){
            foreach ($request->addmore as $key => $value) {
               // $last = Product::latest()->orderBy('id', 'DESC')->first();
                if( $value['question'] != '' || $value['answer'] != '' ){
                    DB::table('productfaqs')->where('product_id',$product->id)->update([
                        'question' => $value['question'],
                        'answer' => $value['answer']
                    ]);
                }
            }
        }
        

        if( $request->attribute_selects != "" ){
            DB::table("product_attributes")->where('product_id', $id)->delete();
            
            $attribute_ids = $data['attribute_selects'];
            $attribute_fields = $data['attrfield'];
            foreach($attribute_fields as $key => $attrfields){
                DB::table('product_attributes')->insert([
                    'product_id' => $id,
                    'attribute_id' => $key,
                    'attribute_values' => json_encode($attrfields)
                ]);
            }
        }

        if( $request->specifications != "" ){
            DB::table("product_specifications")->where('product_id', $id)->delete();
            
            $specification_ids = $data['specifications'];
            $specification_fields = $data['specfield'];
            foreach($specification_fields as $key => $specififields){
                DB::table('product_specifications')->insert([
                    'product_id' => $id,
                    'specification_id' => $key,
                    'specification_values' => json_encode($specififields)
                ]);
            }
        }

        if($status){
            request()->session()->flash('success','Product Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $status=$product->delete();
        
        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }

    public function getattributes(Request $request){
        $attrIds = $request->all();
        $attrIdd = [];
        foreach($attrIds as $attr){
           foreach($attr as $data){
            $attrIdd[] = $data;
           }
        }
        $result[]="";
        $obdata = "";
        $type="";
        $result = DB::table('attributes')->whereIn('id', $attrIdd)->get();
        // return $result;
        // return $attrIds;
        foreach ( $result as $attrs) {
            $type = $attrs->attr_type;
            if($type=='text'){
                $obdata .= '<div class="form-group"><label for="pro_text_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><input id="pro_text_'.$attrs->id.'" type="text" name="attrfield['.$attrs->id.'][]" class="form-control"></div>';
            }elseif($type=='select'){
                $selectvals = $attrs->attr_values;
                $selectvalues=explode(",",$selectvals);
                $selectopts ="";
                foreach($selectvalues as $value){
                    $selectopts .= '<option value="'.$value.'">'.$value.'</option>';
                }
                $obdata .= '<div class="form-group"><label for="pro_select_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><select name="attrfield['.$attrs->id.'][]" id="pro_select_'.$attrs->id.'" class="form-control"><option>--Select '.$attrs->attribute_name.'--</option>'.$selectopts.'</select></div>';
            }elseif($type=='checkbox'){
                $checkvals = $attrs->attr_values;
                $checkvalues=explode(",",$checkvals);
                $checkdata ="";
                $count=1;
                foreach($checkvalues as $value){
                    $checkdata .= '<input type="checkbox" id="check'.$count.'" name="attrfield['.$attrs->id.'][]" value="'.$value.'">&nbsp;<label for="check'.$count.'">'.$value.'</label>&emsp;';
                    $count++;
                }
                $obdata .= '<div class="form-group"><p>Select '.$attrs->attribute_name.':</p>'.$checkdata.'</div>';
            }elseif($type=='number'){
                $obdata .= '<div class="form-group"><label for="pro_num_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><input id="pro_num_'.$attrs->id.'" type="number" name="attrfield['.$attrs->id.'][]" class="form-control"></div>';
            }elseif($type=='textarea'){
                $obdata .= '<div class="form-group"><label for="pro_textarea_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><textarea class="form-control" id="pro_textarea_'.$attrs->id.'" name="attrfield['.$attrs->id.'][]"></textarea></div>';
            }elseif($type=='url'){
                $obdata .= '<div class="form-group"><label for="pro_url_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><input id="pro_url_'.$attrs->id.'" type="url" name="attrfield['.$attrs->id.'][]" class="form-control"></div>';
            }elseif($type=='radio'){
                $radiovals = $attrs->attr_values;
                $radiovalues=explode(",",$radiovals);
                $radiodata ="";
                $count=1;
                foreach($radiovalues as $value){
                    $radiodata .= '<input type="radio" id="radio'.$count.'" name="attrfield['.$attrs->id.'][]" value="'.$value.'" class="">&nbsp;<label for="radio'.$count.'">'.$value.'</label>&emsp;';
                    $count++;
                }
                $obdata .= '<div class="form-group append-radio"><p>Choose '.$attrs->attribute_name.':</p>'.$radiodata.'</div>';
            }else{
                $obdata .= '<div class="form-group"><label for="pro_text_'.$attrs->id.'" class="col-form-label">'.$attrs->attribute_name.'</label><input id="pro_text_'.$attrs->id.'" type="text" name="attrfield['.$attrs->id.'][]" class="form-control"></div>';
            }
           
        }
        
        
        return $obdata; 
    }


    public function getspecifications(Request $request){
        $specifIds = $request->all();
        $specifIdd = [];
        foreach($specifIds as $specif){
           foreach($specif as $data){
            $specifIdd[] = $data;
           }
        }
        $result[]="";
        $obdata = "";
        $type="";
        $result = DB::table('specifications')->whereIn('id', $specifIdd)->get();
        // return $result;
        // return $attrIds;
        foreach ( $result as $specific) {
            $type = $specific->field_type;
            if($type=='text'){
                $obdata .= '<div class="form-group"><label for="pro_text_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><input id="pro_text_'.$specific->id.'" type="text" name="specfield['.$specific->id.'][]" class="form-control"></div>';
            }elseif($type=='select'){
                $selectvals = $specific->field_values;
                $selectvalues=explode(",",$selectvals);
                $selectopts ="";
                foreach($selectvalues as $value){
                    $selectopts .= '<option value="'.$value.'">'.$value.'</option>';
                }
                $obdata .= '<div class="form-group"><label for="pro_select_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><select name="specfield['.$specific->id.'][]" id="pro_select_'.$specific->id.'" class="form-control"><option>--Select '.$specific->specification_name.'--</option>'.$selectopts.'</select></div>';
            }elseif($type=='checkbox'){
                $checkvals = $specific->field_values;
                $checkvalues=explode(",",$checkvals);
                $checkdata ="";
                $count=1;
                foreach($checkvalues as $value){
                    $checkdata .= '<input type="checkbox" id="check'.$count.'" name="specfield['.$specific->id.'][]" value="'.$value.'">&nbsp;<label for="check'.$count.'">'.$value.'</label>&emsp;';
                    $count++;
                }
                $obdata .= '<div class="form-group"><p>Select '.$specific->specification_name.':</p>'.$checkdata.'</div>';
            }elseif($type=='number'){
                $obdata .= '<div class="form-group"><label for="pro_num_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><input id="pro_num_'.$specific->id.'" type="number" name="specfield['.$specific->id.'][]" class="form-control"></div>';
            }elseif($type=='textarea'){
                $obdata .= '<div class="form-group"><label for="pro_textarea_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><textarea class="form-control" id="pro_textarea_'.$specific->id.'" name="specfield['.$specific->id.'][]"></textarea></div>';
            }elseif($type=='url'){
                $obdata .= '<div class="form-group"><label for="pro_url_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><input id="pro_url_'.$specific->id.'" type="url" name="specfield['.$specific->id.'][]" class="form-control"></div>';
            }elseif($type=='radio'){
                $radiovals = $specific->field_values;
                $radiovalues=explode(",",$radiovals);
                $radiodata ="";
                $count=1;
                foreach($radiovalues as $value){
                    $radiodata .= '<input type="radio" id="radio'.$count.'" name="specfield['.$specific->id.'][]" value="'.$value.'" class="">&nbsp;<label for="radio'.$count.'">'.$value.'</label>&emsp;';
                    $count++;
                }
                $obdata .= '<div class="form-group append-radio"><p>'.$specific->specification_name.':</p>'.$radiodata.'</div>';
            }else{
                $obdata .= '<div class="form-group"><label for="pro_text_'.$specific->id.'" class="col-form-label">'.$specific->specification_name.'</label><input id="pro_text_'.$specific->id.'" type="text" name="specfield['.$specific->id.'][]" class="form-control"></div>';
            }
           
        }
        
        
        return $obdata; 
    }

  public function checkPincode(Request $request){

    //   $codpincodecount = DB::table('cod_pincodes');
    // dd($codpincodecount);
    // $msg = "This is a simple message.";
    // return response()->json(array('msg'=> $msg), 200);

    if($request->isMethod('post')){
        $data = $request->all();
        // return response()->json(array('msg'=> $data), 200);
    //    print_r($data);
        //echo '<pre>';print_r($data); die;
    $codpincodecount = DB::table('cod_pincodes')->where('pincodes',$data['pincode'])->count();
   
    if($codpincodecount==0){
        echo "<span style='color:red; font-size:20px; font-weight:600;'>This Pincode Is Not Available For Delivery</span>";
    }else{
        echo "<span style='color:green; font-size:20px; font-weight:600;'>This Pincode Is Available For Delivery</span>";
    }
    }

  }  

}
