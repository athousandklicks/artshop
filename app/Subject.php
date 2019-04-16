<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     public function products()
    {
    	return $this->belongsToMany('App\Subject', 'product_subject', 'subject_id', 'product_id');
    }
}
