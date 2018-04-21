            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Quan ly Tour<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('dstour')}}">Danh sách Tour cua toi</a>
                                </li>
                                <li>
                                    <a href="{{route('themtour')}}">Them Tour</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i>Quan ly don dat tour<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('dsdontour')}}">Danh sach don dat tour</a>
                                </li>
                                <li>
                                    <a href="{{route('dsdontourmoi')}}">Don dat tour moi</a>
                                </li>
                                <li>
                                    <a href="{{route('dsdontourcn')}}">Don dat tour da chap nhan</a>
                                </li>
                                <li>
                                    <a href="{{route('dsdontourtc')}}">Don dat tour da tu choi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>