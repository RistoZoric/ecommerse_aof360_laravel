<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $table = 'about_page';
    protected $fillable=['title','slug','description','photo'];

    //protected $fillable=['title','slug','description','photo','status', 'offer_title', 'offer_price', 'button_link'];

}
