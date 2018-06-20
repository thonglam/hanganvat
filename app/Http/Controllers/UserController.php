<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
class UserController extends Controller
{
	function getListBill(){
        $stt =1;
        $foods = Bill::getall()->paginate(10);
        return view('user.listuser-bill',compact('stt'));
    }
}