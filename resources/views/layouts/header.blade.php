<header style="font-size: 30px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="font-size: 40px; margin-left:50px;">Christo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 10%;">
                    @auth
                    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                    <ul class="navbar-nav" style="margin-left: 30%;">
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
                    <li class="nav-item">
                    <a class="btn btn-danger" href="{{ route('logout') }}" style="margin-left: 10%;">Logout</a>
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
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ url('/gallery') }}">
            Gallery
            </a>
        </li>
    </header>