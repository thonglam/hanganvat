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
    function postListBill(Request $request,$id)
    {
        $Bill = Bill::find($id);
        $Bill ->shipper = $request ->name;
        $Bill ->status = 1;
        $Bill->update();
        return redirect()->route('list-Bill');
    }
    function postListBillRe($id)
    {
        $Bill = Bill::find($id);
        $Bill ->status = 2;
        $Bill->update();
        return redirect()->route('list_Bill');
    }
    function getdetailacount($id)
    {
        $user = user::find($id);
        return view('shipper.shipper.detail-acount',compact('user'));
    }
}