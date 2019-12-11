<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];
    
    public static $validationRules = [
        'name'     => 'required|unique:brands'
    ];

    public static $validationRulesMessages = [
        'required' => 'El campo :attribute es obligatorio.',
        'unique' => 'La marca introducida ya existe.'
    ];

    public function car_models() {
        return $this->hasMany('App\CarModel');
    }
    public function cars() {
        return $this->hasMany('App\Car');
    }
}
