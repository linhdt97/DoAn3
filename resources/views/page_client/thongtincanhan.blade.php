@extends('master_client')
@section('content')

<div class="col-md-9">
	<div class="panel panel-default">
		@if(Session::has('thanhcong'))
            <div class="alert alert-success">
                {{Session::get('thanhcong')}}
            </div>
        @endif
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Thong tin HDV</h2>
		</div>

		<div class="panel-body">
			<!-- item -->
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-9">
						<h3>
							Ho ten: <a>{{$user->hoten}}</a>
						</h3>
						<p>Email: {{$user->email}}<p>
						@if($user->namsinh != "")
						<p>Nam sinh: {{$user->namsinh}}</p>
						@endif

						@if($user->gioitinh != "")
						<p>Gioi tinh: {{$user->gioitinh}}</p>
						@endif

						@if($user->anhdaidien != "")
						<p>Anh dai dien:<br> <img src="upload/{{$user->anhdaidien}}" width="200" height="200"></p>
						@endif

						<p>@if($user->quyen == 1) Quoc tich: @else Dia chi: @endif {{$user->diachi}}</p>
						<p>So dien thoai: {{$user->sodienthoai}}</p>
						<a class="btn btn-primary" href="{{route('sua-thong-tin')}}">Sua thong tin<span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>

				<div class="break"></div>
			</div>
			<!-- end item -->

		</div>
	</div>
</div>

@endsection