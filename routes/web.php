<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ==================FrontEnd======================
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('',[
    'as' => 'trang_chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('search1',[
    'as'=>'search1',
    'uses'=>'PageController@getSearch1'
]);

Route::get('search',[
    'as' =>'search',
    'uses' => 'PageController@getSearch'

]);

Route::get('foodtype/{type}',[
    'as' => 'foodtype',
    'uses' =>'PageController@getFoodType'
]);

Route::get('fooddetail/{detail}',[
    'as' => 'fooddetail',
    'uses' =>'PageController@getFoodDetail'
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'detail',
    'uses'=>'PageController@getDetailFood'
]);
 
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getShoppingCart'
]);

Route::get('add-to-cart-one/{id}',[
    'as'=>'themgiohangone',
    'uses'=>'PageController@getShoppingCartOne'
]);
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);

Route::get('dat-hang',[
    'as'=>'checkout',
    'uses'=>'PageController@getCheckout'
]);

Route::get('info',[
    'as'=>'info',
    'uses'=>'PageController@getInfo'
]);

Route::get('contact',[
    'as' =>'contact',
    'uses'=>'PageController@getContact'
]);

Route::get('bang-gia-ship-mon-an',[
    'as' =>'priceship',
    'uses'=>'PageController@getPriceShip'
]);

Route::get('khu-vuc-giao-hang',[
    'as' =>'areaship',
    'uses'=>'PageController@getAreaShip'
]);

Route::get('hinh-thuc-thanh-toan',[
    'as' =>'payment',
    'uses'=>'PageController@getPayMent'
]);
Route::post('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@postCheckout'
]);
Route::get('news',[
    'as' => 'news',
    'uses' => 'PageController@getNews'
]);


// ====================BackEnd=====================


// -------------------Admin------------------
Route::get('add-food',[
    'uses'=>'AdminController@getAddFood',
    'as' => 'add_food'
]);
Route::post('add-food',[
    'uses'=>'AdminController@postAddFood',
    'as' => 'addfood'
]);
Route::get('edit-food/{id}',[
    'as' =>'edit_food',
    'uses'=>'AdminController@getEditFood'
]);
Route::post('edit-food/{id}',[
    'as' =>'editfood',
    'uses'=>'AdminController@postEditFood'
]);
Route::get('list-food',[
    'as' =>'list_food',
    'uses'=>'AdminController@getListfood'
]);
Route::get('list-food/{id}',[
    'as' =>'listfood',
    'uses'=>'AdminController@getDeleteFood'
]);
Route::get('list-bill',[
    'as' =>'list-bill',
    'uses'=>'AdminController@getListbill'
]);
Route::get('detail-bill/{id}',[
    'as' =>'detail-bill',
    'uses'=>'AdminController@getdetailbill'
]);
Route::get('list-user',[
    'as' =>'list-user',
    'uses'=>'AdminController@getuser'
]);
Route::get('change-role/{id}',[
    'as' =>'change_role',
    'uses'=>'AdminController@getchangrole'
]);
Route::post('change-role/{id}',[
    'as' =>'changerole',
    'uses'=>'AdminController@postchangrole'
]);


//----------------User------------------
Route::get('change-pass/{id}',[
    'as' =>'changepass',
    'uses'=>'UserController@getchangepass'
]);
Route::post('change-pass/{id}',[
    'as' =>'change-pass',
    'uses'=>'UserController@postchangepass'
]);
Route::get('detail-acountus/{id}',[
    'as' =>'detailacount',
    'uses'=>'UserController@getdetailacount'
]);
Route::get('List-bill/{email}',[
    'as' =>'List-bill',
    'uses'=>'UserController@getListbill'
]);
Route::get('detail-Bill/{id}',[
    'as' =>'detailbill',
    'uses'=>'UserController@getdetailbill'
]);

//----------------Shipper------------------
Route::get('list-Bill',[
    'as' =>'list-Bill',
    'uses'=>'ShipperController@getListBill'
]);
Route::get('list_Bill/{name}',[
    'as' =>'list_Bill',
    'uses'=>'ShipperController@getListBillreceived'
]);
Route::post('list-Bill/{id}',[
    'as' =>'listBill',
    'uses' =>'ShipperController@postListBill'
]);
Route::post('list-Billre/{id}',[
    'as' =>'ListBillre',
    'uses' =>'ShipperController@postListBillRe'
]);
Route::get('detail-acount/{id}',[
    'as' =>'detail-acount',
    'uses'=>'ShipperController@getdetailacount'
]);
