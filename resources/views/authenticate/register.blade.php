<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrass</title>
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/pages/authentication.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">My Extrass</p>
            </div>
        </div>
        <section style="background-image:url({{ asset('img/extra.png') }}); no-repeat left bottom; background-size:cover; background-position: 0 -140px;">
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.5);">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l8 m6 demo-text">
                            <h1 class="font-medium m-t-40" style="color: white;">Welcome to the <span class="font-medium" style="color: #FCF9C6;">Extrass</span></h1>
                        </div>
                    </div>
                    <div class="auth-box auth-sidebar" style="background-color:#1F2738 ;">
                        <div id="loginform">
                            <div class="p-l-10">
                                <h3 class="font-medium m-b-0 m-t-40 " style="color: white ;">Register</h3>
                            </div>
                            <div class="row">
                                <form class="col s12" action="/registration" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="name" type="text" value="{{old('nama')}}" class="validate" required name="nama" style="color: white;">
                                            <label for="name" style="color: white;">Nama</label>
                                            @error('nama')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="nohp" type="text" value="{{old('nohp')}}" class="validate" required name="nohp" style="color: white;">
                                            <label for="nohp" style="color: white;">Nomor Handphone</label>
                                            @error('nohp')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="username" type="text" value="{{old('username')}}" class="validate" required name="username" style="color: white;">
                                            <label for="username" style="color: white;">Username</label>
                                            @error('username')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" value="{{old('password')}}" class="validate" required name="password" style="color: white;">
                                            <label for="password" style="color: white;">Password</label>
                                            @error('password')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="password" style="color: white;position:relative;" >foto</label>
                                            <input id="password" type="file" value="{{old('file')}}" class="validate" required name="file" style="color: white;">
                                            @error('file')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="alamat" style="color: white;" >{{old('alamat')}}</textarea>
                                            <label for="textarea1" style="color: white;">Alamat</label>
                                            @error('alamat')
                                            <small style="color: red;">
                                                {{$message}}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row m-t-40">
                                        <div class="col s12">
                                            <button class="btn-large w100" style="background-color: #FCF9C6; color: #1F2738;" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="center-align m-t-20 db">
                                Sudah Mempunyai akun? <a href="/login">Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/materialize.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>