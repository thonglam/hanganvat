<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangDoAn extends Model
{
    protected $table = "dangmonan";

    public function monan(){
    	return $this->hasMany('app\MonAn','id_dang','id');
    }
}
