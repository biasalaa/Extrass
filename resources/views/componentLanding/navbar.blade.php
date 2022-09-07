 <nav class="navbar navbar-expand-lg p-sm-1 p-1 position-fixed w-100 navbar-dark">
        <div class="container ">
            <a class="tittle navbar-brand " href="#">Extrass</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#body">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#extra">Extra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>

                    @if (Auth::check() == false)
                    <li><button type="button" class="btn "><a href="/login" style="text-decoration: none; color: white;">Login</a></button></li>
                    <li><button type="button" class="btn boot ms-2"><a href="/register" style="text-decoration: none; color: white;">Daftar</a></button></li>
                    @endif
                    @if (Auth::check() == true)
                    {{-- <p>{{ $data->nama }}</p> --}}
                    <li><button type="button" class="btn boot"><a href="/logout" style="text-decoration: none; color: white;">Logout</a></button></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>