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

                <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="....." size="40"> 
			        </div>
			        <button type="submit" class="btn btn-default">Search</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                        <li><a href=""><i class="fa fa-user"></i>{{Auth::User()->hoten}}</a></li>
                        @if(Auth::User()->quyen == 2)                    
                            <li><a href="{{route('trang-chu-hdv')}}"><i class="fa fa-user"></i>Den trang quan ly tour</a></li>
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