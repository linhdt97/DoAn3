<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\User;
use Hash;
use Auth;

class PageController extends Controller
{
    public function getTrangchu(){
        return view('page_client.index');
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
