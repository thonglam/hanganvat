<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public $timestamps = false;

    public function billdetail(){
    	return $this->hasMany('App\BillDetail','id_bill','id');
    }
}
