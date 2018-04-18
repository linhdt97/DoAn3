<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\User;
use App\Tour;
use App\Diadiem;
use App\Bill;
use Hash;
use Auth;

class PageController extends Controller
{
    public function getTrangchu(){
        $tour=Tour::select('tour.id','users_id','hoten','tentour','giatour','mota','hinhanh','tendiadiem')->join('users','tour.users_id','=','users.id')->join('diadiem','tour.diadiem_id','=','diadiem.id')->get();
        return view('page_client.index',compact('tour'));
    }

    public function getChitiet($idtour){
        $cttour = Tour::select('tour.id','users_id','hoten','tentour','giatour','mota','sokhachmax','tendiadiem','hinhanh')->join('users','tour.users_id','=','users.id')->join('diadiem','tour.diadiem_id','=','diadiem.id')->where('tour.id',$idtour)->get();
        // echo '<pre>';
        // print_r($cttour);
        // echo '</pre>';
        return view('page_client.chitiet', compact('cttour'));
    }

    public function getDattour($idtour){
        $dtour = Tour::select('tour.id','users_id','giatour','tentour','tendiadiem')->join('diadiem','diadiem.id','=','tour.diadiem_id')->where('tour.id',$idtour)->get();
        // echo '<pre>';
        // print_r($dtour);
        // echo '</pre>';
        return view('page_client.dattour', compact('dtour'));      
    }

    public function postDattour($idtour, Request $request){
        $this-> validate($request,
            [
                'timeBD'=>'required|date',
                'sokhachdangky'=>'required',
            ],
            [
                'timeBD.required'=>'Vui long nhap thoi gian bat dau',
                'timeBD.date'=>'Khong dung dinh dang date',
                'sokhachdangky.required'=>'Vui long nhap so khach dang ky',
            ]);
        $bill = new Bill();
        $bill->tour_id = $request->idtour;
        $bill->users_id = $request->idkhach;
        $bill->tongtien = $request->giatour;
        $bill->tinhtrangdon = 0;
        $bill->timeBD = $request->timeBD;

        $tour = Tour::find($idtour);
        if($tour->sokhachmax < $request->sokhachdangky) return redirect()->back()->with('loi','So khach dang ky phai nho hon hoac bang so khach max.');
        $tour->sokhachdangky = $request->sokhachdangky;
        $tour->save();

        $bill->save();
        return redirect()->back()->with('thanhcong','Gui don dat tour thanh cong');
    }

    public function getThongtinHDV($idhdv){
        $cthdv = User::where('id',$idhdv)->get();
        // echo '<pre>';
        // print_r($cthdv);
        // echo '</pre>';
        return view('page_client.thongtin_hdv', compact('cthdv'));
    }

    public function getTourOfHdv($idhdv){
        $tour=Tour::select('tour.id','users_id','hoten','tentour','giatour','mota','tendiadiem','hinhanh')->join('users','tour.users_id','=','users.id')->join('diadiem','tour.diadiem_id','=','diadiem.id')->where('users_id',$idhdv)->get();
        //print_r($tour);
        return view('page_client.tour_cua_hdv', compact('tour'));
    }

    public function getQuydinh(){
        return view('page_client.quydinh');
    }

    public function getDangkykhach(){
    	return view('page_client.dangkykhach');
    }

    public function postDangkykhach(Request $req){
    	$this->validate($req,
            [
                'hoten'=>'required',
                'email'=> 'required|email|unique:users,email',
                'password'=>'required|max:30|min:6',
                'passwordAgain'=> 'same:password',
                'sodienthoai'=>'required',
                'diachi'=>'required',
                'namsinh'=>'required',
                'gioitinh' => 'required',
            ],
            [
                'hoten.required'=>'Vui long nhap Ho ten',
                'email.required'=>'Vui long nhap Email',
                'email.email'=>'Dinh dang email khong dung, vui long nhap lai',
                'email.unique'=>'Email nay da co nguoi su dung',
                'password.required'=>'Vui long nhap password',
                'password.max'=>'Password toi da 30 ky tu',
                'password.min'=>'Password toi thieu 6 ky tu',
                'passwordAgain.same'=>'Mat khau xac nhan khong hop le',
                'sodienthoai.required'=>'Vui long nhap so dien thoai',
                'diachi.required'=>'Vui long nhap quoc tich',
                'namsinh.required'=>'Vui long nhap nam sinh',
                'gioitinh.required'=>'Vui long chon gioi tinh',
            ]);
        $users = new User();
        $users->hoten = $req->hoten;
        $users->email = $req->email;
        $users->password= Hash::make($req->password);
        $users->sodienthoai = $req->sodienthoai;
        $users->gioitinh = $req->gioitinh;
        $users->diachi = $req->diachi;
        $users->namsinh = $req->namsinh;
        $users->quyen = 1; 
        $users->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getDangkyhdv(){
        return view('page_client.dangkyhdv');
    }

    public function postDangkyhdv(Request $req){
        $this -> validate($req,
            [
                'hoten'=> 'required',
                'email'=> 'required|email|unique:users,email',
                'password'=> 'required|max:30|min:6',
                'passwordAgain'=> 'same:password',
                'sodienthoai'=> 'required',
                'diachi'=> 'required',
            ],
            [
                'hoten.required'=> 'Vui long nhap ho ten',
                'email.required'=> 'Vui long nhap email',
                'email.email'=> 'Khong dung dinh dang email, vui long nhap lai',
                'email.unique'=> 'Email nay da co nguoi su dung',
                'password.required'=> 'Vui long nhap mat khau',
                'password.min'=> 'Mat khau toi thieu 6 ky tu',
                'password.max'=> 'Mat khau toi da 30 ky ty',
                'passwordAgain.same'=> 'Mat khau xac nhan khong hop le',
                'sodienthoai.required'=> 'Vui long nhap so dien thoai',
                'diachi.required'=> 'Vui long nhap dia chi',
            ]);
        $users = new User();
        $users->hoten = $req->hoten;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->sodienthoai = $req->sodienthoai;
        $users->diachi = $req->diachi;
        $users->quyen = 2;
        $users->save();

        return redirect()->back()->with('thanhcong','Dang ky tai khoan thanh cong');
    }

    public function getDangnhap(){
    	return view('dangnhap');
    }

    public function postDangnhap(Request $req){
    	$this -> validate($req,
            [
                'email'=> 'required|email',
                'password'=> 'required|max:30|min:6',
            ],
            [
                'email.required'=> 'Vui long nhap email',
                'email.email'=> 'Khong dung dinh dang email, vui long nhap lai',
                'password.required'=> 'Vui long nhap mat khau',
                'password.min'=> 'Mat khau toi thieu 6 ky tu',
                'password.max'=> 'Mat khau toi da 30 ky ty',
            ]);
        $check_user = array('email'=>$req->email,'password'=>$req->password);
        $check_admin = array('email'=>$req->email,'password'=>$req->password,'quyen'=>3);
        if(Auth::attempt($check_admin))
            return redirect()->route('trang-chu-admin');
        else if(Auth::attempt($check_user))
            return redirect()->route('trang-chu');
        else
            return redirect()->back()->with('message','Sai tài khoản hoặc mật khẩu!');
    }

    public function getDangxuat(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
