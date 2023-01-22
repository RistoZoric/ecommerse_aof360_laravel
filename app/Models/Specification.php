<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable=['specification_name','slug', 'field_type', 'field_values','status'];
}
