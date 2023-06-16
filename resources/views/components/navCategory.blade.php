<div class="container-fluid pb-3">
    <div class="row align-items-center text-center">
        <div class="col-12 px-3">

            <button id="bottone-category" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="card card-bg p-3 navbar-brand">

                    <p class="d-flex align-items-center">
                        {{ __('ui.nav-category') }}<i id="icona-row" class="bi bi-arrow-down-short fs-5"></i>
                    </p>

                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="row justify-content-center pt-3">
                    @foreach ($categories as $category)
                        <div class="col-5 col-md-2 mb-4 w-50">
                            <a class="card card-bg p-2 nav-link-category text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                                style="height: 8vh;" href="{{ route('show_per_category', compact('category')) }}">
                                {{ __('ui.category-' . $category->id) }}
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12 mb-1">
                        <a class="card card-bg p-2 nav-link-category text-decoration-none col-text w-100 d-flex align-items-center justify-content-center"
                            style="height: 8vh;" href="{{ route('show_announces') }}">
                            {{ __('ui.nav-all-categories') }}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
