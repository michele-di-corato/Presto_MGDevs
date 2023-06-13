<x-layout namePage="Home">

    <header class="container-fluid header-home">

        {{-- Alert --}}

        <div class="row justify-content-center text-center pt-5">
            @if (session('confirm'))
                <div class="alert alert-success fade show d-flex mt-5" role="alert">
                    {{ session('confirm') }}
                    <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
        </div>


        <div class="row align-items-center vh-100">
            <div class="col-12 col-md-6 row">
                <h1 class="title-home text-center">{{ __('ui.welcome') }}</h1>
            </div>
            <div class="col-12 col-md-6">
                <i class="d-flex justify-content-center mb-3 icon-home bi bi-bag-check"></i>
                <h3 class="para-home text-center">{{ __('ui.welcome2') }}</h3>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <x-lastCard :announces="$announces" />
        </div>
    </div>

</x-layout>
