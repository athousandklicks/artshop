<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';

   	public function products()
    {
        return $this->hasMany(Product::class);
    }
}
