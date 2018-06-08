<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\MonAn;
use App\DangDoAn;
use App\Cart;
use Session;

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

    public function getChiTietMonAn( Request $req){
        $monan = monan::where('id',$req->id)->first();

        $monan_tuongtu = monan::where('id_dang',$monan->id_dang)->paginate(6);
    	return view ('pages.chitietmonan',compact('monan','monan_tuongtu'));
    }

    public function getLienHe(){
    	return view ('pages.lienhe');
    }

    public function getGioiThieu(){
    	return view ('pages.gioithieu');
    }

    public function getThemGioHang(Request $req, $id){

        $monan_giohang = monan::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($monan_giohang, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();

    }
}
