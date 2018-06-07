<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "chitiethoadon";

    public function monan(){
    	return $this->belongsTo('App\MonAn','id_monan','id');
    }

    public function hoadon(){
    	return $this->belongsTo('App\HoaDon','id_hoadon','id');
    }
}
