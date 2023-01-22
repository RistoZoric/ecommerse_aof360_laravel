<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable=['attribute_name','slug', 'attr_type', 'attr_values','status'];

    
}
