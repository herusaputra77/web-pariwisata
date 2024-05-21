<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('tanah_datar_logo.png') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}backEnd/plugins/morris/morris.css">

    <link href="{{ asset('/') }}backEnd/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/style.css" rel="stylesheet" type="text/css">
      <!-- DataTables -->
      <link href="{{ asset('/') }}backEnd/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/') }}backEnd/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

      <!-- Responsive datatable examples -->
      <link href="{{ asset('/') }}backEnd/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span class="logo-light">
                        <i class="mdi mdi-camera-control"></i> SIPAR
                    </span>
                    <span class="logo-sm">
                        <i class="mdi mdi-camera-control"></i>
                    </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('/') }}backEnd/images/flags/us_flag.jpg" class="mr-2" height="12"
                                alt="" /> English <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('/') }}backEnd/images/flags/french_flag.jpg" alt=""
                                    height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('/') }}backEnd/images/flags/spain_flag.jpg" alt=""
                                    height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('/') }}backEnd/images/flags/russia_flag.jpg" alt=""
                                    height="16" /><span> Russian </span></a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('/') }}backEnd/images/flags/germany_flag.jpg" alt=""
                                    height="16" /><span> German </span></a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('/') }}backEnd/images/flags/italy_flag.jpg" alt=""
                                    height="16" /><span> Italian </span></a>
                        </div>
                    </li>

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy
                                            text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You
                                            have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It
                                            is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You
                                            have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span
                                            class="text-muted">Dummy text of the printing and typesetting
                                            industry.</span></p>
                                </a>

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('user.png') }}" alt="user"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i>
                                    Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    class="mdi mdi-power text-danger"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                        class="mdi mdi-power text-danger"></i> Logout</a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="/admin/beranda" class="waves-effect">
                                <i class="icon-accelerator"></i> <span> Beranda </span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="/admin/user" class="waves-effect">
                                <i class="fas fa-user"></i> <span> User </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-view-compact"></i><span>
                                    Master <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="/admin/kategori">Kategori</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-view-compact"></i><span>
                                    Contents <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="/admin/slider">Slider</a></li>
                                <li><a href="/admin/content">Wisata</a></li>
                                <li><a href="/admin/jadwal-event">Jadwal Event</a></li>
                                {{-- <li><a href="/admin/paralax">Paralax</a></li> --}}
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">@yield('title')</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Well done!</strong>  {{ session('pesan') }}.
                        </div>
                    @endif
                    @if (session('hapus'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Well done!</strong>  {{ session('hapus') }}.
                        </div>
                    @endif
                    @yield('content')

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2024 <span class="d-none d-sm-inline-block"> - Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Heru Saptra</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('/') }}backEnd/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/metismenu.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('/') }}backEnd/js/waves.min.js"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('/') }}backEnd/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('/') }}backEnd/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('/') }}backEnd/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}backEnd/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('/') }}backEnd/pages/datatables.init.js"></script>  

    {{-- <script src="{{ asset('/') }}backEnd/pages/dashboard.init.js"></script> --}}

    <!-- App js -->
    <script src="{{ asset('/') }}backEnd/js/app.js"></script>
    @livewireScripts
</body>

</html>
