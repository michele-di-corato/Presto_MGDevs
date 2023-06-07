<x-layout namePage="Annunci">

    <x-navCategory />

    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-4">
            @if (session('confirm'))
                <div class="alert alert-success fade show d-flex" role="alert">
                    {{ session('confirm') }}
                    <button type="button" class="btn-close align-self-center ms-auto" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-evenly">

            @foreach ($announces as $announce)
                <x-card :announce="$announce" />
            @endforeach

        </div>
    </div>

</x-layout>
