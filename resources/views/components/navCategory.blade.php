<div class="container-fluid pb-3">
    <div class="row align-items-center text-center">
        <div class="col-12">

            <button id="bottone-category" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <a class="navbar-brand" href="{{ route('show_announces') }}"></a>
                <i id="icona-row" class="bi bi-arrow-down-short"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav row">
                    @foreach ($categories as $category)
                        <li class="nav-item col-12">
                            <a class="nav-link-category"
                                href="{{ route('show_per_category', compact('category')) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item col-12">
                        <a class="nav-link-category" href="{{ route('show_announces') }}">Tutte le categorie</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
