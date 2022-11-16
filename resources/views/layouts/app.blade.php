<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
    <link rel="stylesheet" href="{{ asset('lightbox2/dist/css/lightbox.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <header style="font-size: 30px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="font-size: 40px; margin-left:50px;">Christo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 40%;">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                        <!--Login & Register -->
                    @auth
                    <li class="nav-item" style="margin-left: 20%;">
                    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-danger" href="{{ route('logout') }}" style="margin-left: 20%;">Logout</a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('login') }}" style="margin-left: 20%;">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-info" href="{{ route('register') }}" style="margin-left: 40%;">Register</a>
                    </li>
                    @endguest
                    </ul>
                </div>
        </nav>
    </header>
        <main class="py-4">
            @yield('content')
        </main>
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="color: #E9ECEF;">
            <b style="color: #E9ECEF;">CHRISTOPHORUS ARDHITO HARYO DWINANDA</b> <br><br>
            © 2022 Contact Me: <br>
            <a class="text-light" href="#"><img src="https://c8.alamy.com/zooms/9/e27e2d831fe64a5a91135a61f494af6a/rkahff.jpg" style="width: 20px; length: 20px; margin-right:10px" />Email</a><br>
            <a class="text-light" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8SDGxVyIbNZi9cVoh9ROGR7pV9uPzGK3__lTv_9x6Mii3gJttNUZLg5MTsFgrm8xV8d0&usqp=CAU" style="width: 20px; length: 20px; margin-right:10px" />Instagram</a><br>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
