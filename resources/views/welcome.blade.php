<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a href="{{ url('/') }}"><img src="assets/img/123.png" alt="home"> </a>

        <div class="test">
        @if (Route::has('login'))
            @auth
                <a class="btn btn-primary" href="{{ url('/home') }}"> {{ Auth::user()->name }}</a>

            @else
                <a class="btn btn-primary" href="{{ route('login') }}">Zaloguj sie</a>
                @if(Route::has('register'))
                    <a class="btn btn-primary" href="{{ route('register') }}">Rejestracja</a>
                @endif
            @endauth
            @endif
        </div>


    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <h1 class="mb-5">Prowadź swoją własną listę albumów muzycznych!</h1>

                    <!-- Signup form-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid-->

<!-- Image Showcases-->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/beat.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h1>Duża lista albumów!</h1>
                <p class="lead mb-0">Ogromna lista albumów! Z każego gatunku, od popu po hip hop!</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/friday.png')"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>W każdy Piątek aktualizacje!</h2>
                <p class="lead mb-0">W każdy Piątek, wraz z nową muzykę dajemy wam aktualizacje i masę nowych albumów, starych jak i nowych!</p>
            </div>
        </div>

        </div>
    </div>
</section>
<!-- Testimonials-->

</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
