<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;
use DB;
use App\FoodType;
use App\Cart;
use App\Bill;
use App\BillDetail;
use App\News;
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

        $loai = FoodType::all();
        return view('pages.trangchu',compact('new_food','allFood','loai'));


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

        // $sp_khac = foods::where('id_type','<>',$type)->paginate(3);

        $loai = FoodType::all();

        return view('pages.foodtype',compact('sp_theoloai','loai'));
    }

    public function getFoodDetail($detail){

        $sp_theodetail = foods::where('fooddetail',$detail)->get();

        // $sp_khac = foods::where('id_type','<>',$type)->paginate(3);

        $loai = FoodType::all();

        return view('pages.fooddetail',compact('sp_theodetail','loai'));
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

        $sp_tuongtu = foods::where('id_type', $food->id_type)->paginate(3);



        
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

        return view('pages.detail',compact('food','sp_tuongtu','sp_khac'));

        
        
    }
    function getShoppingCart(Request $req,$id){
        $product = foods::find($id);



        $oldCart = Session('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $quantity = $req->quantity;
        //dd($req->quantity);
        $cart->add($product, $id , $quantity);
        $req->session()->put('cart',$cart);
        return redirect()->back();
        //return view('pages.shoppingcart',compact('ds'));
        // return view('pages.shoppingcart');
    }

    function getShoppingCartOne(Request $req,$id){
        $product = foods::find($id);



        $oldCart = Session('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->addone($product, $id);
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

    public function getCheckout(){
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
        // dump($cart); die;
            return view('pages.checkout',['monan_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
    }

    //   function getCheckout(){

    //     return view('pages.checkout');
    // }


    function getInfo(){
        return view('pages.info');
    }


    function getContact(){
        return view('pages.contact');
    }

    function getPriceShip(){
        return view('pages.priceship');
    }

    function getPayMent(){
        return view('pages.payment');
    }

     function getAreaShip(){
        return view('pages.areaship');
    }



    public function postCheckout(Request $req){
        $cart = Session::get('cart');


        $customer_bill = new Bill;

        $customer_bill->name = $req->name;

        $customer_bill->email = $req->email;

        $customer_bill->address= $req->address;

        $customer_bill->phone = $req->phone;

        $customer_bill->shipper = $req->shipper;

        $customer_bill->date_order = date('Y-m-d');

        $customer_bill->total = $cart->totalPrice;

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
        return redirect()->back()->with('thongbao', 'Qúy khách đã đặt món ăn thành công');

         
    }

    public function getNews()
    {
        $news = news::all();

        return view('pages.news',compact('news'));
    }

}
