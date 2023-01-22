<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable=['page_name','page_slug','page_content','seo_title','seo_description'];

    protected $guarded = [];
}
