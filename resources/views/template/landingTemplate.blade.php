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
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>

<body id="body">

   @include('componentLanding.navbar')


   @yield("main")
   
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
                        <a class="footer-link" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
            <span class="line"></span>
            <span id="footer">
                2022 copyright extrass SMK NEGERI 1 BONDOWOSO </span>
        </div>
    </footer>
    <!-- <img src="img/p.png" alt=""> -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>