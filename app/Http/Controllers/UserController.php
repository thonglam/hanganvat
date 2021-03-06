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
class UserController extends Controller
{
	function getchangepass($id)
	{
		$user = User::find($id);
		return view('user.user.change-pass',compact('user'));
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
            ->route('changepass',$req->id)
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
		return redirect('/');
	}
	function getListbill($email){
        $stt =1;
        $all = Bill::where('email','=',$email)->get();
        return view('user.user.list-bill',compact('all','stt'));
    }
    function getdetailacount($id)
    {
    	$user = user::find($id);
    	return view('user.user.detail-acount',compact('user'));
    }
     function getdetailbill($id){
        $stt =1;
        $bills = Bill::find($id);
        return view('user.user.bill-detail',compact('bills','stt'));
    }
}