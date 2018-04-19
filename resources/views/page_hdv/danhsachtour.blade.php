@extends('layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Tour cua toi</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                <div class="alert alert-success" style="margin-top: 100px; width: 40%" align="center">
                    {{session('thongbao')}}
                </div>
                @endif
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Ten tour</th>
                        <th>Dia diem</th>
                        <th>So khach da dang ky</th>
                        <th>So khach max</th>
                        <th>Gia tour</th>
                        <th>Mo ta</th>
                        <th>Hinh anh</th>
                        <th>Sua</th>
                        <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tour as $dst)
                        <tr class="odd gradeX" align="center">
                            <td>{{$dst->id}}</td>
                            <td>{{$dst->tentour}}</td>
                            <td>{{$dst->tendiadiem}}</td>
                            <td>{{$dst->sokhachdangky}}</td>
                            <td>{{$dst->sokhachmax}}</td>
                            <td>{{number_format($dst->giatour)}}</td>
                            <td>{{$dst->mota}}</td>
                            @if(strlen($dst->hinhanh)>0)  
                                <td><img src="upload/{{$dst->hinhanh}}" width="50" height="50"></td>
                            @else
                                <td></td>
                            @endif
                            @if($dst->sokhachdangky == 0)               
                                <td class="center"><i class="glyphicon glyphicon-pencil"></i><a href="{{route('suatour',$dst->id)}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoatour',$dst->id)}}"> Delete</a></td>
                            @else
                                <td></td>
                                <td></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection