<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','first_name','last_name','country','post_code','address1','address2','city','state','phone','email','payment_method','payment_status','shipping_id','coupon'];

    public function cart_info(){
        return $this->hasMany('App\Models\Cart','order_id','id');
    }
    public static function getAllOrder($id){
        return Order::with('cart_info')->find($id);
    }
    public static function countActiveOrder(){
        $data=Order::count();
        if($data){
            return $data;
        }
        return 0;
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function shippingAddress()
    {
    return [
        'name' => $this->first_name,
        'company' => $this->last_name,
        'street1' => $this->address1,
        'city' => $this->city,
        'state' => $this->state,
        'zip' => $this->post_code,
        'country' => $this->country,
        'phone' => $this->phone,
        'email' => $this->email,
    ];
    }

}
