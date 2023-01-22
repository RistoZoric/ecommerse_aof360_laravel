<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','photo','status', 'offer_title', 'offer_price', 'button_link'];
}
