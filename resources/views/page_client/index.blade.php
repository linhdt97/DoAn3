@extends('master_client')
@section('content')

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Danh sách tour</h2>
		</div>

		<div class="panel-body">
			<!-- item -->
			@foreach($tour as $t)
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-3">
						<img src="upload/{{$t->hinhanh}}" width="170" height="120" alt="" style="margin-top: 30px">
					</div>
					<div class="col-md-9">
						<h3>
							<a href="">{{$t->tentour}}</a>
						</h3>
						Huong dan vien:<a href="{{route('tthdv',$t->users_id)}}"> {{$t->hoten}}</a>	
						<p>Dia diem: {{$t->tendiadiem}}</p>
						<p>Gia: {{$t->giatour}}</p>
						<a class="btn btn-primary" href="chi-tiet-{{$t->id}}">Chi tiet<span class="glyphicon glyphicon-chevron-right"></span></a>
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