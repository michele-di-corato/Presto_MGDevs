<div class="container-fluid container-navbar sticky-top">
    <nav id="nav" class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">
            <a class="ms-2 navTitle navbar-brand fs-2" href="{{ route('home') }}">
                <img class="logo" src="/media/presto.png" alt="Logo Presto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="a-nav1 nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @if(Auth::check() && Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="a-nav2 nav-link position-relative" href="{{ route('revisor_index') }}">Revisiona annunci<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Announce::ToBeRevisionedCount()}} </span> </a>
                    </li>
                    @endif
                    @auth
                        <li class="nav-item">
                            <a class="a-nav2 nav-link" href="{{ route('create_announce') }}">Inserisci annuncio</a>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="a-nav3 nav-link" href="{{ route('show_announces') }}">Mostra annunci</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @auth
                                Ciao, {{ Auth::user()->name }}
                            @else
                                Benvenuto, utente
                            @endauth
                        </a>
                        <ul class="dropdown-menu drop-menu">
                            @auth
                                <li><a class="dropdown-item a-profile" onmouseover="document.a.style.backgroundColor ='blue'" href="{{ route('show_profile') }}">Profilo</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item a-logout">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item a-register" href="{{ route('register') }}">Registrati</a></li>
                                <li><a class="dropdown-item a-login" href="{{ route('login') }}">Login</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

</div>
