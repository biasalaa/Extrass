<nav class="navbar navbar-expand-lg p-sm-1 p-1 position-fixed w-100 navbar-dark">
    <div class="container ">
        <a class="tittle navbar-brand " href="#">Extrass</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#body">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#extra">Extra</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>

                @if (Auth::check() == false)
                <li><button type="button" class="btn "><a href="/login" style="text-decoration: none; color: white;">Login</a></button></li>
                <li><button type="button" class="btn boot ms-2"><a href="/register" style="text-decoration: none; color: white;">Daftar</a></button></li>
                @endif
                @if (Auth::check() == true)
                {{-- <p>{{ $data->nama }}</p> --}}
                <li style="margin-right:15px;"><a href="/dashboard" class="btn boot "><i style="color: white;" class="fas fa-user"></i></a></li>
                <li><a href="/logout" class="btn boot">keluar</a></li>

                @endif
            </ul>
        </div>
    </div>
</nav>