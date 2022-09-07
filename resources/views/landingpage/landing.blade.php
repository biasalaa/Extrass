@extends('template.landingTemplate')

@section("main")
    <section class="hero" style=" background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(img/extra.png) ; background-size:
        cover; background-repeat: no-repeat; background-position:center;">
        <div class="jumbotron jumbotron-fluid d-flex align-items-center min-vh-100" >
            <div class="container ">
                <div class="row d-flex  align-items-center">
                    <div class="col-sm-6">
                        <h4 class="display-6 text-white m-0"><span>Come on</span></h4>
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

    <section class="about-page">
        <div class="about-container ">
            <div class="about-row   ">
                <div class="about-image">
                    <img src="img/futsal.jpg" class="img-fluid" alt="">
                </div>
                <div class="about-image">
                    <img src="img/basket.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="about-row" id="about">
                <h3><b>Tentang <span style="color:#C7D36F ;">Extrakulikuler</span></b></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt qui laborum
                    consequuntur odit natus
                    tenetur blanditiis sed, magnam pariatur ipsam repudiandae vero doloribus dolore assumenda culpa
                    odio? </p>
            </div>
        </div>
    </section>

    <section class="extra mt-sm-5 pt-5" style="background-color:#E0DECA ;" id="extra">
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
                @php
                $categories = [];
                foreach ($category as $c) {
                $categories[] = $c->id;
                }
                $no = 1;

                // dd($categories);
                @endphp



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

                                <div class="col-lg-3 col-sm-6 ">
                                    <div class="card p-1">
                                        <img src="img/{{ $item->foto }}" class="w-100 img-fluid img-card" alt="...">
                                        <div class="card-body">
                                            <h4><b>{{ $item->nama_extra }}</b></h4>
                                            <p class="card-text">{{ Str::limit($item->deskripsi, 70) }}</p>
                                            <div class="d-flex gap-3 justify-content-end">
                                                <button type="button" class="btn boot ms-2"><a href="/register" style="text-decoration: none; color: white;">Daftar</a></button>
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


    <section>
        <h3><b>Contact <span>US</span></b></h3>
        <div class="container">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>






@endsection