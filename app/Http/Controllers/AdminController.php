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
class AdminController extends Controller
{
    function getEditFood($id){ 
        $type = FoodType::all();
        $food = Foods::where(['id'=>$id])->first();
        return view('admin.admin.edit-food', compact('food','type'));
    }
    function postEditFood(Request $req){
        $check = [
            'price'=>'digits_between:0,999999',
            'promotion_price'=>'digits_between:0,999999',
        ];
        $mess = [
            'price.digits_between'=>'Giá không được phép âm và phải là số',
            'promotion_price.digits_between'=>'Giá khuyến mãi không được phép âm và phải là số',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
                        ->route('edit_food',$req->id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $id = $req->id;
        $food = Foods::find($id);
        $food->name = $req->name;
        $food->id_type = $req->id_type;
        $food->detail = $req->detail;
        $food->price = $req->price;
        $food->promotion_price = $req->promotion_price;
        $food->unit = $req->unit;
        $food->today = $req->today==1 ? 1 : 0;
        $food->new = $req->new==1 ? 1 : 0;
        if($req->hasFile('image')){
            $file_name = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('upload',$file_name);

            $food->image = $file_name;
        }
        $food->save();
        return redirect()->route('list_food')->with(['flash_massage'=>'Cập nhật món ăn thành công']);
    }

    function getDeleteFood($id){
        $merg = BillDetail::where('id_food',$id)->count();
        if ($merg == 0) {
            $food = Foods::find($id);
        $food->delete();
        return redirect()->route('list_food')->with(['flash_massage'=>'Xóa món ăn thành công']);
        }else {
            echo "<script typye='text/javascrpit'>
                alert('Bạn không thể xóa món ăn vì nó có trong hóa đơn');
                window.location = '";
                    echo route('list_food');
            echo "'
            </script>";
        }
        
    }
    function getAddFood(){
        $types = FoodType::all();
        return view('admin.admin.add-food', compact('types'));
    }
    function postAddFood(Request $req){
        $check = [
            'price'=>'digits_between:0,999999',
            'promotion_price'=>'digits_between:0,999999',
        ];
        $mess = [
            'price.digits_between'=>'Giá không được phép âm và phải là số',
            'promotion_price.digits_between'=>'Giá khuyến mãi không được phép âm và phải là số',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
                        ->route('add_food')
                        ->withErrors($validator)
                        ->withInput();
        }
        $food = new Foods();
        $food->name = $req->name;
        $food->id_type = $req->id_type;
        $food->price = $req->price;
        $food->promotion_price = $req->promotion_price;
        $food->unit = $req->unit;
        $food->detail = $req->detail;
        if($req->hasFile('image')){
            $file_name = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('upload',$file_name);

            $food->image = $file_name;      
        }else
            $food->image = '';
        $food->new = $req->new;
        $food->today = $req->today;
        $food->save();
        return redirect()->route('add_food')->with(['flash_massage'=>'Thêm món ăn mới thành công']);
    }

    function getListFood(){
        $stt =1;
        $foods = Foods::with('foodType')->get();
        return view('admin.admin.list-food',compact('foods','stt'));
    }
    function getListbill(){
        $stt =1;
        $all = Bill::all();
        return view('admin.admin.list-bill',compact('all','stt'));
    }
    function getdetailbill($id){
        $stt =1;
        $bills = Bill::find($id);
        return view('admin.admin.bill-detail',compact('bills','stt'));
    }
    function getuser(){
        $stt = 1;
        $users = User::all();
        return view('admin.admin.list-user', compact('users','stt'));
    }
    function getchangrole($id)
    {
        $user = User::find($id);
        return view('admin.admin.edit-user',compact('user'));
    }
    function postchangrole(Request $req,$id)
    {
        $id = $req->id;
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->update();
        return redirect()->route('list-user')->with(['flash_massage'=>'Thay đổi quyền thành công']);
    }
}