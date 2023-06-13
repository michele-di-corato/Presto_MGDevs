<x-layout namePage="{{ $category->name }}">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                <div id="annunci" class="mb-2">

                    <h1 class="text-center col-text display-6 p-2 pb-3">{{ $category->name }}</h1>
                    <x-navCategory />
                    
                </div>

                <div class="card card-pers p-3">
                    <div class="row justify-content-center align-items-center">
                        @forelse ($announces as $announce)
                            <div class="col-12 col-md-3">
                                <x-card :announce="$announce" />
                            </div>
                        @empty
                            <div class="alert alert-success fade show d-flex mt-3" role="alert">
                                <p>Nessun annuncio trovato.</p>
                                <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforelse
                        <div class="d-flex justify-content-center">
                            {{ $announces->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layout>
