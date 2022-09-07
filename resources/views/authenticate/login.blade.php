<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrass</title>
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/pages/authentication.css') }}" rel="stylesheet">

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">My Extrass</p>
            </div>
        </div>
        <section style="background:url({{ asset('img/extra.png') }}) no-repeat center center; background-size:cover; background-position:0 -70px;">
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.5);">
                <div class="auth-box" style="background-color:#1F2738; border-radius:20px;">
                    <div id="loginform">
                        <div class="logo">
                            <span class="db"></span>
                            <h5 class="font-medium m-b-20" style="color:white;">LOGIN</h5>
                        </div>
                        <!-- Form -->
                        <div class="row">
                            <form class="col s12" action="/login" method="post">
                                @csrf
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate" style="color:white;" name="username" required>
                                        <label for="username" style="color:white;">Username</label>
                                        @error('username')
                                        <small style="color: red;">
                                            {{$message}}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" style="color:white;" name="password" required>
                                        <label for="password" style="color:white;">Password</label>
                                        @error('password')
                                        <small style="color: red;">
                                            {{$message}}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button class="btn-large w100 accent-4 fw-bold" style="background-color: #E0DECA; color:#1F2738;" type="submit">Submit</button>
                                    </div>
                                </div>
                                <div class="center-align m-t-20 db">
                                    <span style="color:white;">Belum Mempunyai akun?</span> <a href="/register">Register!</a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('dist/js/materialize.min.js') }}"></script>
    <script>
        $('.tooltipped').tooltip();
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>