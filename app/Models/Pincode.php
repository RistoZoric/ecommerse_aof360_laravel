<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    protected $table = 'cod_pincodes';
    protected $fillable=['pincodes'];

    //protected $fillable=['title','slug','description','photo','status', 'offer_title', 'offer_price', 'button_link'];

}