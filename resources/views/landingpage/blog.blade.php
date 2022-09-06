@extends('template.landingTemplate')

@section("main")

<section class="blog mb-5">
    <div class="jumbotron  jumbotron-fluid d-flex align-items-center justify-content-center flex-column  "style="min-height:50vh;">
        <div class="container d-flex align-items-center justify-content-center flex-column ">
            <h3 class="font-weight-bold">Entertaining Extrass</h3>
            <h3 class="mb-2 font-weight-bold">Blog</h3>
            <input type="text" placeholder="search"  id="search" class="form-control"> 
        </div>

    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row" style="row-gap: 30px">
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-sm-6 mb-3"><img src="{{asset("img/basket.jpg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="col-sm-6">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex! Provident obcaecati debitis consequuntur minima asperiores voluptate fuga quos quod, modi cupiditate voluptatem maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/hadra.png")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/futsal.jpg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/pramuka.jpg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/pmr.jpeg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/teater.jpg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/sepakbola.jpg")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card p-2 shadow-sm post">
                        <div class="card-title"><img style="height: 250px" src="{{asset("img/extra.png")}}" class=" rounded img-fluid w-100" alt=""></div>
                        <div class="card-body">
                            <h3>Judul</h3>
                            <small class="mb-3 d-block">20-juni-2022</small>
                            <p style="font-size: 14px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates vero quae fugit deleniti, sunt ex!  maxime expedita reiciendis eveniet ullam animi sequi perspiciatis repellat ut ducimus commodi.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection