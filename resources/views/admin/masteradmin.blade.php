<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('admincss/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('admincss/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('admincss/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('admincss/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{URL::asset('admincss/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{URL::asset('admincss/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <link href="{{URL::asset('admincss/myscss.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('list-bill')}}">Quản Lý</a>
                <a class="navbar-brand" href="{{route('trang_chu')}}">Về trang chủ</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                @if(Auth::check())
                <li><a href="">Chào bạn: {{Auth::user()->name}}</a></li>
                @endif
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="fa fa-sign-out fa-lg"></i> Đăng xuất
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="#"><i class="fa fa-cutlery fa-fw"></i> Món Ăn<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('list_food')}}">Danh sách món ăn</a>
                        </li>
                        <li>
                            <a href="{{route('add_food')}}">Thêm món ăn</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart fa-fw"></i> Hóa đơn<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('list-bill') }}">Danh sách hóa đơn</a>
                        </li>
                        <li>
                            <a href="{{ route('list-billre') }}">Hóa đơn đã nhận</a>
                        </li>
                        <li>
                            <a href="{{ route('list-billen') }}">Hóa đơn đã giao</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> Bài viết<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('list-new') }}">Danh sách bài viết</a>
                        </li>
                        <li>
                            <a href="{{ route('addnew') }}">Thêm bài viết mới</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bars fa-fw"></i> Thống kê<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('statistic') }}">Bảng thống kê</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                @if (Auth::user()->role >= 3 )
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="list-user">Cấp quyền người dùng</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                @endif
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Content -->
            @yield('content_admin')
            <!-- End Content -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
    $(function () {
        $("#file").change(function () {
            $("#imgup").html("");

            $("#imgup").show();
            $("#imgup").append("<img />");
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imgup img").attr("src", e.target.result);
            }
            reader.readAsDataURL($(this)[0].files[0]);     
        });
    });
</script>
<script src="{{URL::asset('admincss/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('admincss/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{URL::asset('admincss/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('admincss/dist/js/sb-admin-2.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{URL::asset('admincss/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{URL::asset('admincss/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

<!-- MyScript -->
<script src="{{URL::asset('admincss/myscript.js') }}"></script>
</body>

</html>
