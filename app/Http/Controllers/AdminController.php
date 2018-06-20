<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\food;
use Validator;
use Hash;
use Auth;
use App\Foods;
use App\FoodType;
use App\PageUrl;
use App\Functions;
use App\Bill;
class AdminController extends Controller
{
    function getEditFood($id){ 
        $type = FoodType::all();
        $food = Foods::where(['id'=>$id])->first();
        return view('admin.edit-food', compact('food','type'));
    }
    function postEditFood(Request $req){
        $id = $req->id;
        $food = Foods::find($id);
        if($food){
            $name = $req->name;
        
            $foodCheck = Foods::where([
                ['id','<>',$id],
                ['name','=',$name]
            ])->first();
            //dd($foodCheck);
            if(!empty($foodCheck)){
                return redirect()->route('home')->with([
                    'error'=>'Tên món ăn tồn tại'
                ]);
            }
            $food->name = $req->name;
            $food->id_type = $req->id_type;
            $food->summary = $req->summary;
            $food->detail = $req->detail;
            $food->price = $req->price;
            $food->promotion_price = $req->promotion_price;
            $food->promotion = $req->promotion;
            $food->unit = $req->unit;
            $food->today = $req->today==1 ? 1 : 0;
            $food->new = $req->new==1 ? 1 : 0;
            if($req->hasFile('image')){
                //upload
                $file_name = $req->file('image')->getClientOriginalName();
                $req->file('image')->move('upload',$file_name);

                $food->image = $file_name;
            }
            $food->save();
            return redirect()->route('list_food')->with([
                'success'=>'Cập nhật thành công'
            ]);
        }
        return redirect()->back()->with([
            'error'=>'Không tìm thấy sản phẩm'
        ]);
    }

    function getDeleteFood($id){
        $food = Foods::find($id);
        $food->delete();
        return redirect()->route('list_food');
    }
    function getAddFood(){
        $types = FoodType::all();
        return view('admin.add-food', compact('types'));
    }
    function postAddFood(Request $req){
        $food = new Foods();
        $food->name = $req->name;
        $food->id_type = $req->id_type;
        $food->price = $req->price;
        $food->promotion_price = $req->promotion_price;
        $food->unit = $req->unit;
        $food->promotion = $req->promotion;
        $food->summary = $req->summary;
        $food->detail = $req->detail;
        if($req->hasFile('image')){
            $file_name = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('upload',$file_name);

            $food->image = $file_name;      
        }
        $food->new = $req->new;
        $food->today = $req->today;
        $food->save();
        return redirect()->route('add_food')->with([
            'success'=>'Thêm món ăn mới thành công'
        ]);
    }

    function getListFood(){
        $stt =1;
        $foods = Foods::with('foodType')->get();
        return view('admin.list-food',compact('foods','stt'));
    }
    function getlistbill(){
        $stt =1;
        $bill = Bill::all();
        return view('admin.list-bill',compact('bill','stt'));
    }
}