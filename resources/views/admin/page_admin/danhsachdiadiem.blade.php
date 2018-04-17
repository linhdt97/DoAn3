@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">      
            <div class="col-lg-12">

                <h1 class="page-header">Danh sach
                    <small>Dia diem du lich</small>
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
                        <th>Ten dia diem du lich</th>
                        <th>Sua</th>
                        <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dsdd as $ds)
                        <tr class="odd gradeX" align="center">
                            <td>{{$ds->id}}</td>
                            <td>{{$ds->tendiadiem}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('suadd1',$ds->id)}}"> Edit</a></td>                 
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoadd1',$ds->id)}}"> Delete</a></td>
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