<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function flavor()
    {
        return $this->hasMany('App\Models\Flavor', 'category_id', 'category_id');
    }
}
