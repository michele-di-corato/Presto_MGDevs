<x-layout namePage="Annunci">

    @if (session('confirm'))
        <div class="alert alert-success">
            <p>{{ session('confirm') }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <div class="container-fluid category">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Categorie</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav row">
                            @foreach ($categories as $category)
                          <li class="nav-item col-12 col-lg-3">
                            <a class="nav-link" href="{{route('show_per_category', compact('category'))}}">{{$category->name}}</a>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>

            @foreach ($announces as $announce)
                <x-card :announce="$announce" />
            @endforeach
        </div>
    </div>

</x-layout>
