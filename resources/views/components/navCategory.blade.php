<div class="container-fluid pb-3">
    <div class="row align-items-center text-center">
        <div class="col-12 px-3">

            <button id="bottone-category" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="card p-3 navbar-brand">

                    <p class="d-flex align-items-center">
                        Categorie<i id="icona-row" class="bi bi-arrow-down-short fs-5"></i>
                    </p>

                    
                </div>                
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="row justify-content-center pt-3">
                    @foreach ($categories as $category)
                        <div class="col-5  col-lg-3 mb-4 w-50">
                            <a class="card p-2 nav-link-category text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                                style="height: 8vh;" href="{{ route('show_per_category', compact('category')) }}">
                                {{ $category->name }}
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12 mb-1">
                        <a class="card p-2 nav-link-category text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                            style="height: 8vh;" href="{{ route('show_announces') }}">
                            Tutte le categorie
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
