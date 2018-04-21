@extends('master_client')
@section('content')

<div class="col-md-9">
	<div class="panel panel-default">
		@if(count($lichsu)>0)
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Danh sach don dat tour</h2>
		</div>

		<div class="panel-body">
			<!-- item -->

			@foreach($lichsu as $ls)
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-3">
						<img src="upload/{{$ls->hinhanh}}" width="170" height="120" alt="" style="margin-top: 30px">
					</div>
					<div class="col-md-9">
						<p style="margin-top: 10px">ID don tour: {{$ls->id}}</p>
						<p>Ten tour: <a href="chi-tiet-{{$ls->tour_id}}">{{$ls->tentour}}</a></p>
						<p>Tong tien: {{number_format($ls->tongtien)}} VND</p>
						<p>Trang thai don: 
							@if($ls->tinhtrangdon == 0)
								Chua xu ly
							@elseif($ls->tinhtrangdon == 1)
								Da duoc chap nhan
								<p><a href="">Thanh toan</a></p>
							@else($ls->tinhtrangdon == 2)
								Da bi tu choi
							@endif
						</p>
					</div>
				</div>

				<div class="break"></div>
			</div>
			<!-- end item -->
			@endforeach

			<div class="row" style="text-align: center">
				{{$lichsu->links()}}
			</div>

		</div>
		@else
			<div class="panel-heading" style="background-color:#337AB7; color:white;" >
				<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Hien tai ban chua co don dat tour nao</h2>
			</div>
		@endif
	</div>
</div>

@endsection