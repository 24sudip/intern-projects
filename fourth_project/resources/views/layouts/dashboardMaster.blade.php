<!-- Very little is needed to make a happy life. - Marcus Aurelius -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{ asset('plugins') }}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins') }}/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins') }}/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        <link href="{{ asset('plugins') }}/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('dashboard_assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_assets') }}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('dashboard_assets') }}/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="{{ asset('dashboard_assets') }}/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="{{ asset('dashboard_assets') }}/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            @if (Auth::user()->profile_photo == NULL)
                            <img src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                            @else
                            <img src="{{ asset('upload/profile_photos') }}/{{ Auth::user()->profile_photo }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                            @endif
                        </div>
                        <h5><a href="#">{{ Auth::user()->name }}</a> </h5>
                        <p class="text-muted" style="text-transform: capitalize">{{ Auth::user()->role }}</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="{{ route('home') }}">
                                    <i class="fi-air-play"></i>
                                    {{-- <span class="badge badge-danger badge-pill pull-right">7</span> --}}
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            @if (Auth::user()->role == 'librarian')
                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('user.list') }}">User List</a></li>
                                    {{-- <li><a href="apps-tickets.html">Tickets</a></li> --}}
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span>Subject Category</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('category.page') }}">Add/View Subject</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layout"></i><span>Books</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('create.book') }}">Add Books</a></li>
                                    <li><a href="{{ route('view.book') }}">View Books</a></li>
                                    <li><a href="{{ route('show.soft.deleted.book') }}">Soft Deleted Books</a></li>
                                </ul>
                            </li>
                            @endif

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Elements </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="widgets.html">
                                    <i class="fi-command"></i> <span> Widgets </span>
                                </a>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right">10</span> <span> Forms </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">More</li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success pull-right">Hot</span> <span> Extra Pages </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

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

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 50px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 50px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('dashboard_assets') }}/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    @if (Auth::user()->profile_photo == NULL)
                                    <img src="{{ asset('upload/profile_photos/default_profile_photo.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                                    @else
                                    <img src="{{ asset('upload/profile_photos') }}/{{ Auth::user()->profile_photo }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                                    @endif
                                    <span class="ml-1">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="{{ route('edit.profile') }}" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Edit Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a class="ms-4">
                                        <i class="fi-power"></i>
                                        <span>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Highdmin panel</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    @yield('content')

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('dashboard_assets') }}/js/jquery.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/popper.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/metisMenu.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/waves.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('plugins') }}/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('plugins') }}/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/jszip.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/pdfmake.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/vfs_fonts.js"></script>
        <script src="{{ asset('plugins') }}/datatables/buttons.html5.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="{{ asset('plugins') }}/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('plugins') }}/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="{{ asset('plugins') }}/datatables/dataTables.select.min.js"></script>

        <!-- Chart JS -->
        <script src="{{ asset('plugins') }}/chart.js/chart.bundle.js"></script>
        <script src="{{ asset('dashboard_assets') }}/pages/jquery.chartjs.init.js"></script>

        <!-- Flot chart -->
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.min.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.time.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/curvedLines.js"></script>
        <script src="{{ asset('plugins') }}/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <script type="text/javascript" src="{{ asset('plugins') }}/jquery-knob/excanvas.js"></script>
        <script src="{{ asset('plugins') }}/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('dashboard_assets') }}/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard_assets') }}/js/jquery.core.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/jquery.app.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
        @yield('footer_script')
    </body>
</html>
