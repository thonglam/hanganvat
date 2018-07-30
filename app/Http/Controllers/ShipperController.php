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
    function getListBillreceived($name){
        $stt =1;
        $bills = Bill::where([['status',1],['shipper',$name],])->get();
        return view('shipper.shipper.list-billreceived',compact('bills','stt'));
    }
    function postListBill(Request $request,$id)
    {
        $Bill = Bill::find($id);
        $Bill ->shipper = $request ->name;
        $Bill ->status = 1;
        $Bill->update();
        return redirect()->back()->with(['flash_massage'=>'Nhận hóa đơn thành công']);
    }
    function postListBillRe($id)
    {
        $Bill = Bill::find($id);
        $Bill ->status = 2;
        $Bill->update();
        return redirect()->back()->with(['flash_massage'=>'Trả hóa đơn thành công']);
    }
    function getdetailacount($id)
    {
        $user = user::find($id);
        return view('shipper.shipper.detail-acount',compact('user'));
    }
    function getchangepass($id)
    {
        $user = User::find($id);
        return view('shipper.shipper.change-pass',compact('user'));
    }
    function postchangepass(Request $req,$id)
    {
        $check = [
            'name'=>'required',
            'password'=>'required|min:6',
            'password_confirmation'=>'same:password|required',
        ];
        $mess = [
            'name.required'=>'Không được để trống tên',
            'password.required'=>'Chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu quá ngắn',
            'password_confirmation.same'=>'Mật khẩu không giống nhau',
            'password_confirmation.required'=>'Chưa có mật khẩu nhập lại',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
            ->route('changepass1',$req->id)
            ->withErrors($validator)
            ->withInput();
        }
        $id = $req->id;
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        
        if($req->password == $req->password_confirmation){
            $user->password = Hash::make($req->password);
        }
        $user->update();
        return redirect()->route('detail-acount',$req->id)->with(['flash_massage'=>'Cập nhật thành công']);
    }
}