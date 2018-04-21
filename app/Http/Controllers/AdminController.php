<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Diadiem;
use App\Comment;
use App\Traloi;

class AdminController extends Controller
{
    public function trangchu(){
    	return view('admin.layout_admin.index');
    }

    public function getDSkhach(){
    	$dskhach = User::select('id','hoten','email','gioitinh','sodienthoai','diachi','namsinh')->where('quyen',1)->get();
    	return view('admin.page_admin.danhsachkhach', compact('dskhach'));
    }

    public function getDShdv(){
    	$dshdv = User::select('id','hoten','email','sodienthoai','diachi','status')->where('quyen',2)->get();
    	return view('admin.page_admin.danhsachhdv', compact('dshdv'));
    }

    public function getDSdd(){
    	$dsdd = Diadiem::select('id','tendiadiem')->get();
    	return view('admin.page_admin.danhsachdiadiem', compact('dsdd'));
    }

    public function Themdd(){
    	return view('admin.page_admin.themdiadiem');
    }

    public function postThemdd(Request $request){
    	$this-> validate($request,
    		[
    			'tendiadiem'=>'required|unique:diadiem,tendiadiem'
    		],
    		[
    			'tendiadiem.required'=>'Vui long nhap ten dia diem',
    			'tendiadiem.unique'=>'Dia diem nay da co trong danh sach dia diem'
    		]);
    	$dd = new Diadiem();
    	$dd->tendiadiem = $request->tendiadiem;
    	$dd->save();
    	return redirect()->back()->with('thanhcong','Them dia diem thanh cong');
    }

    public function Suadd($iddd){
    	$dd = Diadiem::find($iddd);
    	return view('admin.page_admin.suadiadiem',compact('dd'));
    }

    public function postSuadd($iddd, Request $request){
    	$this-> validate($request,
    		[
    			'tendiadiem'=>'required|unique:diadiem,tendiadiem'
    		],
    		[
    			'tendiadiem.required'=>'Vui long nhap ten dia diem',
    			'tendiadiem.unique'=>'Dia diem nay da co trong danh sach dia diem'
    		]);
    	$dd = Diadiem::find($iddd);
    	$dd->tendiadiem = $request->tendiadiem;
    	$dd->save();
    	return redirect()->back()->with('ok','Sua dia diem thanh cong');
    }

    public function Xoadd($iddd){
    	Diadiem::find($iddd)->delete();
    	return redirect()->back()->with('thongbao','Xoa thanh cong');
    }

    public function Xoakhach($idk){
    	User::find($idk)->delete();
    	
    	return redirect()->back()->with('thongbao','Xoa thanh cong');
    }

    public function Xoahdv($idhdv){
    	User::find($idhdv)->delete();
    	return redirect()->back()->with('thongbao','Xoa thanh cong');
    }

    public function ChapnhanHDV($idhdv){
        $cn = User::find($idhdv);
        $cn->status=2;
        $cn->save();
        return redirect()->back()->with('success','Thanh cong');
    }

    public function DSBinhluan(){
        $comment = Comment::all();
        return view('admin.page_admin.dsbinhluan', compact('comment'));
    }

    public function DSTraloi(){

    }

    public function Xoabinhluan($idbl){
        Comment::find($idbl)->delete();
        return redirect()->back()->with('thongbao','Xoa binh luan thanh cong');
    }

    public function Xoatraloi($idtl){

    }

}
