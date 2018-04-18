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
	            		<h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Don dat tour</h2>
	            	</div>
				  	<div class="panel-body">
				  		@foreach($dtour as $dt)
				    	<form action="{{route('dattour',$dt->id)}}" method="post">
				    		<input type="hidden" name="_token" value="{{csrf_token()}}">
				    		
				    		<div>
				    			<label>Ma tour</label>
							  	<input type="text" class="form-control" placeholder="" readonly="" name="idtour" aria-describedby="basic-addon1" value="{{$dt->id}}" 
							  	>
							</div>
							<br>

							<div>
				    			<label>Ten tour</label>
							  	<input type="text" class="form-control" readonly="" placeholder="" readonly="" name="tentour" aria-describedby="basic-addon1" value="{{$dt->tentour}}"
							  	>
							</div>
							<br>

							<div>
				    			<label>Dia diem</label>
							  	<input type="text" class="form-control" readonly="" placeholder="" name="tendiadiem" aria-describedby="basic-addon1" value="{{$dt->tendiadiem}}"
							  	>
							</div>
							<br>

							<div>
				    			<label>Gia tien</label>
							  	<input type="text" class="form-control" readonly="" placeholder="" name="giatour" aria-describedby="basic-addon1" value="{{$dt->giatour}}"
							  	>
							</div>
							<br>

							<div>
				    			<label>Thoi gian bat dau</label>
							  	<input type="text" class="form-control" placeholder="Nhap theo dang YYYY-MM-dd" name="timeBD" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>

							<div>
				    			<label>So dien thoai</label>
							  	<input type="text" class="form-control" readonly="" placeholder="" name="sodienthoai" aria-describedby="basic-addon1" value="{{Auth::user()->sodienthoai}}"
							  	>
							</div>
							<br>

							<div>
				    			<label>Email</label>
							  	<input type="text" class="form-control" placeholder="" readonly="" name="email" aria-describedby="basic-addon1" value="{{Auth::user()->email}}"
							  	>
							</div>
							<br>

							<div>
							  	<input type="hidden" class="form-control" placeholder="" name="idkhach" aria-describedby="basic-addon1" value="{{Auth::user()->id}}"
							  	>
							</div>
							<br>

							<br>
							<div align="center">
								<button type="submit" class="btn btn-success">Gui don dat tour
								</button>
							</div>
				    	</form>
				    	@endforeach
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
@endsection