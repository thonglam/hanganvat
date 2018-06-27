<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
use App\User;
use Hash;
class UserController extends Controller
{
	function getListBill(){
		$stt =1;
		$foods = Bill::getall()->paginate(10);
		return view('user.listuser-bill',compact('stt'));
	}
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
}