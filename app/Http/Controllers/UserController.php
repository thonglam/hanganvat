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
	function getListbill(){
        $stt =1;
        $all = Bill::all();
        return view('user.user.list-bill',compact('all','stt'));
    }
    function getdetailacount($id)
    {
    	$user = user::find($id);
    	return view('user.user.detail-acount',compact('user'));
    }
}