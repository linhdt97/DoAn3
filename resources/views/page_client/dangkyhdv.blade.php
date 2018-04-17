@extends('master_client')
@section('content')
	
	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" >
                <div class="panel panel-default" style="width: 80%">

                	@if(count($errors)>0)
                		<div class="alert alert-danger">
                			@foreach($errors->all() as $err )
                				{{$err}}<br>
                			@endforeach
                		</div>
                	@endif

                	@if(Session::has('thanhcong'))
                		<div class="alert alert-success">
                			{{Session::get('thanhcong')}}
                		</div>
                	@endif

				  	<div class="btn btn-success" style="width: 100%" >
	            		<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Dang ky Huong dan vien</h2>
	            	</div>
				  	<div class="panel-body">
				    	<form action="{{route('dang-ky-hdv')}}" method="post">
				    		<input type="hidden" name="_token" value="{{csrf_token()}}">
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="hoten" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>	
							<div>
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>So dien thoai</label>
							  	<input type="text" class="form-control" placeholder="Phone" name="sodienthoai" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>
							<div>
				    			<label>Dia chi</label>
							  	<input type="text" class="form-control" placeholder="Address" name="diachi" aria-describedby="basic-addon1"
							  	>
							</div>

							<br>
							<div align="center">
								<button type="submit" class="btn btn-success">Đăng ký
								</button>
							</div>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
	
@endsection