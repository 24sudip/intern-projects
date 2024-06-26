<!-- It is never too late to be what you might have been. - George Eliot -->
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
        <link rel="shortcut icon" href="{{ asset('horizontal_assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('horizontal_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('horizontal_assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('horizontal_assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('horizontal_assets/js/modernizr.min.js') }}"></script>

    </head>

    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('horizontal_assets') }}/images/logo_sm.png" alt="" height="26" class="logo-small">
                            <img src="{{ asset('horizontal_assets') }}/images/logo.png" alt="" height="22" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    {{-- <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-earth"></i> English  <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Spanish
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Italian
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        French
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Russian
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-dark badge-pill noti-icon-badge">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('horizontal_assets') }}/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('horizontal_assets') }}/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('horizontal_assets') }}/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('horizontal_assets') }}/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="{{ asset('horizontal_assets') }}/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('horizontal_assets') }}/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            @auth()
                            <li class="has-submenu">
                                <a href="{{ route('home') }}"><i class="icon-speedometer"></i>Dashboard</a>
                            </li>
                            @else
                            <li class="has-submenu">
                                <a href="{{ route('login') }}"><i class="icon-speedometer"></i>Login</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ route('register') }}"><i class="icon-speedometer"></i>Register</a>
                            </li>
                            @endauth
                            {{-- <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Apps</a>
                                <ul class="submenu">
                                    <li><a href="apps-calendar.html">Calendar</a></li>
                                    <li><a href="apps-tickets.html">Tickets</a></li>
                                    <li><a href="apps-taskboard.html">Task Board</a></li>
                                    <li><a href="apps-task-detail.html">Task Detail</a></li>
                                    <li><a href="apps-contacts.html">Contacts</a></li>
                                    <li><a href="apps-projects.html">Projects</a></li>
                                    <li><a href="apps-companies.html">Companies</a></li>
                                    <li><a href="apps-file-manager.html">File Manager</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>UI Elements</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-cards.html">Cards</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-spinners.html">Spinners</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                            <li><a href="ui-tabs.html">Tabs</a></li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-notifications.html">Notification</a></li>
                                            <li><a href="ui-grid.html">Grid</a></li>
                                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                            <li><a href="ui-range-slider.html">Range Slider</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                            {{-- <li class="has-submenu">
                                <a href="#"><i class="icon-fire"></i>Components</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Inbox</a></li>
                                            <li><a href="email-read.html">Read Email</a></li>
                                            <li><a href="email-compose.html">Compose Email</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="widgets.html">Widgets</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-google.html">Google Chart</a></li>
                                            <li><a href="chart-chartist.html">Chartist Chart</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                            <li><a href="form-x-editable.html">X Editable</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-feather.html">Feather Icons</a></li>
                                            <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Tables</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-foo.html">Foo Tables</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-vector.html">Vector Maps</a></li>
                                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                            {{-- <li class="has-submenu">
                                <a href="#"><i class="icon-docs"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-logout.html">Logout</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                            {{-- <li class="has-submenu">
                                <a href="#"><i class="icon-present"></i>Extra Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extras-timeline.html">Timeline</a></li>
                                            <li><a href="extras-profile.html">Profile</a></li>
                                            <li><a href="extras-invoice.html">Invoice</a></li>
                                            <li><a href="extras-faq.html">FAQ</a></li>
                                            <li><a href="extras-pricing.html">Pricing</a></li>
                                            <li><a href="extras-email-template.html">Email Templates</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extras-ratings.html">Ratings</a></li>
                                            <li><a href="extras-search-results.html">Search Results</a></li>
                                            <li><a href="extras-gallery.html">Gallery</a></li>
                                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 © Highdmin. - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery  -->
        <script src="{{ asset('horizontal_assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('horizontal_assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('horizontal_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('horizontal_assets/js/waves.js') }}"></script>
        <script src="{{ asset('horizontal_assets/js/jquery.slimscroll.js') }}"></script>

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
        <!--[if IE]>
        <script type="text/javascript" src="{{ asset('plugins') }}/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="{{ asset('plugins') }}/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('horizontal_assets/pages/jquery.dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('horizontal_assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('horizontal_assets/js/jquery.app.js') }}"></script>
    </body>
</html>
