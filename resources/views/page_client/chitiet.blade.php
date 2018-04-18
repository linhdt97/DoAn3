@extends('master_client')
@section('content')

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Danh sách tour</h2>
		</div>

		<div class="panel-body">
			<!-- item -->
			@foreach($cttour as $t)
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-3">
						<a href="chitiet.html">
							<img class="img-responsive" src="image/320x150.png" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<h3>
							{{$t->tentour}}
						</h3>
						<p>Huong dan vien:<a href="{{route('tthdv',$t->users_id)}}"> {{$t->hoten}}</a><p>
						<p>So khach dang ky/So khach toi da: {{$t->sokhachdangky}} / {{$t->sokhachmax}}</p>
						<p>Gia: {{$t->giatour}}</p>
						<p>Mo ta: {{$t->mota}}</p>
						<a class="btn btn-primary" href="{{route('dattour',$t->id)}}">Dat tour<span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>

				<div class="break"></div>
			</div>
			<!-- end item -->
			@endforeach

		</div>
	</div>
</div>

@endsection