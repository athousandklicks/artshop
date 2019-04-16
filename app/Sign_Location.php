<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign_Location extends Model
{
	protected $table = 'sign_location';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
