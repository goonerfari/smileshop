<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}