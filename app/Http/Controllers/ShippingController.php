<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Coupon;
use DB;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipping=Shipping::orderBy('id','DESC')->paginate(10);
        return view('backend.shipping.index')->with('shippings',$shipping);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'string|required',
        //     'from_p'=>'string|required',
        //     'to_p'=>'string|required',
        //     'from_w'=>'string|required',
        //     'to_w'=>'string|required',
        //     'price'=>'nullable|numeric',
        //     'status'=>'required|in:active,inactive'
        // ]);
        //$data=$request->all();
        // return $data;

        if($request->addmore != "" ){
            foreach ($request->addmore as $key => $value) {
                if( $value['from_p'] != '' || $value['to_p'] != '' || $value['from_w'] != '' || $value['to_w'] != '' || $value['price'] != '' ){
                    $status = Shipping::insert([
                        'from_p' => $value['from_p'],
                        'to_p' => $value['to_p'],
                        'from_w' => $value['from_w'],
                        'to_w' => $value['to_w'],
                        'price' => $value['price'],
                    ]);
                }
            }
        }

        //$status=Shipping::create($data);
        if($status){
            request()->session()->flash('success','Shipping successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('shipping.index');
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
        $shipping=Shipping::find($id);
        if(!$shipping){
            request()->session()->flash('error','Shipping not found');
        }
        return view('backend.shipping.edit')->with('shipping',$shipping);
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
        $shipping=Shipping::find($id);
        $this->validate($request,[
            'from_p'=>'string|required',
            'to_p'=>'string|required',
            'from_w'=>'string|required',
            'to_w'=>'string|required',
            'price'=>'nullable|numeric',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        // return $data;
        $status=$shipping->fill($data)->save();
        if($status){
            request()->session()->flash('success','Shipping successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('shipping.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipping=Shipping::find($id);
        if($shipping){
            $status=$shipping->delete();
            if($status){
                request()->session()->flash('success','Shipping successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('shipping.index');
        }
        else{
            request()->session()->flash('error','Shipping not found');
            return redirect()->back();
        }
    }
}
