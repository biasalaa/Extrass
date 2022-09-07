<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrass</title>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css">
    <link rel="stylesheet" href="{{ asset('asset/icon/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>

<body id="body">

    @include("component.navbar")


    <section class="hero" style=" background-image:url(img/extra.png) ; background-size:
        cover; background-repeat: no-repeat; background-position:center;">
        <div class="jumbotron jumbotron-fluid d-flex align-items-center min-vh-100" style="background-color:rgba(0,0,0,0.5) ;">
            <div class="container ">
                <div class="row d-flex  align-items-center">
                    <div class="col-sm-6">
                        <h4 class="display-6 text-black m-0"><span>Come on</span></h4>
                        <h1 class="display-3 fw-bold text-white"><b>EXTRA WITH US</b></h1>
                        <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat a
                            tempora
                            soluta, voluptatem recusandae nesciunt adipisci at exercitationem tempore earum?
                        </p>
                        <a href="#about" class="btn ">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->

    <!-- <div class="col-sm-6">
        <img src="img/basket.jpg" class="img-fluid" alt="">
        <img src="img/futsal.jpg" class="img-fluid" alt="">
    </div> -->

    <section id="about" class="about-page">
        <div class="about-container">
            <div class="about-row">
                <div class="about-image">
                    <img src="img/futsal.jpg" class="img-fluid" alt="">
                </div>
                <div class="about-image">
                    <img src="img/basket.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="about-row" id="about">
                <h3><b>Tentang <span style="color:#C7D36F ;">Extrakulikuler</span></b></h3>
                <p>Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan yang dilakukan di luar jam pelajaran yang dilakukan baik di sekolah atau di luar sekolah dengan tujuan untuk mendapatkan tambahan pengetahuan, keterampilan dan wawasan serta membantu membentuk karakter peserta didik sesuai dengan minat dan bakat masing-masing.
</p>
            </div>
        </div>
    </section>

    <section class="extra mt-5 pt-5" style="background-color:#E0DECA ;" id="extra">
        <div class="jumbotron">
            <div class="container pb-5 menu">
                <h3><b>EXTRAKULIKULER</b></h3>

                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist" style="border-radius: 10px;">
                    {{-- <li class="organisasi mt-2 nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button">Organisasi</button>
                    </li>
                    <li class="nav-item m-2" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Olahraga</button>
                    </li>
                    <li class="nav-item m-2" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Seni</button>
                    </li> --}}
                    @foreach ($category as $c)
                    <li class="nav-item  m-2" role="presentation">
                        <button class="nav-link {{$loop->first ? "active":""}}" id="contact-tab" data-bs-toggle="tab" data-bs-target="#d{{$c->id}}" type="button" role="tab" aria-controls="contact" aria-selected="false">{{$c->nama_category}}</button>
                    </li>

                    @endforeach
                </ul>



                <div class="tab-content" id="myTabContent">
                    @foreach ($category as $d)

                    @if ($loop->first)
                    <div class="tab-pane fade show active" id="d{{$d->id}}" role="tabpanel" aria-labelledby="home-tab">
                        @else
                        <div class="tab-pane fade " id="d{{$d->id}}" role="tabpanel" aria-labelledby="home-tab">
                            @endif
                            <div class="row">
                                @foreach ($extra as $item)
                                @if ($item->category_id == $d->id)

                                <div class="col-lg-3 col-sm-6 mb-3 ">
                                    <div class="card p-1">
                                        <img src="img/{{ $item->foto }}" class="w-100 img-fluid img-card" alt="...">
                                        <div class="card-body">
                                            <h4><b>{{ $item->nama_extra }}</b></h4>
                                            <p class="card-text">{{ Str::limit($item->deskripsi, 70) }}</p>
                                            <div class="d-flex gap-3 justify-content-end">
                                                @if(auth()->check())
                                                <button type="button" class="btn boot ms-2"><a href="/pilextra" style="text-decoration: none; color: white;">Daftar</a></button>

                                                @else
                                                <button type="button" class="btn boot ms-2"><a href="/register" style="text-decoration: none; color: white;">Daftar</a></button>
                                                @endif
                                                <a class="btn m-0 " data-bs-target="#v{{$item->id}}" data-bs-toggle="modal" href="" style="margin-left:150px; background-color:#C7D36F;">info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="v{{$item->id}}">
                                        <div class="modal-dialog w-100 ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img src="img/{{ $item->foto }}" class=" mb-3 w-100 h-auto img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4><b>{{ $item->nama_extra }}</b></h4>
                                                            <p class="card-text mb-5">{{ $item->deskripsi }}</p>
                                                            <br> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        </div>
        </div>
    </section>

    <section class="py-5" id="contact">
        <div class="  jumbotron jumbotron-fluid" >
            <div class="container">
            <!-- <div class="d-flex">
               <div class="col">
               <i class="fa-solid fa-location-dot"></i> <h5>Jln Imam Bonjol</h5>
               </div>
               <div class="col d-flex">
               <h5> <i class="fa-brands fa-whatsapp"></i> 08108181</h5>
               </div>
            </div> -->
                <div class="row  align-items-center">
                    <div class=" d-sm-block d-none col-sm-6 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.783789797221!2d113.8364482148539!3d-7.917639281010574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcb914a78cff%3A0xc529d84253821bd1!2sSMKN%201%20Bondowoso!5e0!3m2!1sid!2sid!4v1662532299324!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-sm-6">
                    <h3><b>Contact <span style="color:00BD55;">Us</span> </b></h3> <br> <br>
                <form action="/contact" method="post">
                    @csrf
                    <div class="mb-3 form-group">
                        <label  for="" class="text-black">Nama</label>
                        <input type="text" name="nama" class="form-control">
                        @error('nama')
                             <small style="color: red;">
                                {{$message}}
                        </small>
                        @enderror
                    </div>
                    
                    <div class="mb-3 form-group">
                        <label for="" class="text-black">Email</label>
                        <input type="email" name="email"  class="form-control">
                        @error('email')
                             <small style="color: red;">
                                {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="text-black">Message</label>
                        <textarea   class="form-control" name="message"></textarea>
                        @error('message')
                             <small style="color: red;">
                                {{$message}}
                        </small>
                        @enderror
                    </div>
                    <button type="submit" style="background-color:#C7D36F; " class="btn text-white">Send</button>
                </form>
            </div>
                </div>

            </div>
        </div>
    </section>
   


    <footer>
        
            <div class="content">
                <div class="menu">
                    <ul class="d-flex " style="list-style: none">
                        <li class="">
                            <a class="footer-link" aria-current="page" href="#body">Home</a>
                        </li>
                        <li class="">
                            <a class="footer-link" href="#about">About</a>
                        </li>
                        <li class="">
                            <a class="footer-link" href="#extra">Extra</a>
                        </li>
                        <li class=" me-5">
                            <a class="footer-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <span class="line"></span>
                <span id="footer">
                    2022 copyright extrass SMK NEGERI 1 BONDOWOSO </span>
            </div>
            </div>
    </footer>



    <!-- <img src="img/p.png" alt=""> -->
    
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>