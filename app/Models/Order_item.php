<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = ['quantity','order_id','product_id','flavors_id'];
}
