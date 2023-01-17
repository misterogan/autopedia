<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#0086FF" />
    <meta name="msapplication-TileColor" content="#0086FF">
    <meta name="msapplication-navbutton-color" content="#FFFDFA">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0086FF">
    <meta content="text/html; charset=UTF-8" name="Content-Type" />
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="Autopedia - Content Management System">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="MicroAd Indonesia">

    <title>Autopedia Dashboard</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">


    <style>
        div.dataTables_wrapper div.dataTables_filter {
            text-align: right;
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            margin: 2px 0;
            white-space: nowrap;
            justify-content: flex-end;
        }
    </style>

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-blue-autopedia sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/home">
                <img src="{{ asset('assets/images/png/logo-white.png') }}" class="logo img-fluid" alt="logo">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/home') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item {{ request()->is('admin/about') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/about')}}">
                    <i class="fa fa-building"></i>
                    <span>About</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/banner') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/banner')}}">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    {{-- <i class="fa fa-picture-o" aria-hidden="true"></i> --}}
                    <span>Banner</span></a>
            </li>


            <li class="nav-item dropdown {{ request()->is('admin/blog') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                    data-toggle="dropdown"><i class="fa fa-rss-square"></i><span> &nbsp;&nbsp;Blog</span></a>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="{{URL::to('/admin/blog')}}">Blog</a>
                    <a class="dropdown-item" href="{{URL::to('/admin/blog/category')}}">Blog Category</a>
                </div>
            </li>

            <li class="nav-item {{ request()->is('admin/business') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/business')}}">
                    <i class="fa fa-briefcase"></i>
                    <span>Business</span></a>
            </li>
            <li class="nav-item {{ request()->is('admin/feedback') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/feedback')}}">
                    <i class="fa fa-comments"></i>
                    <span>Testimonial</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/job') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/job')}}">
                    <i class="fa fa-user-plus"></i>
                    <span>Jobs</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/management') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/management')}}">
                    <i class="fa fa-users"></i>
                    <span>Management</span></a>
            </li>
            <li class="nav-item dropdown {{ request()->is('admin/category') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                    data-toggle="dropdown"><i class="fa fa-file"></i><span> &nbsp;&nbsp;File</span></a>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="{{URL::to('/admin/category')}}">Category</a>
                    <a class="dropdown-item" href="{{URL::to('/admin/subcategory')}}">Subcategory</a>
                    <a class="dropdown-item" href="{{URL::to('/admin/file')}}">Files</a>
                </div>
            </li>
            <li class="nav-item {{ request()->is('admin/milestone') ? 'active' : '' }}">
                <a class="nav-link" href="{{URL::to('/admin/milestone')}}">
                    <i class="fa fa-magnet"></i>
                    <span>Milestones</span></a>
            </li>

            {{-- <li class="nav-item">--}}
            {{-- <a class="nav-link" href="/admin/organisation">--}}
            {{-- <i class="fa fa-sitemap"></i>--}}
            {{-- <span>Organisation</span></a>--}}
            {{-- </li>--}}
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name ?? ''}}</span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/admin/password/change">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <a class="dropdown-item" href="/admin/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                @yield('content')
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Autopedia 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/js/demo/datatables-demo.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')

</body>

</html>