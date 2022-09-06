<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrass</title>
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/pages/data-table.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label"> Extrass</p>
            </div>
        </div>
        <header class="topbar">
            <nav style=" background-color:#273146 ;">
                <div class=" nav-wrapper">
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="dark-logo" src="">
                        </span>
                        <span class="text">
                            <h5>Extrass</h5>
                        </span>
                    </a>
                    <ul class="left">
                    </ul>
                    <ul class="right">
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><i style="color: white;" class="fas fa-user"></i></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><i style="color: white;" class="fas fa-user"></i></div>
                                        <div class="u-text">
                                            <h4>{{ Auth::user()->username }}</h4>
                                        </div>
                                </li>
                                <li><a href="/logout"><i class="material-icons">power_settings_new</i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <li>
                            <a href="/dashboard" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                            <div class="collapsible-body">
                            </div>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Data</span></li>
                        @if (Auth::user()->role == 'admin')
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i style="color: white;" class="fas fa-user"></i><span class="hide-menu"> Data User</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/userregister"><i class="fas fa-users"></i><span class="hide-menu">User Teregistrasi</span></a></li>
                                </ul>
                                <ul>
                                    <li><a href="/userterdaftar"><i class="fas fa-users"></i><span class="hide-menu">User Terdaftar Extra</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i style="color: white;" class="fas fa-volleyball-ball"></i><span class="hide-menu">Data Extrakulikuler</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/dataextrakulikuler"><i class="fas fa-basketball-ball"></i><span class="hide-menu">Extrakulikuler</span></a></li>
                                    <li><a href="/category"><i class="fas fa-basketball-ball"></i><span class="hide-menu">Category</span></a></li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @if (Auth::user()->role == 'user')
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i style="color: white;" class="fas fa-volleyball-ball"></i><span class="hide-menu">Extrakulikuler Anda</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/pilextra"><i class="fas fa-basketball-ball"></i><span class="hide-menu">Daftar Extrakulikuler</span></a></li>
                                </ul>
                            </div>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('main')
            </div>
            <footer class="center-align m-b-30">All Rights Reserved by Joeang Team</footer>
        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
</body>

</html>