<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Shipping extends Model
{
    protected $fillable=['from_p','to_p','from_w','to_w','price','status'];
}
