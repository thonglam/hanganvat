<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;
use Auth;
use App\Foods;
use App\FoodType;
use App\PageUrl;
use App\Functions;
class AdminController extends Controller
{
    function getRegister(){
        return view('admin.register');
    }
    function postRegister(Request $req){
        $check = [
            'fullname'=>'required|max:50',
            'email'=>'required|max:50|email|unique:users',
            'username'=>'required|max:50|unique:users',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone'=>'required|numeric'
        ];
        $mess = [
            'fullname.required'=>'Vui lòng nhập họ tên',
            'fullname.max'=>'Họ tên không quá :max kí tự',
            'password.min'=>'Password ít nhất :min kí tự',
            'email.unique'=>'Email đã có người sử dụng'
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
                        ->route('dang_ki')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = new User();
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->role = 'user';
        $user->save();
        return redirect()->route('dang_nhap')->with([
            'success'=>'Đăng kí thành công'
        ]);
    }
    function getLogin(){
        return view('admin.login');
    }
    function postLogin(Request $req){
        Auth::attempt([
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        if(Auth::check()) 
            return redirect()->route('trang_chu');
        return redirect()->route('dang_nhap')->with([
            'error'=>'Sai thông tin đăng nhập'
        ]);
        
    }
    function getLogout(){
        Auth::logout();
        return redirect()->route('dang_nhap')->with([
            'success'=>'Đăng xuất thành công'
        ]);
    }
    function getHomePage(){
        $foods = Foods::with('foodType','pageUrl')
                ->where('deleted',0)
                ->paginate(10);
        return view('pages/home',compact('foods'));
    }
    function getEditFood($id, $alias){
        $types = FoodType::all();   
        $food = Foods::where([
            'id'=>$id
        ])->first();
        return view('admin.edit-food', compact('food','types'));
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
            $food->update_at = date('Y-m-d',time());
            $food->unit = $req->unit;
            $food->today = $req->today==1 ? 1 : 0;
            if($req->hasFile('image')){
                //upload
                $file = $req->file('image');
        
                if($file->getSize() > 102400){
                    return redirect()->back()->with([
                        'error'=>'File quá lớn'
                    ]);
                }
                $arrExt = ['png','jpg','gif'];
                $ext = $file->getClientOriginalExtension(); //png
                if(!in_array($ext,$arrExt)){
                    return redirect()->back()->with([
                        'error'=>'File không được phép chọn'
                    ]);
                }
                $baseName = $file->getClientOriginalName();
                $newName = date('Y-m-d-H-i-m-').$baseName;
                $file->move('source/img/hinh_mon_an',$newName);
                $food->image = $newName;
            }
            $food->save();
            $idUrl = $food->id_url;
            $url = PageUrl::find($idUrl);
            $function = new Functions;
            $url->url = $function->changeTitle($req->name);
            $url->save();
            return redirect()->route('home')->with([
                'success'=>'Cập nhật thành công'
            ]);
        }
        return redirect()->back()->with([
            'error'=>'Không tìm thấy sản phẩm'
        ]);
    }

    function getDeleteFood(Request $req){
        $id = $req->id;
        $alias = $req->alias;
        $food = Foods::join('page_url',function($join) use($id,$alias){
                    $join->on('foods.id_url','=','page_url.id');
                    $join->where([
                        ['foods.id','=',$id],
                        ['url','=',$alias]
                    ]);
                })->first();
        if($food){
            $food->deleted = 1;
            $food->save();
            echo "success";
        }
        else echo "error";
    }
    function getAddFood(){
        $types = FoodType::all();
        return view('admin/add-food', compact('types'));
    }
}