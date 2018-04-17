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
    return view('welcome');
});

Route::get('trang-chu',['as' => 'trang-chu', 'uses' => 'PageController@getTrangchu']);
Route::get('quy-dinh',['as' => 'quy-dinh', 'uses' => 'PageController@getQuydinh']);

Route::get('dang-ky-khach',['as'=>'dang-ky-khach', 'uses'=> 'PageController@getDangkykhach']);
Route::post('dang-ky-khach',['as'=>'dang-ky-khach', 'uses'=> 'PageController@postDangkykhach']);

Route::get('dang-ky-hdv',['as'=>'dang-ky-hdv', 'uses'=> 'PageController@getDangkyhdv']);
Route::post('dang-ky-hdv',['as'=>'dang-ky-hdv', 'uses'=> 'PageController@postDangkyhdv']);

Route::get('dang-nhap',['as'=>'dang-nhap', 'uses'=> 'PageController@getDangnhap']);
Route::post('dang-nhap',['as'=>'dang-nhap', 'uses'=> 'PageController@postDangnhap']);

Route::get('dang-xuat',['as'=>'dang-xuat', 'uses'=> 'PageController@getDangxuat']);

Route::group(['prefix'=>'admin'],function(){
	Route::get('trang-chu',['as'=>'trang-chu-admin', 'uses'=> 'AdminController@trangchu']);
	
	//quan ly nguoi dung
	Route::get('dskhach',['as'=>'dskhach1', 'uses'=> 'AdminController@getDSkhach']);
	Route::get('xoakhach/{idk}',['as'=>'xoakhach1', 'uses'=> 'AdminController@Xoakhach']);
	Route::get('dshdv',['as'=>'dshdv1', 'uses'=> 'AdminController@getDShdv']);
	Route::get('xoahdv/{idhdv}',['as'=>'xoahdv1', 'uses'=> 'AdminController@Xoahdv']);

	//Quan ly dia diem du lich
	Route::get('dsdd',['as'=>'dsdd1', 'uses'=> 'AdminController@getDSdd']);
	Route::get('themdd',['as'=>'themdd1', 'uses'=> 'AdminController@Themdd']);
	Route::post('themdd',['as'=>'themdd1', 'uses'=> 'AdminController@postThemdd']);

	Route::get('suadd/{iddd}',['as'=>'suadd1', 'uses'=> 'AdminController@Suadd']);
	Route::post('suadd/{iddd}',['as'=>'suadd1', 'uses'=> 'AdminController@postSuadd']);

	Route::get('xoadd/{iddd}',['as'=>'xoadd1', 'uses'=> 'AdminController@Xoadd']);

});

