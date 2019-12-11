<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand_id',
        'car_model_id', 
        'description', 
        'year', 
        'description', 
        'price_usd', 
        'image',
        'status',
        'rating'
    ];
    function brand() {
        return $this->belongsTo('App\Brand');
    }
    function car_model() {
        return $this->belongsTo('App\CarModel');
    }
}
