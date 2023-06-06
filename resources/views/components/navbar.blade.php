<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fs-2" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="a-nav1 nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="a-nav2 nav-link" href="{{route('create_announce')}}">Inserisci annuncio</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="a-nav3 nav-link" href="{{route('show_announces')}}">Mostra annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @auth
                      Benvenuto, utente
                      @else
                      Benvenuto, utente
                      @endauth
                    </a>
                    <ul class="dropdown-menu">
                    @auth
                      <li><a class="dropdown-item" href="#">Profilo</a></li>
                      <li>
                        <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                      </li>
                      @else
                      <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                      <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                      @endauth
                    </ul>
                  </li>
            </ul>
        </div>
    </div>
</nav>
