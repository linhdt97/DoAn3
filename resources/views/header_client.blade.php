<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #F5ECCE">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" role="search" action="{{route('tim-kiem')}}">
			        <div class="form-group" style="">
			          <input type="text" name= "timkiem" class="form-control" placeholder="nhap thong tin can tim kiem" size="40"> 
			        </div>
			        <button type="submit" class="btn btn-default" style="">Search</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                        @if(Auth::User()->anhdaidien != "")
                            <li><p style="margin-top: 5px"><a href="{{route('thong-tin-ca-nhan')}}"> <img src="upload/{{Auth::User()->anhdaidien}}" width="50" height="45">  {{Auth::User()->hoten}}</a></p></li>
                        @else
                            <li><a href="{{route('thong-tin-ca-nhan')}}"><i class="fa fa-user"></i> {{Auth::User()->hoten}} </a></li>
                        @endif
                            @if(Auth::User()->quyen == 2)                    
                                <li><a href="{{route('trang-chu-hdv')}}"><i class="glyphicon glyphicon-arrow-right"></i> Den trang quan ly tour</a></li>
                            @elseif(Auth::User()->quyen == 1)
                                <li><a href="{{route('lich-su')}}"><i class="glyphicon glyphicon-shopping-cart"></i> Lich su dat tour</a></li>
                            @endif
                                
                            <li>
                                <a href="{{ route('dang-xuat')}}">Đăng xuất</a>
                            </li>
                        

                    @else
                        <li> 
                            <a href="{{ route('dang-ky-khach')}}">Đăng ký Khách hàng</a>
                        </li>
                        <li>
                            <a href="{{ route('dang-ky-hdv')}}">Đăng ký Huong dan vien</a>
                        </li>
                        <li>
                            <a href="{{ route('dang-nhap')}}">Đăng nhập</a>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>