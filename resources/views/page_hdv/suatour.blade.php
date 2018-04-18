@extends('layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="width: 60%" >

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif
            @if(session('thanhcong'))
                <div class="alert alert-success">
                    {{Session::get('thanhcong')}}
                </div>
            @endif

            <div class="btn btn-success" style="width: 100%">
                <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Sua Tour</h2>
            </div>
            <div class="panel-body">
                <form action="{{route('suatour',$idt->id)}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div>
                        <label>Ten tour</label>
                        <input type="text" class="form-control" name="tentour" aria-describedby="basic-addon1" value="{{$idt->tentour}}">
                    </div>
                    <br>

                    <div>
                        <label>Dia diem</label>
                        <select name="diadiem" style="width: 200px; height: 40px; margin-left: 20px">
                            @foreach($dd as $ddt)
                            <option value="{{$ddt->id}}">{{$ddt->tendiadiem}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div>
                        <label>So khach max</label>
                        <input type="text" class="form-control" name="sokhachmax" aria-describedby="basic-addon1" value="{{$idt->sokhachmax}}">
                    </div>
                    <br>

                    <div>
                        <label>Gia tour</label>
                        <input type="text" class="form-control" name="giatour" aria-describedby="basic-addon1" value="{{$idt->giatour}}">
                    </div>
                    <br>

                    <div>
                        <label>Mo ta</label>
                        <input type="text" class="form-control" name="mota" aria-describedby="basic-addon1" value="{{$idt->mota}}">
                    </div>
                    <br>

                    <div>
                        <label>Hinh anh</label>
                        <input type="file" class="form-control" name="hinhanh" aria-describedby="basic-addon1" value="{{$idt->hinhanh}}">
                    </div>
                    <br>

                    <div align="center">
                        <button type="submit" class="btn btn-success">Sua
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection