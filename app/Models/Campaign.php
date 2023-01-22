<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable=['title', 'description', 'product_id', 'slug', 'category_id', 'image', 'start_on', 'end_on', 'status'];
}
