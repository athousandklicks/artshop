<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }

    public function frames()
    {
        return $this->belongsTo(Frame::class);
    }

    public function hangs()
    {
        return $this->belongsTo(Hang::class);
    }

    public function signs()
    {
        return $this->belongsTo(Sign::class);
    }

    public function sign_locations()
    {
        return $this->belongsTo(Sign_Location::class);
    }

    public function supports()
    {
        return $this->belongsTo(Support::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class);
        // return $this->belongsToMany('App\Type', 'product_type', 'product_id', 'type_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'product_tag', 'product_id', 'tag_id');
    }

    public function styles()
    {
        return $this->belongsToMany('App\Style', 'product_style', 'product_id', 'style_id');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'product_subject', 'product_id', 'subject_id');
    }

    public function mediums()
    {
        return $this->belongsToMany('App\Medium', 'medium_product', 'product_id', 'medium_id');
    }


}
