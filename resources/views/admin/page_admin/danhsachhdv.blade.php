@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Huong dan vien</small>
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
                        <th>So dien thoai</th>
                        <th>Dia chi</th>
                        <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dshdv as $dsh)
                        <tr class="odd gradeX" align="center">
                            <td>{{$dsh->id}}</td>
                            <td>{{$dsh->hoten}}</td>
                            <td>{{$dsh->email}}</td>
                            <td>{{$dsh->sodienthoai}}</td>
                            <td>{{$dsh->diachi}}</td>                   
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoahdv1',$dsh->id)}}"> Delete</a></td>
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