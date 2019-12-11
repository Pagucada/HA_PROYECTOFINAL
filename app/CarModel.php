<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['name', 'brand_id'];

    function cars() {
        return $this->hasMany('App\Car');
    }
    
    function brand() {
        return $this->belongsTo('App\Brand');
    }
}
