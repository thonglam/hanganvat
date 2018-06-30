<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use App\User;
use App\Foods;
use App\FoodType;
use App\Functions;
use App\Bill;
use App\BillDetail;
class ShipperController extends Controller
{
	function getListBill(){
        $stt =1;
        $bills = Bill::where('status',0)->get();
        return view('shipper.shipper.list-bill',compact('bills','stt'));
    }
    function getListBillreceived(){
        $stt =1;
        $bills = Bill::where('status',1)->get();
        return view('shipper.shipper.list-billreceived',compact('bills','stt'));
    }
}