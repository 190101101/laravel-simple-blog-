<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>blog</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="/admin/css/admin.css">
        <link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/admin/dist/css/skins/skin-blue.min.css">
        <link rel="stylesheet" href="/general/css/alertify.min.css">
        <script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/admin/bower_components/jquery-ui/jquery-ui.js"></script>
        <script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/admin/dist/js/adminlte.min.js"></script>
        <script src="/general/js/alertify.min.js"></script>
        <script src="/general/js/general.js"></script>
        <script src="/admin/bower_components/ckeditor/ckeditor.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>blog</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>blog</b></span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{Auth::user()->name}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            {{Auth::user()->name}}
                                            <small>admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="/logout" class="btn btn-default btn-flat">logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="/"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{Auth::user()->name}}</p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i>{{Auth::user()->type}}</a>
                        </div>
                    </div>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active"><a href="/admin/panel"><i class="fa fa-link"></i><span>panel</span></a></li>
                        <li><a href="/admin/setting"><i class="fa fa-link"></i><span>setting</span></a></li>
                        <li><a href="/admin/blog"><i class="fa fa-paper-plane"></i><span>blog</span></a></li>
                        <li><a href="/admin/page"><i class="fa fa-paper-plane"></i><span>page</span></a></li>
                        <li><a href="/admin/user"><i class="fa fa-user"></i><span>user</span></a></li>
                        <li><a href="/admin/contact"><i class="fa fa-edit"></i><span>contacts</span></a></li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @yield('content')
                <!-- Main content -->
                <section class="content container-fluid">
                    <!--------------------------
                        | Your Page Content Here |
                        -------------------------->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>
            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- AdminLTE App -->
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
            Both of these plugins are recommended to enhance the
            user experience. -->
        @if(session()->has('success'))
            <script>alertify.success('{{session('success')}}')</script>
        @endif
        
        @if(session()->has('error'))
            <script>alertify.error('{{session('error')}}')</script>
        @endif

         @if(session()->has('warning'))
            <script>alertify.warning('{{session('warning')}}')</script>
        @endif

        @foreach($errors->all() as $error)
            <script>alertify.error('{{$error}}')</script>
        @endforeach

    </body>
</html>