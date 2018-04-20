@extends('layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Don dat tour</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>ID_Tour</th>
                        <th>ID_Khach</th>
                        <th>So dien thoai</th>
                        <th>So khach tham quan</th>
                        <th>Tong tien</th>
                        <th>Thoi gian bat dau</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dsb)
                    	@if($dsb->tinhtrangdon == 1) 
                        <tr class="odd gradeX" align="center">
                            <td>{{$dsb->id}}</td>
                            <td>{{$dsb->tour_id}}</td>
                            <td>{{$dsb->users_id}}</td>
                            <td>{{$dsb->sodienthoai}}</td>
                            <td>{{$dsb->sokhachdangky}}</td>
                            <td>{{number_format($dsb->tongtien)}}</td>
                            <td>{{$dsb->timeBD}}</td>
                        </tr>
                        @endif 
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