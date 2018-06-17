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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('',[
    'as' => 'trang_chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);
Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'detail',
    'uses'=>'PageController@getDetailFood'
]);
Route::get('loai-san-pham/{$type}',[
    'as'=>'typefood',
    'uses'=>'PageController@getTypeFood'
]); 
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getShoppingCart'
]);
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
    'as'=>'dathang',
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

 // Route::controller([
 //    'auth'=> 'Auth\AuthController',
 //    'password' => 'Auth\PasswordController',
 // ]);