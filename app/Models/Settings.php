<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['site_title','meta_keywords','meta_description','photo','address','phone','email','logo','copyright'];
}
