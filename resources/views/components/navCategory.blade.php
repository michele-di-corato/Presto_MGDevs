<div class="container-fluid pb-3">
    <div class="row align-items-center text-center">
        <div class="col-12 px-3">

            <button id="bottone-category" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <p class="navbar-brand d-flex align-items-center pb-1">
                    Categorie <i id="icona-row" class="bi bi-arrow-down-short"></i>
                </p>                
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="row justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-5 col-lg-3 mb-3">
                            <a class="card p-2 text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                                style="height: 8vh;" href="{{ route('show_per_category', compact('category')) }}">
                                {{ $category->name }}
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12 mb-3">
                        <a class="card p-2 text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                            style="height: 8vh;" href="{{ route('show_announces') }}">
                            Tutte le categorie
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
