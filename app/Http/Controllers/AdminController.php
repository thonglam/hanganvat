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
use App\News;
class AdminController extends Controller
{
    function getEditFood($id){ 
        $type = FoodType::all();
        $food = Foods::where(['id'=>$id])->first();
        return view('admin.admin.edit-food', compact('food','type'));
    }
    function postEditFood(Request $req){
         $check = [
            'name'=>'required',
            'detail'=>'required',
            'price'=>'min:0|required|numeric|integer',
            'promotion_price'=>'min:0|required|numeric|integer',
            'unit'=>'required',
        ];
        $mess = [
            'name.required'=>'Không được để trống tên',
            'price.required'=>'Không được để trống giá',
            'price.numeric'=>'Giá không phải là số',
            'price.min'=>'Giá không được phép âm',
            'price.integer'=>'Giá phải là số nguyên',
            'promotion_price.required'=>'Không được để trống giá khuyến mãi',
            'promotion_price.numeric'=>'Giá khuyến mãi không phải là số',
            'promotion_price.min'=>'Giá khuyến mãi không được phép âm',
            'promotion_price.integer'=>'Giá khuyến mãi phải là số nguyên',
            'unit.required'=>'Không được để trống đơn vị tính',
            'detail.required'=>'Không được để trống mô tả',
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
            alert('Bạn không thể xóa món ăn vì món ăn tồn tại trong hóa đơn');
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
            'name'=>'required',
            'detail'=>'required',
            'price'=>'min:0|required|numeric|integer',
            'promotion_price'=>'min:0|required|numeric|integer',
            'unit'=>'required',
            'image'=>'required'
        ];
        $mess = [
            'name.required'=>'Không được để trống tên',
            'price.required'=>'Không được để trống giá',
            'price.numeric'=>'Giá không phải là số',
            'price.min'=>'Giá không được phép âm',
            'price.integer'=>'Giá phải là số nguyên',
            'promotion_price.required'=>'Không được để trống giá khuyến mãi',
            'promotion_price.numeric'=>'Giá khuyến mãi không phải là số',
            'promotion_price.min'=>'Giá khuyến mãi không được phép âm',
            'promotion_price.integer'=>'Giá khuyến mãi phải là số nguyên',
            'unit.required'=>'Không được để trống đơn vị tính',
            'detail.required'=>'Không được để trống mô tả',
            'image.required'=>'Chưa chọn hình ảnh',
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
        $food->today = $req->today==1 ? 1 : 0;
        $food->new = $req->new==1 ? 1 : 0;
        $food->save();
        return redirect()->route('list_food')->with(['flash_massage'=>'Thêm món ăn mới thành công']);
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
    function getListbillre(){
        $stt =1;
        $all = Bill::where('status',0)->get();
        return view('admin.admin.list-billre',compact('all','stt'));
    }
    function getListbillen(){
        $stt =1;
        $all = Bill::where('status',2)->get();
        return view('admin.admin.list-billen',compact('all','stt'));
    }
    function getdetailbill($id){
        $stt =1;
        $bills = Bill::find($id);
        return view('admin.admin.bill-detail',compact('bills','stt'));
    }
    function getuser(){
        $stt = 1;
        $id = Auth::user()->id;
        $users = User::where('id','<>',$id)->get();
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
    function getListNew(){
        $stt =1;
        $news = News::all();
        return view('admin.admin.list-new',compact('news','stt'));
    }
    function getAddNews()
    {
        return view('admin.admin.add-new');
    }
    function postAddNews(Request $req)
    {
        $check = [
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'content'=>'required',
        ];
        $mess = [
            'title.required'=>'Không được để trống tiêu đề',
            'description.required'=>'Không được để trống mô tả',
            'image.required'=>'Chưa có hình ảnh',
            'content.required'=>'Không được để trống nội dung',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
            ->route('addnew')
            ->withErrors($validator)
            ->withInput();
        }
        $new = new News();
        $new->title = $req->title;
        $new->description = $req->description;
        if($req->hasFile('image')){
            $file_name = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('upload',$file_name);

            $new->image = $file_name;      
        }else
        $new->image = '';
        $new->content = $req->content;

        $new->save();
        return redirect()->back()->with(['flash_massage'=>'Thêm tin tức thành công']);
    }
    function getDeleteNew($id)
    {
        $new = News::find($id);
        $new->delete();
        return redirect()->back()->with(['flash_massage'=>'Xóa bài viết thành công']);
    }
    function getEditNew($id)
    { 
        $new = News::where(['id'=>$id])->first();
        return view('admin.admin.edit-new', compact('new'));
    }
    function postEditNew(Request $req){
        $check = [
            'title'=>'required',
            'description'=>'required',
            'content'=>'required',
        ];
        $mess = [
            'title.required'=>'Không được để trống tiêu đề',
            'description.required'=>'Không được để trống mô tả',
            'content.required'=>'Không được để trống nội dung',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()) {
            return redirect()
            ->route('edit_new',$req->id)
            ->withErrors($validator)
            ->withInput();
        }
        $id = $req->id;
        $new = News::find($id);
        $new->title = $req->title;
        $new->description = $req->description;
        $new->content = $req->content;
        if($req->hasFile('image')){
            $file_name = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('upload',$file_name);

            $new->image = $file_name;
        }
        $new->save();
        return redirect()->route('list-new')->with(['flash_massage'=>'Cập nhật bài viết thành công']);
    }

    function statistic(Request $request){
        $stt =1;
        $all =  Bill::select('*');
        if($request->time1){
            $all = $all->where('date_order','>=',$request->time1);
        }
        if($request->time2){
            $all  =  $all->where('date_order','<=',$request->time2);
        }
        $sum = $all->sum('total');
        $all = $all->get();
        return view('admin.admin.statistical',compact('all','stt','sum'));
    }
}