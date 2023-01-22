<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $table = 'blog_category';
    protected $fillable=['title','slug','description','status','meta_title','meta_description','keyword'];

    //protected $fillable=['title','slug','description','photo','status', 'offer_title', 'offer_price', 'button_link'];

}
