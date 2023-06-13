<div class="container-navbar">
    <nav id="nav" class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">
            <a class="ms-2 px-2 navTitle navbar-brand fs-2" href="{{ route('home') }}">
                <img class="logo" src="/media/presto.png" alt="Logo Presto">
            </a>
            <div class="dropdown nav-item me-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Lingua</a>
                <ul class="dropdown-menu drop-menu">
                    <li class="dropdown-item">
                        <x-_locale lang="it" text="Italiano" />
                    </li>
                    <li class="dropdown-item">
                        <x-_locale lang="en" text="English" />
                    </li>
                    <li class="dropdown-item">
                        <x-_locale lang="fr" text="Francais" />
                    </li>
                    <li class="dropdown-item">
                        <x-_locale lang="de" text="Deutsch" />
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="a-nav1 mb-2 nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
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
                        <ul id="dropdown" class="dropdown-menu drop-menu">
                            @if (Auth::check() && Auth::user()->is_revisor)
                                <li>
                                    <a class="dropdown-item position-relative"
                                        href="{{ route('revisor_index') }}">Revisiona
                                        annunci<span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ App\Models\Announce::ToBeRevisionedCount() }}
                                        </span> </a>
                                </li>
                                <li><a class="dropdown-item a-profile"
                                        onmouseover="document.a.style.backgroundColor ='blue'"
                                        href="{{ route('show_profile') }}">Profilo</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item a-logout">Logout</button>
                                    </form>
                                </li>
                            @elseif (Auth::check())
                                <li><a class="dropdown-item a-profile"
                                        onmouseover="document.a.style.backgroundColor ='blue'"
                                        href="{{ route('show_profile') }}">Profilo</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item a-logout">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item a-register" href="{{ route('register') }}">Registrati</a>
                                </li>
                                <li><a class="dropdown-item a-login" href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav pe-3">
                    <li class="nav-item mt-3">
                        <form class="search-form" method="GET" action="{{ route('search_announce') }}">
                            <input class="search-input" type="search" placeholder="Cerca" aria-label="Search"
                                name='searched'>
                            <button class="btn" type="submit">
                                <i class="btn-search fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</div>
