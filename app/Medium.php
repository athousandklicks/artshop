<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    protected $table = 'mediums';

     public function products()
    {
    	return $this->belongsToMany('App\Medium', 'medium_product', 'medium_id', 'product_id');
    }
}
