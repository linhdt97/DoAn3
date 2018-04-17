@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Khach hang</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                <div class="alert alert-success" style="margin-top: 100px; width: 40%" align="center">
                    {{session('thongbao')}}
                </div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Ho ten</th>
                        <th>Email</th>
                        <th>Gioi tinh</th>
                        <th>So dien thoai</th>
                        <th>Quoc tich</th>
                        <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dskhach as $dsk)
                        <tr class="odd gradeX" align="center">
                            <td>{{$dsk->id}}</td>
                            <td>{{$dsk->hoten}}</td>
                            <td>{{$dsk->email}}</td>
                            <td>{{$dsk->gioitinh}}</td>
                            <td>{{$dsk->sodienthoai}}</td>
                            <td>{{$dsk->diachi}}</td>                   
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoakhach1',$dsk->id)}}"> Delete</a></td>
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