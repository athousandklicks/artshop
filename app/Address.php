<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['firstname','lastname','address1','address2','city','postcode','state','country','phone','email'];
}
