@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="width: 40%" >

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif
            @if(session('ok'))
                <div class="alert alert-success">
                    {{Session::get('ok')}}
                </div>
            @endif

            <div class="btn btn-success" style="width: 100%">
                <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;"> Sua dia diem</h2>
            </div>
            <div class="panel-body">
                <form action="{{route('suadd1',$dd->id)}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div>
                        <label>Dia diem du lich</label>
                        <input type="text" class="form-control" name="tendiadiem" aria-describedby="basic-addon1" value="{{$dd->tendiadiem}}">
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