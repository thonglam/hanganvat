<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = "food_type";

    public function foods(){
    	return $this->hasMany('app\Foods','id_type','id');
    }
}
