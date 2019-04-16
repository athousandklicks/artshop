<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     public function products()
    {
    	return $this->hasMany(Product::class);
    	// return $this->belongsToMany('App\Product', 'product_type', 'type_id', 'product_id');
    }
}
