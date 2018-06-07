<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\MonAn;

class PageController extends Controller
{
    public function getIndex(){

    	$slide = slide::all();

    	$new_monan = monan::where('new',1)->paginate(4);

    	$monan_giamgia = monan::where('giauudai','<>',0)->paginate(8);

    	return view('pages.trangchu',compact('slide','new_monan','monan_giamgia'));
    }

    public function getDangMonAn(){
    	return view('pages.dangmonan');
    }

    public function getChiTietMonAn(){
    	return view ('pages.chitietmonan');
    }

    public function getLienHe(){
    	return view ('pages.lienhe');
    }

    public function getGioiThieu(){
    	return view ('pages.gioithieu');
    }
}
