@extends('master_client')
@section('content')

<div class="col-md-9">

	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Chi tiet tour</h2>
		</div>

		<div class="panel-body">
			<!-- item -->
			
			<div class="row-item row">
				<div class="col-md-12 border-right">
					<div class="col-md-9">
						<h3>
							{{$cttour->tentour}}
						</h3>
						<p>Huong dan vien: <a href="{{route('tthdv',$cttour->users_id)}}"> {{$cttour->hoten}}</a><p>
						<p>Dia diem: {{$cttour->tendiadiem}}<p>
						<p>So khach toi da: {{$cttour->sokhachmax}}</p>
						<p>Gia tour: {{ number_format($cttour->giatour) }} VND</p>
						<p><img  class= "img-responsive" src="upload/{{$cttour->hinhanh}}" height="600" width="600" alt=""></p>
						<p>Mo ta: {{$cttour->mota}}</p>
						@if(Auth::check())
						<a class="btn btn-primary" href="{{route('dattour',$cttour->id)}}">Dat tour<span class="glyphicon glyphicon-chevron-right"></span></a>
						@else
						<a class="btn btn-primary" href="dang-nhap">Dat tour<span class="glyphicon glyphicon-chevron-right"></span></a>
						@endif
					</div>
				</div>

				<div class="break"></div>
			</div>
			<!-- end item -->
	
		</div>

		<div class="col-sm-12" style="margin-top: 30px">
			<ul class="nav nav-tabs">
				<li><a href="#reviews" data-toggle="tab">Bình luận</a></li>
			</ul>
		</div>

		<div class="tab-pane fade active in" id="reviews" >
			<div class="col-sm-12">
				@foreach($comment as $cm)
				<div class="comment">
				<ul>			
					<li>
						<a><i class="fa fa-user"></i>{{$cm->email}}</a>
						<a style="margin-left: 5px"><i class="fa fa-clock-o"></i>{{$cm->created_at}}</a>
						<br>{{$cm->noidung}}<br>
						@foreach($traloi as $tl)
						@if($tl->comment_id == $cm->id)
							<div>
								<ul style="list-style: none">
									<a><i class="fa fa-user"></i>{{$tl->email}}</a>
									<a style="margin-left: 5px"><i class="fa fa-clock-o"></i>{{$tl->created_at}}</a>
									<br>{{$tl->ndtraloi}}<br>
								</ul>
							</div>
						@endif
						@endforeach 

						@if(Auth::check())
						<a href="{{route('tra-loi',$cm->id)}}" style="margin-left: 40px ">Tra loi</a>
						@endif
					</li>
							
				</ul>	
				</div>
				
				@endforeach
				<div class="row" style="text-align: center">
					{{$comment->links()}}
				</div>
				
				<div class="send" style="padding-top: 20px;">
					@if(count($errors)>0)
				        <div class="alert alert-danger">
				            @foreach($errors->all() as $err)
				                {{$err}}<br>
				            @endforeach
				        </div>
					@endif
					@if(Auth::check())
					<p style="margin-left: 40px"><b>Gửi cau hoi hoac nhan xet của bạn về tour</b></p>
					<form action="binh-luan-{{$cttour->id}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}" >
						
						<div align="center">
							<textarea name="noidung" rows="5" cols="100"></textarea>
							<button type="submit">
								Gui binh luan
							</button>
					</form>
					@endif
					<br><br>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection