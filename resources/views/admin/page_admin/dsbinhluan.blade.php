@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">      
            <div class="col-lg-12">

                <h1 class="page-header">Danh sach
                    <small>Binh luan</small>
                </h1>
            </div>

            @if(session('thongbao'))
                <div class="alert alert-success" style="margin-top: 100px; width: 40%" align="center">
                    {{session('thongbao')}}
                </div>
            @endif
            <!-- /.col-lg-12 -->     
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
               
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>ID tour</th>
                        <th>ID nguoi dung</th>
                        <th>Noi dung binh luan</th>
                        <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comment as $bl)
                        <tr class="odd gradeX" align="center">
                            <td>{{$bl->id}}</td>
                            <td>{{$bl->tour_id}}</td>
                            <td>{{$bl->users_id}}</td>
                            <td>{{$bl->noidung}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoabinhluan', $bl->id)}}"> Delete</a></td>
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