<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";
    public $timestamps = false;

    public function food(){
    	return $this->belongsTo('App\Foods','id_food','id');
    }

    public function bill(){
    	return $this->belongsTo('App\Bill','id_bill','id');
    }
}
