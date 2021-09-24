<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-light static-top-sm">
            <div class="container">
                @guest
                <a href="{{ url('/') }}"><img src={{asset("assets/img/123.png")}} alt="home"> </a>


                @else
                    <a href="{{ url('/home') }}"><img src={{asset("assets/img/123.png")}} alt="home"> </a>
                @endguest
            <div class="test">
                @guest
                    <a class="btn btn-primary" href="{{ route('login') }}">Zaloguj się</a>
                    @if (Route::has('register'))
                        <a class="btn btn-primary" href="{{ route('register') }}">Rejestracja</a>
                    @endif
                @else
                    <a class="btn btn-primary" href="/home">Główna</a>
                    <a class="btn btn-primary" href="{{url('/mylist')}}">Moja lista</a>
                @can('isAdmin')
                    <a class="btn btn-primary" href="/albums">Lista Albumów</a>
                    @endcan
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script type="text/javascript">

@yield('javascript')
    </script>
@yield('js-files')
</body>
</html>
