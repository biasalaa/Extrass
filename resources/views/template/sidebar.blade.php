<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="{{asset('template')}}/pages/dashboards/dashboard.html">
                    <img src="{{asset('template')}}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/dashboard">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                            
                        </li>
                        @if(auth()->user()->role == "admin")
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="ni ni-ungroup text-orange"></i>
                                <span class="nav-link-text">Data User</span>
                            </a>
                            <div class="collapse" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/userregister" class="nav-link">User Teregistrasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/userterdaftar" class="nav-link">User Terdaftar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                                <i class="ni ni-ui-04 text-info"></i>
                                <span class="nav-link-text">Data Extrakurikuler</span>
                            </a>
                            <div class="collapse" id="navbar-components">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/dataextrakulikuler" class="nav-link">Extrakurikuler</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/category" class="nav-link">Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact" aria-expanded="false" aria-controls="navbar-forms">
                                <i class="ni ni-single-copy-04 text-pink"></i>
                                <span class="nav-link-text">Contact</span>
                            </a>
                        </li>
                        @elseif(auth()->user()->role == "user")
                        <li class="nav-item">
                            <a class="nav-link" href="/pilextra" aria-expanded="false" aria-controls="navbar-forms">
                                <i class="ni ni-single-copy-04 text-pink"></i>
                                <span class="nav-link-text">Extrakurikuler</span>
                            </a>
                        </li>
                        @endif
                </div>
            </div>
        </div>
    </nav>