@extends('master_client')
@section('content')

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Thong tin HDV</h2>
		</div>

		<div class="panel-body">
			<!-- item -->
			@foreach($cthdv as $ct)
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-9">
						<h3>
							Ho ten: <a>{{$ct->hoten}}</a>
						</h3><br>
						<p>Email: {{$ct->email}}<p>
						<p>Dia chi: {{$ct->diachi}}</p>
						<p>Sodienthoai: {{$ct->sodienthoai}}</p>
						<a class="btn btn-primary" href="{{route('tour_hdv',$ct->id)}}">Xem cac tour da mo<span class="glyphicon glyphicon-chevron-right"></span></a>
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