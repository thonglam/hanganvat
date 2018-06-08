<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangDoAn extends Model
{
    protected $table = "dangdoan";

    public function monan(){
    	return $this->hasMany('app\MonAn','id_dang','id');
    }
}
