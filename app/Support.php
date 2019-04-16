<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
