<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    protected $table = "monan";

    public function dangdoan(){
    	return $this->belongsTo('App\DangDoAn','id_dang','id');
    }

    public function chitiethoadon(){
    	return $this->hasMany('App\ChiTietHoaDon','id_monan','id');
    }
}
