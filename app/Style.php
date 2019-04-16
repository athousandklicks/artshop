<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
     public function products()
    {
    	return $this->belongsToMany('App\Style', 'product_style', 'style_id', 'product_id');
    }
}

