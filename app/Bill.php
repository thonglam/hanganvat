<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

     public function billdetail(){
    	return $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function bill(){
    	return $this->belongsTo('App\Customer','id_customer','id');
    }
}
