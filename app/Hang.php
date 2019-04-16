<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hang extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
