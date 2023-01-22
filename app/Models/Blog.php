<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable=['title','slug','photo','short_desc','is_featured','content','status','meta_title','meta_description','keyword'];

    //protected $fillable=['title','slug','description','photo','status', 'offer_title', 'offer_price', 'button_link'];

}
