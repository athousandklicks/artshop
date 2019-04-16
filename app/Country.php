<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $table = 'countries';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
