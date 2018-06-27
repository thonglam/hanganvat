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

Route::post('dat-hang',[
    'as' => 'dathang',
    'uses'=>'PageController@postCheckout'

]);

Route::get('news/{id}',[
    'as' => 'news',
    'uses' => 'PageController@getNews'
]);


// ====================BackEnd=====================


// -------------------Admin------------------
Route::get('/admin', function(){
    return view('admin.masteradmin');
});
Route::get('/user', function(){
    return view('index_dbuser');
});
Route::get('/shipper', function(){
    return view('index_dbshipper');
});
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


//----------------User------------------
Route::get('change-pass/{id}',[
    'as' =>'changepass',
    'uses'=>'UserController@getchangepass'
]);
Route::post('change-pass/{id}',[
    'as' =>'change-pass',
    'uses'=>'UserController@postchangepass'
]);
