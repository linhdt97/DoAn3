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

Route::get('chi-tiet-{idtour}',['as' => 'chitiet', 'uses' => 'PageController@getChitiet']);

Route::get('dia-diem-{iddd}',['as'=>'diadiem', 'uses'=>'PageController@getDiadiem']);

//dat tour
Route::get('dat-tour-{idtour}',['as' => 'dattour', 'uses' => 'PageController@getDattour']);
Route::post('dat-tour-{idtour}',['as' => 'dattour', 'uses' => 'PageController@postDattour']);

Route::get('thong-tin-hdv-{idhdv}',['as' => 'tthdv', 'uses' => 'PageController@getThongtinHDV']);
Route::get('tour-cua-hdv-{idhdv}',['as' => 'tour_hdv', 'uses' => 'PageController@getTourOfHdv']);

//dang ky
Route::get('dang-ky-khach',['as'=>'dang-ky-khach', 'uses'=> 'PageController@getDangkykhach']);
Route::post('dang-ky-khach',['as'=>'dang-ky-khach', 'uses'=> 'PageController@postDangkykhach']);

Route::get('dang-ky-hdv',['as'=>'dang-ky-hdv', 'uses'=> 'PageController@getDangkyhdv']);
Route::post('dang-ky-hdv',['as'=>'dang-ky-hdv', 'uses'=> 'PageController@postDangkyhdv']);

Route::get('dang-nhap',['as'=>'dang-nhap', 'uses'=> 'PageController@getDangnhap']);
Route::post('dang-nhap',['as'=>'dang-nhap', 'uses'=> 'PageController@postDangnhap']);

Route::get('dang-xuat',['as'=>'dang-xuat', 'uses'=> 'PageController@getDangxuat']);

//Route::get('binh-luan-{idtour}',['as'=>'binh-luan', 'uses'=> 'PageController@getBinhluan']);
Route::post('binh-luan-{idtour}',['as'=>'binh-luan', 'uses'=> 'PageController@postBinhluan']);

//xem va sua thong tin ca nhan
Route::get('thong-tin-ca-nhan',['as'=>'thong-tin-ca-nhan', 'uses' => 'PageController@getThongtincanhan']);
Route::get('sua-thong-tin',['as'=>'sua-thong-tin', 'uses'=>'PageController@getSuaThongtin']);
Route::post('sua-thong-tin',['as'=>'sua-thong-tin', 'uses'=>'PageController@postSuaThongtin']);

//tim kiem
Route::get('tim-kiem',['as'=>'tim-kiem','uses' => 'PageController@postTimkiem']);

//--------------------HDV------------------
Route::group(['prefix'=>'hdv'], function(){
	Route::get('trang-chu',['as' => 'trang-chu-hdv', 'uses'=>'HdvController@trangchu']);

	Route::get('dstour',['as'=>'dstour', 'uses'=>'HdvController@getDanhsachtour']);

	Route::get('themtour',['as'=>'themtourthemtour', 'uses'=>'HdvController@getThemtour']);
	Route::post('themtour',['as'=>'themtour', 'uses'=>'HdvController@postThemtour']);
	Route::get('suatour/{idtour}',['as'=>'suatour', 'uses'=>'HdvController@getSuatour']);
	Route::post('suatour/{idtour}',['as'=>'suatour', 'uses'=>'HdvController@postSuatour']);
	Route::get('xoatour/{idtour}',['as'=>'xoatour', 'uses'=>'HdvController@getXoatour']);

	Route::get('dsdontour',['as'=>'dsdontour', 'uses'=>'HdvController@getDSdontour']);
	Route::get('dsdontourmoi',['as'=>'dsdontourmoi', 'uses'=>'HdvController@getDSdontourmoi']);
	Route::get('cndontour/{idd}',['as'=>'chapnhan', 'uses'=>'HdvController@getChapnhandon']);
	Route::get('tcdontour/{idd}',['as'=>'tuchoi', 'uses'=>'HdvController@getTuchoidon']);

	Route::get('dsdontoucn',['as'=>'dsdontourcn', 'uses'=>'HdvController@getDSdontourcn']);
	Route::get('dsdontourtc',['as'=>'dsdontourtc', 'uses'=>'HdvController@getDSdontourtc']);
});







//------------------ADMIN------------------
Route::group(['prefix'=>'admin'],function(){
	Route::get('trang-chu',['as'=>'trang-chu-admin', 'uses'=> 'AdminController@trangchu']);
	
	//quan ly nguoi dung
	Route::get('dskhach',['as'=>'dskhach1', 'uses'=> 'AdminController@getDSkhach']);
	Route::get('xoakhach/{idk}',['as'=>'xoakhach1', 'uses'=> 'AdminController@Xoakhach']);
	Route::get('dshdv',['as'=>'dshdv1', 'uses'=> 'AdminController@getDShdv']);
	Route::get('xoahdv/{idhdv}',['as'=>'xoahdv1', 'uses'=> 'AdminController@Xoahdv']);
	Route::get('chapnhan/{idhdv}',['as'=>'cnhdv1', 'uses'=> 'AdminController@ChapnhanHdv']);

	//Quan ly dia diem du lich
	Route::get('dsdd',['as'=>'dsdd1', 'uses'=> 'AdminController@getDSdd']);
	Route::get('themdd',['as'=>'themdd1', 'uses'=> 'AdminController@Themdd']);
	Route::post('themdd',['as'=>'themdd1', 'uses'=> 'AdminController@postThemdd']);

	Route::get('suadd/{iddd}',['as'=>'suadd1', 'uses'=> 'AdminController@Suadd']);
	Route::post('suadd/{iddd}',['as'=>'suadd1', 'uses'=> 'AdminController@postSuadd']);

	Route::get('xoadd/{iddd}',['as'=>'xoadd1', 'uses'=> 'AdminController@Xoadd']);

});

