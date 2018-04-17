@extends('master_client')
@section('content')
	
	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" >
                <div class="panel panel-default" style="width: 80%">

                	@if(count($errors)>0)
                	<div class="alert alert-danger">
                		@foreach($errors->all() as $err)
                			{{$err}}<br>
                		@endforeach
                	</div>
                	@endif
                	@if(Session::has('message'))
                		<div class="alert alert-danger">
								{{Session::get('message')}};
						</div>
                	@endif

				  	<div class="btn btn-success" style="width: 100%" >
	            		<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Dang nhap</h2>
	            	</div>
				  	<div class="panel-body">
				    	<form action="{{route('dang-nhap')}}" method="post">
				    		<input type="hidden" name="_token" value="{{csrf_token()}}">
				    		
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
							
							<div align="center">
								<button type="submit" class="btn btn-success">Đăng nhap
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