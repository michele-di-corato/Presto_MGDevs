<x-layout namePage="Annunci">

    <x-navCategory />

    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-4">
            @if (session('confirm'))
                <div class="alert alert-success fade show d-flex" role="alert">
                    {{ session('confirm') }}
                    <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-evenly">

            @forelse ($announces as $announce)
                <x-card :announce="$announce" />
            @empty
                <div class="alert alert-success fade show d-flex" role="alert">
                    <p>La ricerca non ha prodotto alcun risultato. Prova a cambiare campo di ricerca.</p>
                    <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endforelse
        </div>
        <div class="mt-4 d-flex justify-content-center">
            {{ $announces->links() }}
        </div>
    </div>

</x-layout>
