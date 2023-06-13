<x-layout namePage="Annunci">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                <div class="container-fluid">
                    <div class="row justify-content-center text-center">
                        @if (session('confirm'))
                            <div class="alert alert-success fade show d-flex" role="alert">
                                {{ session('confirm') }}
                                <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>

                <div id="annunci" class="mb-2">

                    <h1 class="text-center col-text display-6 p-2">Annunci</h1>
                    <x-navCategory />
                    
                </div>

                <div class="card card-pers p-3">
                    <div class="row justify-content-center">
                        @forelse ($announces as $announce)
                            <div class="col-8 col-md-3">
                                <x-card :announce="$announce" />
                            </div>
                        @empty
                            <div class="alert alert-success fade show d-flex mt-3" role="alert">
                                <p>La ricerca non ha prodotto alcun risultato. Prova a cambiare campo di ricerca.</p>
                                <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $announces->links() }}
            </div>
        </div>

    </div>

</x-layout>
