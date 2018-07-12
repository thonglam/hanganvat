<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    public $timestamps = false;

    // public function billdetail(){
    // 	return $this->hasMany('App\BillDetail','id_bill','id');
    // }
}
