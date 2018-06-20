<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;
use DB;
use App\FoodType;
use App\Cart;
use App\Bill;
use App\BillDetail;
use Session;

class PageController extends Controller
{
    

    public function getXoaGioHang($id){

        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }

        else{
            Session::forget('cart');
        }
        
        return redirect()->back();
    }

   
    public function getIndex(){
        $new_food = Foods::where('today',1)->get();
        //$allFood = Foods::all()->paginate(1);
        // dd($allFood);
        $allFood = DB::table('foods')->paginate(12);
        return view('pages.trangchu',compact('new_food','allFood'));
    }
    
    function getSearch1(Request $req){
        $food = DB::table('foods')->where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
        return view('pages.search1',compact('food'));
    }

    function getSearch(Request $req){
        $food = DB::table('foods')->where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
        return view('pages.search',compact('food'));
    }


    public function getFoodType($type){

        $sp_theoloai = foods::where('id_type',$type)->get();

        return view('pages.foodtype',compact('sp_theoloai'));
    }

    // public function getLoaisp($type){

    //      $sp_theoloai = foods::where('id_type',$type)->get();
    //     return view('pages.loai_sanpham',compact('sp_theoloai'));
    // }



    // public function getTypeFood($type){
    //     $sp_theoloai = foods::where('id_type',$type)->get();
    //     $sp_khac = foods::where('id_type','<>',$type)->paginate(3);
    //     $loai = foodsType::all();
    //     $loap_sp = FoodType::where('id',$type)->first();
    //     return view('pages.typefood',compact('sp_theoloai','sp_khac','loai','loap_sp'));
    // }
    function getDetailFood($id){
        $food = foods::where('id',$id)->first();

        $sp_tuongtu = foods::where('id_type', $food->id_type)->paginate(5);
        
        // dd($food);
        // $sp_tuongtu =foodType::with('foods')->get();
        // foreach($sp_tuongtu as $type){
        //      $type->id;
        //     $type->name;
        //     foreach($type->foods as $food){
        //        $food->name;
        //     }
        // }
        // $sp_tuongtu = Foods::where('id_type',$id)->get();
        // dd($sp_tuongtu);   

        return view('pages.detail',compact('food','sp_tuongtu'));

        
        
    }
    function getShoppingCart(Request $req,$id){
        $product = foods::find($id);



        $oldCart = Session('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
        //return view('pages.shoppingcart',compact('ds'));
        // return view('pages.shoppingcart');
    }

     
    
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    // public function getCheckout(){
    //     return view('pages.shoppingcart');
    // }

      function getCheckout(){
        return view('pages.checkout');
    }


    function getInfo(){
        return view('pages.info');
    }
    function getContact(){
        return view('pages.contact');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
       

        $customer_bill = new Bill;

        $customer_bill->name = $req->name;

        $customer_bill->address= $req->address;

        $customer_bill->phone = $req->phone;

        $customer_bill->date_order = date('Y-m-d');

        $customer_bill->toal = $cart->totalPrice;

        $customer_bill->payment_method = $req->payment_method;

        $customer_bill->save();


        foreach($cart->items as $key => $value ){

            $bill_detail = new BillDetail;

            $bill_detail->id_bill = $customer_bill->id;

            $bill_detail->id_food  = $key;

            $bill_detail->quantity = $value['qty'];


            $bill_detail->price = ($value['price']/$value['qty']);

            $bill_detail->save();

        }   

        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');


    }
}
