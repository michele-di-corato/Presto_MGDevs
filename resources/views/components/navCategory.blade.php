<div class="container-fluid pb-3">
    <div class="row align-items-center text-center">
        <div class="col-12">

            <button id="bottone-category" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <a class="navbar-brand" href="{{ route('show_announces') }}"></a>
                <i id="icona-row" class="bi bi-arrow-down-short"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="nav-item col-12">
                                <div class="container d-flex flex-wrap h-100">
                                    <div class="row row-cols-6 justify-content-center">
                                        @foreach ($categories as $category)
                                        <div class="col-5 card p-1 m-2 d-flex align-items-center justify-content-center">
                                            <a class="nav-link-category" href="{{ route('show_per_category', compact('category')) }}">
                                                {{ $category->name }}
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="col card p-1 m-2 mx-5 d-flex align-items-center justify-content-center">
                                            <a class="nav-link-category mx-5" href="{{ route('show_announces') }}">Tutte le categorie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

        </div>
    </div>
</div>
