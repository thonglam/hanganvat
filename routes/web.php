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

Route::get('/', function () {
    return view('page/trangchu');
});

Route::get('index',[

	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('dang-doan',[

	'as'=>'dangdoan',
	'uses'=>'PageController@getDangMonAn'
]);

Route::get('chi-tiet-mon-an/{id}',[

	'as'=>'chitietmonan',
	'uses'=>'PageController@getChiTietMonAn'
]);

Route::get('lien-he',[

	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[

	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('them-gio-hang/{id}',[
	'as' => 'themgiohang',
	'uses' => 'PageController@getThemGioHang'

]);

