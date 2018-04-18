<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tour;
use App\Diadiem;
use App\Bill;
use Auth;

class HdvController extends Controller
{
    public function trangchu(){
    	return view('page_hdv.trangchuhdv');
    }

    public function getDanhsachtour(){
    	$iduser = Auth::user()->id;
    	$tour = Tour::select('tour.id','tendiadiem','giatour','sokhachmax','sokhachdangky','hinhanh','mota','tentour','hinhanh')->where('users_id',$iduser)->join('diadiem','tour.diadiem_id','=','diadiem.id')->get();
    	//print_r($tour);
    	return view('page_hdv.danhsachtour', compact('tour'));
    }

    public function getThemtour(){
    	$dd = Diadiem::all();
    	return view('page_hdv.themtour',compact('dd'));
    }

	public function postThemtour(Request $request){
    	$this -> validate($request,
    		[
    			'tentour'=>'required',
    			'sokhachmax'=>'required',
    			'giatour'=>'required',
    			'mota'=>'required',
    		],
    		[
    			'tentour.required'=>'Vui long nhap ten tour',
    			'sokhachmax.required'=>'Vui long nhap so khach toi da',
    			'giatour.required'=>'Vui long nhap gia tour',
    			'mota.required'=>'Vui long nhap mo ta',
    		]);
    	$iduser = Auth::user()->id;
    	$tour = new Tour();
    	$tour->users_id= $iduser;
    	$tour->tentour= $request->tentour;
    	$tour->diadiem_id= $request->diadiem;
    	$tour->sokhachmax=$request->sokhachmax;
    	$tour->sokhachdangky=0;
    	$tour->giatour= $request->giatour;
    	$tour->mota= $request->mota;

        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            echo $name;
            $hinhanh= str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh= str_random(4)."_".$name;
            }
            
            $file->move("upload",$hinhanh);
            $tour->hinhanh = $hinhanh;
        }
        else
        {
            $tour->hinhanh = "";
        }

    	$tour->save();
    	return redirect()->back()->with('thanhcong','Them tour thanh cong');
    }

    public function getSuatour($idtour){
    	$idt = Tour::find($idtour);
    	$dd = Diadiem::all();

    	//print_r($idt);
    	return view('page_hdv.suatour', compact('idt','dd'));
    }

    public function postSuatour($idtour, Request $request){
    	$this->validate($request,
    		[
    			'tentour'=>'required',
    			'sokhachmax'=>'required',
    			'giatour'=>'required',
    			'mota'=>'required',
    		],
    		[
    			'tentour.required'=>'Vui long nhap ten tour',
    			'sokhachmax.required'=>'Vui long nhap so khach toi da',
    			'giatour.required'=>'Vui long nhap gia tour',
    			'mota.required'=>'Vui long nhap mo ta',
    		]);
    	$tour = Tour::find($idtour);
    	$tour->tentour=$request->tentour;
    	$tour->giatour=$request->giatour;
    	$tour->mota=$request->mota;
    	$tour->sokhachmax=$request->sokhachmax;
    	$tour->hinhanh =$request->hinhanh;
    	$tour->diadiem_id=$request->diadiem;
        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg,png,jpeg');
            }

            $name = $file->getClientOriginalName();
            $hinhanh= str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh= str_random(4)."_".$name;
            }
            
            $file->move("upload",$hinhanh);
            $tour->hinhanh = $hinhanh;
        }

    	$tour->save();
    	return redirect()->back()->with('thanhcong','Sua tour thanh cong');

    }

    public function getXoatour($idtour){
    	Tour::find($idtour)->delete();
    	return redirect()->back()->with('thongbao','Xoa tour thanh cong');
    }
}
