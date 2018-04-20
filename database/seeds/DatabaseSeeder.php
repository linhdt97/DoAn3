<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call('TourTableSeeder');
    }    
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	array('hoten' => 'HDV 1',
        		'email' =>'hdv1@gmail.com', 
        		'password' => bcrypt('123456'), 
        		'gioitinh' => 'Nam', 
        		'diachi' => 'HaNoi',
                'namsinh' => '1997',
        		'sodienthoai' => '01683494193', 
        		'quyen' => 2, 
        		'status' => 1),

            array('hoten' => 'HDV 2',
                'email' =>'hdv2@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nam', 
                'diachi' => 'HaNoi',
                'namsinh' => '1997',
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'status' => 1),

            array('hoten' => 'HDV 3',
                'email' =>'hdv3@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nu', 
                'diachi' => 'BacNinh',
                'namsinh' => '1997',
                'sodienthoai' => '0918273645', 
                'quyen' => 2, 
                'status' => 2),

            array('hoten' => 'HDV 4',
                'email' =>'hdv4@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nam', 
                'diachi' => 'HaNoi',
                'namsinh' => '1997',
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'status' => 1),

            array('hoten' => 'HDV 5',
                'email' =>'hdv5@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nu', 
                'diachi' => 'BacNinh',
                'namsinh' => '1997',
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'status' => 1),

            array('hoten' => 'HDV 6',
                'email' =>'hdv6@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nu', 
                'diachi' => 'BacNinh',
                'namsinh' => '2000',
                'sodienthoai' => '0918273645', 
                'quyen' => 2, 
                'status' => 2),

        	array('hoten' => 'User 1',
        		'email' =>'email1@gmail.com', 
        		'password' => bcrypt('123456'), 
        		'gioitinh' => 'Nu', 
        		'diachi' => 'BacNinh',
                'namsinh' => '1997',
        		'sodienthoai' => '4444444444', 
        		'quyen' => 1,
                'status' => 1),

        	array('hoten' => 'User 2',
        		'email' =>'email2@gmail.com', 
        		'password' => bcrypt('123456'), 
        		'gioitinh' => 'Nam', 
        		'diachi' => 'BacNinh',
                'namsinh' => '1997',
        		'sodienthoai' => '3333333333', 
        		'quyen' => 1,
                'status' => 1),   

        	array('hoten' => 'User 3',
        		'email' =>'email3@gmail.com', 
        		'password' => bcrypt('123456'), 
        		'gioitinh' => 'Nu', 
        		'diachi' => 'HaNoi',
                'namsinh' => '1997',
        		'sodienthoai' => '0918273645', 
        		'quyen' => 1,
                'status' => 1),

            array('hoten' => 'User 4',
                'email' =>'email4@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nu', 
                'diachi' => 'HaNoi',
                'namsinh' => '1997',
                'sodienthoai' => '0918273645', 
                'quyen' => 1,
                'status' => 1),

            array('hoten' => 'User 5',
                'email' =>'email5@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nam', 
                'diachi' => 'BacNinh',
                'namsinh' => '2000',
                'sodienthoai' => '987654321', 
                'quyen' => 1,
                'status' => 1),
            
            array('hoten' => 'User 6',
                'email' =>'email6@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 'Nu', 
                'diachi' => 'BacNinh',
                'namsinh' => '2000',
                'sodienthoai' => '123456789', 
                'quyen' => 1,
                'status' => 1),
        ]);
    }
}

class DiadiemTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('diadiem')->insert([
        	array('tendiadiem'=>'Ha Noi'),
        	array('tendiadiem'=>'TP HCM'),
        	array('tendiadiem'=>'Hue'),
        	array('tendiadiem'=>'Bac Ninh'),
        	array('tendiadiem'=>'Da Nang'),
        	array('tendiadiem'=>'Quang Ninh'),
            array('tendiadiem'=>'Sai Gon'),
            array('tendiadiem'=>'Thai Binh'),
        ]);
    }
}

class TourTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tour')->insert([
        	array('users_id'=>1, 'tentour'=>'Du lich Ha Noi', 'diadiem_id'=>1, 'sokhachmax'=>4, 'giatour' => 1000000, 'mota'=>'Du lich vong quanh Ha Noi va tham Ho Guom' ),
        	array('users_id'=>2, 'tentour'=>'Du lich Ha Noi', 'diadiem_id'=>1, 'sokhachmax'=>2, 'giatour' => 2000000, 'mota'=>'Du lich vong quanh Ha Noi va tham Lang Bac' ),
        	array('users_id'=>3, 'tentour'=>'Du lich TP HCM', 'diadiem_id'=>2, 'sokhachmax'=>4, 'giatour' => 1500000, 'mota'=>'Du lich TP HCM va tham Dinh Doc Lap' ),
        	array('users_id'=>4, 'tentour'=>'Du lich Bac Ninh', 'diadiem_id'=>4, 'sokhachmax'=>4, 'giatour' => 800000, 'mota'=>'Du lich vong quanh Bac Ninh va tham Lang Kinh Duong Vuong' ),
            array('users_id'=>5, 'tentour'=>'Du lich Thai Binh', 'diadiem_id'=>5, 'sokhachmax'=>1, 'giatour' => 900000, 'mota'=>'Du lich vong quanh Thai Binh' ),
            array('users_id'=>5, 'tentour'=>'Du lich Bac Ninh', 'diadiem_id'=>4, 'sokhachmax'=>10, 'giatour' => 1100000, 'mota'=>'Du lich vong quanh Bac Ninh va tham Lang Kinh Duong Vuong' ),
            array('users_id'=>5, 'tentour'=>'Du lich Ha Noi', 'diadiem_id'=>1, 'sokhachmax'=>10, 'giatour' => 1300000, 'mota'=>'Du lich vong quanh Ha Noi va tham Lang Bac' )
        ]);
    }
}
