        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Trang Huong Dan Vien</a>
            </div>
            <!-- /.navbar-header -->
            @if(Auth::user())
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{Auth::user()->hoten}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{route('dang-xuat')}}"><i class="fa fa-sign-out fa-fw"></i> Dang xuat</a>
                        </li>
                        <li><a href="{{route('trang-chu')}}"><i class="fa fa-sign-out fa-fw"></i> Quay ve trang chu</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            @endif
            @if(Auth::user()->status ==2)
                @include('layout_hdv.menu')
            @else
                 <marquee><font size="30" color="red">Ban can lien he admin qua so dien thoai 01683494193 de duoc cap quyen tao tour</font></marquee>
            @endif
            <!-- /.navbar-static-side -->
        </nav>
