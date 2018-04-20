@extends('master_client')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
           
            <!-- /.col-lg-12 -->
            <div class="panel panel-default" style="width: 80%;">

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err )
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    <div class="btn btn-success" style="width: 100%" >
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Sua thong tin</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('sua-thong-tin')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="hoten" name="hoten" aria-describedby="basic-addon1" value="{{$user->hoten}}">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="email" name="email" aria-describedby="basic-addon1" value="{{$user->email}}" readonly="" >
                            </div>
                            <br>    
                            <div>
                                <input type="checkbox" class="" name="checkpassword" id="changePassword"><label>Thay doi mat khau</label><br>
                                <label>Nhập mật khẩu moi</label>
                                <input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>

                            <div>
                                <label>Xac nhan mat khẩu moi</label>
                                <input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>

                            <div>
                                <label>Anh dai dien</label>
                                <input type="file" class="form-control" name="anhdaidien" aria-describedby="basic-addon1" value="{{$user->anhdaidien}}" 
                                >
                            </div>
                            <br>

                            <div>
                                <label>So dien thoai</label>
                                <input type="text" class="form-control" name="sodienthoai" aria-describedby="basic-addon1" value="{{$user->sodienthoai}}">
                            </div>
                            <br>

                            <div>
                                @if(Auth::user()->quyen == 1)<label>Quoc tich</label> @else <label>Dia chi</label> @endif
                                <input type="text" class="form-control" name="diachi" aria-describedby="basic-addon1" value="{{$user->diachi}}">
                            </div>
                            <br>

                            <div>
                                <label>Nam sinh</label>
                                <input type="text" class="form-control" name="namsinh" aria-describedby="basic-addon1" value="{{$user->namsinh}}" >
                            </div>
                            <br>
                            <div>
                                <label>Gioi tinh:</label>                                
                                <input type="radio" name="gioitinh" value="Nam" style="margin-left: 100px"><b>Nam</b>
                                <input type="radio" name="gioitinh" value="Nu" style="margin-left: 100px"><b>Nữ</b> 
                            </div>
                            <br>
                            <div align="center">
                                <button type="submit" class="btn btn-success">Sua
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection
