<x-layout namePage="Revisiona">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">

            {{-- Annuncio Da Approvare --}}
            <div class="col-12 col-md-10 pt-5 pb-3">

                {{-- Alert --}}
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

                @if ($verified_announces)
                    <div class="mb-3">
                        <form method="POST" action="{{ route('undo_announce') }}">
                            @csrf
                            @method('PATCH')
                            <p>
                                Hai cambiato idea sull'ultimo annuncio?
                                <button type="submit" class="ms-md-2 btn btn-ann">
                                    Annulla
                                </button>
                            </p>
                        </form>
                    </div>
                @endif

                {{-- Anuncio --}}
                <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">
                    {{ $announce_to_check ? 'Annuncio da revisionare' : 'Non c\'è nessun annuncio da revisionare' }}
                </h2>

                @if ($announce_to_check)
                    <div class="col-12">
                        <div class="card card-pers pt-3">
                            <div class="row justify-content-center align-items-center p-3">
                                <div class="col-12 col-md-6 text-center">
                                    <h2>{{ $announce_to_check->name }}</h2>
                                    <h3>{{ $announce_to_check->category->name }}</h3>
                                    <h3>{{ $announce_to_check->price }} €</h3>
                                    <p>{{ $announce_to_check->description }}</p>
                                    <h5>Creato da: {{ $announce_to_check->user->name }}</h5>
                                    <h5>Creato il: {{ $announce_to_check->created_at->format('d/m/Y') }}</h5>
                                </div>
                                @if (!$announce_to_check->images()->get()->isEmpty())
                                    <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                                        <div id="carouselExampleControls" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach ($announce_to_check->images as $image)
                                                    <div class="carousel-item active">
                                                        <img src="{{ $image->getUrl(300, 300) }}"
                                                            class="d-block img-fluid" alt="DefaultImage">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="container container-control">
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon prev"
                                                        aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon next"
                                                        aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        @else
                            <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                                class="d-block img-fluid" alt="DefaultImage">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                                class="d-block img-fluid" alt="DefaultImage">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                                class="d-block img-fluid " alt="DefaultImage">
                                        </div>
                                    </div>
                                    <div class="container container-control">
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif

            
            <div class="row my-4">
                <div class="col-6 d-flex justify-content-center">
                    <form method="POST" action="{{ route('accept_announce', ['announce' => $announce_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-ann mb-sm-3">Approva</button>
                    </form>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <form method="POST" action="{{ route('reject_announce', ['announce' => $announce_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-ann">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

    </div>

    <div class="col-12 col-md-10 row">

        {{-- Annunci in Coda --}}
        <div class="col-12 col-md-6 px-0 pe-0 pe-md-2">
            <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">
                Annunci in coda
            </h2>

            {{-- Categorie --}}
            <div id="annunci2" class="d-flex justify-content-center p-3">
                <div class="col-3">
                    <p><strong>Nome</strong></p>
                </div>
                <div class="col-4">
                    <p><strong>Categoria</strong></p>
                </div>
                <div class="col-2 text-center">
                    <p><strong>Prezzo</strong></p>
                </div>
                <div class="col-3 text-center">
                    <p><strong>Creazione</strong></p>
                </div>
            </div>
            @forelse ($announces_queue as $announce)
                <div class="table-pers my-2 p-3">

                    <div class="d-flex justify-content-center align-items-center">

                        <div class="col-3">
                            <p>{{ $announce->name }}</p>
                        </div>
                        <div class="col-4">
                            <p>{{ $announce->category->name }}</p>
                        </div>
                        <div class="col-2 text-center">
                            <p>{{ $announce->price }}€</p>
                        </div>
                        <div class="col-3 text-center">
                            <p>{{ $announce->created_at }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h4 class="text-center">Non ci sono annunci in coda</h4>
            @endforelse
        </div>


        {{-- Annunci Revisionati --}}
        <div class="col-12 col-md-6 px-0 ps-md-2 ps-0">
            <h2 id="annunci" class="text-center display-6 p-2 pb-3">
                <a class="text-decoration-none col-text" href="{{ route('log_revisions') }}">Storico annunci
                    revisionati</a>
            </h2>
            {{-- Categorie --}}
            <div id="annunci2" class="d-flex justify-content-center p-3">
                <div class="col-2">
                    <p><strong>Nome</strong></p>
                </div>
                <div class="col-2">
                    <p><strong>Categoria</strong></p>
                </div>
                <div class="col-2 text-center">
                    <p><strong>Prezzo</strong></p>
                </div>
                <div class="col-2">
                    <p><strong>Creazione</strong></p>
                </div>
                <div class="col-2">
                    <p class="text-center"><strong>Stato</strong></p>
                </div>
                <div class="col-2">
                    <p class="text-center"><strong>Azioni</strong></p>
                </div>
            </div>
            {{-- Annunci --}}
            @forelse ($revisioned_announces as $announce)
                <div class="table-pers my-2 p-3">

                    <div class="d-flex justify-content-center align-items-center">

                        <div class="col-2">
                            <p>{{ $announce->name }}</p>
                        </div>
                        <div class="col-2">
                            <p>{{ $announce->category->name }}</p>
                        </div>
                        <div class="col-2 text-center">
                            <p>{{ $announce->price }}€</p>
                        </div>
                        <div class="col-2">
                            <p>{{ $announce->created_at }}</p>
                        </div>
                        <div class="col-2 text-center">

                            @if ($announce->is_accepted == true)
                                <div class="b-true">
                                    Approvato
                                </div>
                            @elseif ($announce->is_accepted === null)
                                <div class="b-null">
                                    In Attesa
                                </div>
                            @elseif ($announce->is_accepted == false)
                                <div class="b-false">
                                    Rifiutato
                                </div>
                            @endif
                        </div>
                        <div class="col-2 text-center">
                            <form method="POST" action="{{ route('undo_announce') }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="ms-md-2 btn btn-ann">Annulla</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <h4>Non ci sono annunci nello storico</h4>
            @endforelse
        </div>
    </div>
    </div>

    </div>

</x-layout>
