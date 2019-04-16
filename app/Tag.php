<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function products()
    {
    	return $this->belongsToMany('App\Tag', 'product_tag', 'tag_id', 'product_id');
    }
}
