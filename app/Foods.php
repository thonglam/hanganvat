<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
	public $timestamps = false;
    protected $table = "foods";

    public function foodtype(){
    	return $this->belongsTo('App\FoodType','id_type','id');
    }

    public function billdetail(){
    	return $this->hasMany('App\BillDetail','id_food','id');
    }
}
