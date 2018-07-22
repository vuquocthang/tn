<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tool Nuôi</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('HTML') }}/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{ asset('HTML') }}/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('HTML') }}/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="{{ asset('HTML') }}/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="{{ asset('HTML') }}/vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('HTML') }}/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('HTML') }}/css/pages/only_dashboard.css" />
    <link href="{{ asset('HTML') }}/css/pages/advmodals.css" rel="stylesheet" />
    <link href="{{ asset('HTML') }}/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
    <!--end of page level css-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/dropzone.css">
    <!-- End dropzone -->

    <style>
        html,
        body *:not(i):not(.fa) {
            font-family: 'Open Sans', sans-serif !important;
        }
    </style>

    @yield('css')
</head>

<body class="skin-josh">
    <header class="header">
        <a href="#" class="logo">
            <img src="{{ asset('HTML') }}/img/logo.png" alt="Logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="{{ asset('HTML') }}/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="{{ asset('HTML') }}/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br>
                                        <small>45 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                    <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                </i>
                                    <img src="{{ asset('HTML') }}/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br>
                                        <small>An hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                    <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                </i>
                                    <img src="{{ asset('HTML') }}/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br>
                                        <small>3 Hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Just Now
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Few seconds ago
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        8 minutes ago
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        An hour ago
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        3 Hours ago
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        Yesterday
                                    </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                        <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                        2 July 2014
                                    </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('HTML') }}/img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    {{ $user->name }}
                                    <span>
                                    <i class="caret"></i>
                                </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="{{ asset('HTML') }}/img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                                <p class="topprofiletext">{{ $user->name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#">
                                        <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                    </a>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">

                        @if($user->is_admin == 0)
                        <li class="{{ \Request::route()->getName() == 'uid.index' || \Request::route()->getName() == 'uid.upload' || \Request::route()->getName() == 'uid.sent' ? 'active' : '' }}">
                            <a href="{{ route('uid.index') }}">
                                <i class="fa fa-users"></i>
								<span class="title">Kết Bạn</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'uid.upload' ? 'active' : '' }}">
                                    <a href="{{ route('uid.upload') }}">
                                        <i class="fa fa-angle-double-right"></i> Danh Sách Tài Khoản Uid
                                    </a>
                                </li>

                                <li class="{{ \Request::route()->getName() == 'uid.index' ? 'active' : '' }}">
                                    <a href="{{ route('uid.index') }}">
                                        <i class="fa fa-angle-double-right"></i> Danh Sách Tài Khoản Đang Kết Bạn
                                    </a>
                                </li>

                                <li class="{{ \Request::route()->getName() == 'uid.sent' ? 'active' : '' }}">
                                    <a href="{{ route('uid.sent') }}">
                                        <i class="fa fa-angle-double-right"></i> Danh Sách Tài Khoản Đã Kết Bạn
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ \Request::route()->getName() == 'clone.index' || \Request::route()->getName()  == 'clone.upload' || \Request::route()->getName()  == 'clone.add' ? 'active' : '' }}">
                            <a href="{{ route('clone.index') }}">
                                <i class="fa fa-user"></i>
								<span class="title">Clone</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'clone.add' ? 'active' : '' }}">
                                    <a href="{{ route('clone.add') }}">
                                        <i class="fa fa-angle-double-right"></i> Add
                                    </a>
                                </li>

                                <li class="{{ \Request::route()->getName() == 'clone.upload' ? 'active' : '' }}">
                                    <a href="{{ route('clone.upload') }}">
                                        <i class="fa fa-angle-double-right"></i> Upload
                                    </a>
                                </li>
                                <li class="{{ \Request::route()->getName() == 'clone.index' ? 'active' : '' }}">
                                    <a href="{{ route('clone.index') }}">
                                        <i class="fa fa-angle-double-right"></i> Index
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Post -->
                        <li class="{{ \Request::route()->getName() == 'post.index' || \Request::route()->getName()  == 'post.add' ? 'active' : '' }}">
                            <a href="{{ route('clone.index') }}">
                                <i class="fa fa-user"></i>
								<span class="title">Bài Viết</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'post.add' ? 'active' : '' }}">
                                    <a href="{{ route('post.add') }}">
                                        <i class="fa fa-angle-double-right"></i> Thêm Mới
                                    </a>
                                </li>

                                <li class="{{ \Request::route()->getName() == 'post.index' ? 'active' : '' }}">
                                    <a href="{{ route('post.index') }}">
                                        <i class="fa fa-angle-double-right"></i> Danh Sách
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End post -->

                        <!-- Thu vien -->
                        <li class="{{ \Request::route()->getName() == 'thu-vien.chuyen-muc' || \Request::route()->getName()  == 'thu-vien.danh-sach' ? 'active' : '' }}">
                            <a href="{{ route('clone.index') }}">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Thư Viện</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'thu-vien.danh-sach' ? 'active' : '' }}">
                                    <a href="{{ route('thu-vien.danh-sach') }}">
                                        <i class="fa fa-tasks"></i> Danh Sách
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#post-add" data-toggle="modal" data-href="#post-add">
                                        <i class="fa fa-plus"></i> Thêm Mới
                                    </a>
                                </li>

                                <li class="{{ \Request::route()->getName() == 'thu-vien.chuyen-muc' ? 'active' : '' }}">
                                    <a href="{{ route('thu-vien.chuyen-muc') }}">
                                        <i class="fa fa-cubes"></i> Chuyên Mục
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Thu vien -->

                        <!-- Bai Cho Dang -->
                        <li class="{{ \Request::route()->getName() == 'post.index' || \Request::route()->getName()  == 'post.add' ? 'active' : '' }}">
                            <a href="{{ route('clone.index') }}">
                                <i class="fa fa-cloud-upload"></i>
                                <span class="title">Bài Chờ Đăng</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'post.add' ? 'active' : '' }}">
                                    <a href="{{ route('post.add') }}">
                                        <i class="fa fa-tasks"></i> Danh Sách
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Bai Cho Dang -->

                        <!-- Lich Dang Bai-->
                        <li class="{{ \Request::route()->getName() == 'lich-dang-bai.danh-sach' ? 'active' : '' }}">
                            <a href="{{ route('clone.index') }}">
                                <i class="fa fa-clock-o"></i>
                                <span class="title">Lịch Đăng Bài</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'lich-dang-bai.danh-sach' ? 'active' : '' }}">
                                    <a href="{{ route('lich-dang-bai.danh-sach') }}">
                                        <i class="fa fa-tasks"></i> Danh Sách
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#schedule-add" data-toggle="modal" data-href="#schedule-add">
                                        <i class="fa fa-plus"></i> Thêm Mới
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Lich Dang Bai-->

                        @else
                        <li class="{{ \Request::route()->getName() == 'admin.keyword.index' || \Request::route()->getName() == 'admin.keyword.add' ? 'active' : '' }}">
                            <a href="{{ route('admin.keyword.index') }}">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Keyword</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'admin.keyword.add' ? 'active' : '' }}">
                                    <a href="{{ route('admin.keyword.add') }}">
                                        <i class="fa fa-angle-double-right"></i> Add
                                    </a>
                                </li>
                                <li class="{{ \Request::route()->getName() == 'admin.keyword.index' ? 'active' : '' }}">
                                    <a href="{{ route('admin.keyword.index') }}">
                                        <i class="fa fa-angle-double-right"></i> Index
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ \Request::route()->getName() == 'admin.user.index' || \Request::route()->getName() == 'admin.user.add' ? 'active' : '' }}">
                            <a href="{{ route('admin.user.index') }}">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">User</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="{{ \Request::route()->getName() == 'admin.user.add' ? 'active' : '' }}">
                                    <a href="{{ route('admin.user.add') }}">
                                        <i class="fa fa-angle-double-right"></i> Add
                                    </a>
                                </li>
                                <li class="{{ \Request::route()->getName() == 'admin.user.index' ? 'active' : '' }}">
                                    <a href="{{ route('admin.user.index') }}">
                                        <i class="fa fa-angle-double-right"></i> Index
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ \Request::route()->getName() == 'admin.config.index' ? 'active' : '' }}">
                            <a href="{{ route('admin.config.index') }}">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Config</span>
							</a>
						</li>
                        @endif

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>

        @section('container')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> You have successfully logged in.
            </div>
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 text-right">
                                            <span>Views Today</span>
                                            <div class="number" id="myTargetElement1"></div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement1.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement1.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Today's Sales</span>
                                            <div class="number" id="myTargetElement2"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement2.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement2.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Subscribers</span>
                                            <div class="number" id="myTargetElement3"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement3.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement3.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Users</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row ">
                    <div class="col-md-8 col-sm-6">
                        <div class="panel panel-border">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i> Realtime Server Load
                                    <small>- Load on the Server</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div id="realtimechart" style="height:350px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="panel blue_gradiant_bg">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Server Stats
                                    <small class="white-text">- Monthly Report</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar"></div>
                                            <h3 class="title">Network</h3>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"></div>
                                    <div class="margin-bottom-10 visible-sm"></div>
                                    <div class="col-sm-6">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_line"></div>
                                            <h3 class="title">Load Rate</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN Percentage monitor -->
                        <div class="panel green_gradiante_bg ">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff" data-hc="white"></i> Result vs Target
                                </h3>
                            </div>
                            <div class="panel-body nopadmar">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <h4 class="small-heading">Sales</h4>
                                        <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45">
                                <span class="percent">45</span>
                                        </span>
                                    </div>
                                    <!-- /.col-sm-4 -->
                                    <div class="col-sm-6 text-center">
                                        <h4 class="small-heading">Reach</h4>
                                        <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                <span class="percent">25</span>
                                        </span>
                                    </div>
                                    <!-- /.col-sm-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- END BEGIN Percentage monitor-->
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="panel panel-success panel-border">
                            <div class="panel-heading  border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Calendar
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div id='external-events'></div>
                                <div id="calendar"></div>
                                <div class="box-footer pad-5">
                                    <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Create event
                                    </a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    <i class="fa fa-plus" style="margin-top: 8px;"></i> Create Event
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                                    <div class="input-group-btn">
                                                        <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            Type
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" id="color-chooser">
                                                            <li>
                                                                <a class="palette-primary" href="#">Primary</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-success" href="#">Success</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-info" href="#">Info</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-warning" href="#">warning</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-danger" href="#">Danger</a>
                                                            </li>
                                                            <li>
                                                                <a class="palette-default" href="#">Default</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                                    Close
                                                    <i class="fa fa-times" style="margin-top: 4px;"></i>
                                                </button>
                                                <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                                    <i class="fa fa-plus" style="margin-top: 5px;"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- To do list -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="panel panel-primary todolist">
                            <div class="panel-heading border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white" data-l="true"></i> Tasks
                                </h4>
                            </div>
                            <div class="panel-body nopadmar">
                                <form class="row list_of_items">
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck checkbox-custom">
                                                <input type="checkbox" class="striked large" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with CEO</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Team Out</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Review On Sales</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with Client</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Analysis on Views</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Seminar on Market</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Business Review</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Purchase Equipment</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Meeting with CEO</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="todolist_list showactions">
                                        <div class="col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1">
                                            <div class="todoitemcheck">
                                                <input type="checkbox" class="striked" />
                                            </div>
                                            <div class="todotext todoitem">Takeover Leads</div>
                                            <span class="label label-default">2016-07-27</span>
                                        </div>
                                        <div class="col-md-4  col-sm-4 col-xs-4  pull-right showbtns todoitembtns">
                                            <a href="#" class="todoedit">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <span class="striks">|</span>
                                            <a href="#" class="tododelete redcolor">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <div class="todolist_list adds">
                                    <form role="form" id="main_input_box" class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="custom_textbox">Add Task</label>
                                            <input id="custom_textbox" name="Item" type="text" required placeholder="Add list item here" class="form-control" />
                                        </div>
                                        <div class="form-group is-empty date_pick">
                                            <label class="sr-only" for="task_deadline">Datepicker</label>
                                            <input class="form-control datepicker" placeholder='Dead line' id="task_deadline" data-date-format="YYYY/MM/DD" required="required" name="task_deadline" type="text">
                                        </div>
                                        <input type="submit" value="Add Task" class="btn btn-primary add_button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row ">
                    <div class="col-md-4 col-sm-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading border-light">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white" data-l="true"></i> Quick Mail
                                </h4>
                            </div>
                            <div class="panel-body no-padding">
                                <div class="compose row">
                                    <label class="col-md-3 hidden-xs">To:</label>
                                    <input type="text" class="col-md-9 col-xs-9" placeholder="name@email.com " tabindex="1" />
                                    <div class="clear"></div>
                                    <label class="col-md-3 hidden-xs">Subject:</label>
                                    <input type="text" class="col-md-9 col-xs-9" tabindex="1" placeholder="Subject" />
                                    <div class="clear"></div>
                                    <div class='box-body'>
                                        <form>
                                            <textarea class="textarea textarea_home resize_vertical" placeholder="Write mail content here"></textarea>
                                        </form>
                                    </div>
                                    <br />
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-danger">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="panel panel-border">
                            <div class="panel-heading">
                                <h4 class="panel-title pull-left visitor">
                                    <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i> Visitors Map
                                </h4>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a class="panel-collapse collapses" href="#">
                                                <i class="fa fa-angle-up"></i>
                                                <span>Collapse</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-refresh" href="#">
                                                <i class="fa fa-refresh"></i>
                                                <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-config" href="#panel-config" data-toggle="modal">
                                                <i class="fa fa-wrench"></i>
                                                <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="panel-expand" href="#">
                                                <i class="fa fa-expand"></i>
                                                <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body nopadmar">
                                <div id="world-map-markers" style="width:100%; height:300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
        <!-- right-side -->
        @show

        <div class="extended_modals">
			<!-- Tao bai viet -->
            <div class="modal fade in" id="post-add" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Tạo bài viết mới</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab">Nội Dung</a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab">Hình Ảnh</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-body">
                                                <form class="form-horizontal" action="{{ route('thu-vien.tao-bai-viet') }}" method="post">
                                                    <fieldset>
														@csrf
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Chuyên Mục:</label>
                                                            <div class="col-md-5">
                                                                <select name="post_cat_id" class="form-control">
																	@foreach($user->postCats()->get() as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
																	@endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Nội Dung:</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control resize_vertical" id="message" name="text" placeholder="Nhập nội dung ở đây ..." rows="7"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class=" form-group modal-footer">
                                                            <button type="submit" class="btn btn-primary">Lưu Lại</button>
                                                            <button type="button" data-dismiss="modal" class="btn btn-default">Hủy Bỏ</button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-body">
                                                <form class="form-horizontal" action="#" method="post">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="dropzone" id="my-awesome-dropzone">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Them moi lich dang bai modal -->
            <div class="modal fade in" id="schedule-add" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Tạo lịch đăng mới</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="{{ route('thu-vien.tao-lich-dang') }}" method="post">
                                            <fieldset>
												@csrf
											
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Ngày Hẹn:</label>
                                                    <div class="col-md-5">
                                                        <select name="date" class="form-control" required>
                                                            <option selected="selected" value="0">Sunday</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="3">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="6">Saturday</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <select name="hour" class="form-control" required>
                                                            @for($i=0; $i <24; $i++) 
																<option value="{{ $i }}" {{ $i==8 ? 'selected' : '' }}>{{ $i }}:00</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="email">Lựa Chọn</label>
                                                    <div class="col-md-5">
                                                        <select name="post_cat_id" class="form-control" required>
                                                            @foreach( $user->postCats()->get() as $index => $item )
                                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
															@endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="message">Tài Khoản</label>

                                                    <div class="col-sm-10 pre-scrollable" style="max-height: 180px;">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="3" align="right">
                                                                        <button type="button" id="btnSelectAll" class="btn btn-xs btn-info" title="Chọn tất cả Tài khoản">
                                                                            <i class="fa fa-check"></i> Chọn tất cả
                                                                        </button>
                                                                        <button type="button" id="btnSelectNone" class="btn btn-xs btn-default" title="Không chọn Tài khoản nào">
                                                                            <i class="fa fa-times"></i> Bỏ tất cả
                                                                        </button>
                                                                    </td>
                                                                </tr>
																
																@foreach($user->clones()->get() as $index => $item)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <input type="checkbox" class="itemcheck" name="clone_id[]" value="{{ $item->id }}">
                                                                    </td>
                                                                    <td>
                                                                        <a class="" href="https://fb.com/{{ $item->uid }}" target="_blank">{{ $item->note }}</a>
                                                                    </td>
                                                                </tr>
																@endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class=" form-group modal-footer">
                                                    <button type="submit" class="btn btn-primary">Lưu Lại</button>
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy Bỏ</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{ asset('HTML') }}/js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('HTML') }}/vendors/jquery.easy-pie-chart/js/easypiechart.min.js"></script>
    <script src="{{ asset('HTML') }}/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js"></script>
    <script src="{{ asset('HTML') }}/js/jquery.easingpie.js"></script>
    <!--end easy pie chart -->
    <!--for calendar-->
    <script src="{{ asset('HTML') }}/vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="{{ asset('HTML') }}/vendors/fullcalendar/js/fullcalendar.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{ asset('HTML') }}/vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
    <script src="{{ asset('HTML') }}/vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('HTML') }}/vendors/sparklinecharts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('HTML') }}/vendors/countUp.js/js/countUp.js"></script>
    <!--   maps -->
    <script src="{{ asset('HTML') }}/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('HTML') }}/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('HTML') }}/vendors/chartjs/Chart.js"></script>
    <script type="text/javascript" src="{{ asset('HTML') }}/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!--  todolist-->
    <script src="{{ asset('HTML') }}/js/pages/todolist.js"></script>
    <script src="{{ asset('HTML') }}/js/pages/dashboard.js" type="text/javascript"></script>
    <script src="{{ asset('HTML') }}/js/pages/form_examples.js"></script>
    <script src="{{ asset('HTML') }}/js/pages/datepicker.js" type="text/javascript"></script>
    <script src="{{ asset('HTML') }}/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/dropzone.js"></script>
    <!-- end of page level js -->

    <script>
        $("#btnSelectAll").click(function() {
            $("input[name='clone_id[]']").each(function() {
                $(this).prop("checked", true);
            });
        });

        $("#btnSelectNone").click(function() {
            $("input[name='clone_id[]']").each(function() {
                $(this).prop("checked", false);
            });
        });

        var myDropzone = new Dropzone("div#my-awesome-dropzone", {
            url: "{{ route('post.upload') }}",
            headers: {
                'X-CSRF-TOKEN': '{!! csrf_token() !!}'
            },
            addRemoveLinks: true
        });
    </script>

    @yield('js')

</body>

</html>