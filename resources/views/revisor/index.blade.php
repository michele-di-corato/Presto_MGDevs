<x-layout namePage="Revisiona">

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
                @if ($verified_announces)
                    <div class="mb-3">
                        <form method="POST" action="{{ route('undo_announce') }}">
                            @csrf
                            @method('PATCH')
                            <p>Hai cambiato idea sull'ultimo annuncio? <button type="submit"
                                    class="ms-md-2 btn btn-ann">Annulla</button></p>
                        </form>
                    </div>
                @endif
                <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">
                    {{ $announce_to_check ? 'Annuncio da revisionare' : 'Non c\'è nessun annuncio da revisionare' }}
                </h1>
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
                                <div class="col-12 col-md-6 d-flex justify-content-center">
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
                            <div class="row my-4">
                                <div class="col-6 d-flex justify-content-center">
                                    <form method="POST"
                                        action="{{ route('accept_announce', ['announce' => $announce_to_check]) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-ann mb-sm-3">Approva</button>
                                    </form>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <form method="POST"
                                        action="{{ route('reject_announce', ['announce' => $announce_to_check]) }}">
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
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="text-center">Annunci in coda</h3>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Creazione</th>
                                <th scope="col">Stato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($announces_queue as $announce)
                                <tr>
                                    <th scope="row">{{ $announce->id }}</th>
                                    <td scope="col">{{ $announce->name }}</td>
                                    <td scope="col">{{ $announce->category->name }}</td>
                                    <td scope="col">{{ $announce->price }}€</td>
                                    <td scope="col">{{ $announce->created_at }}</td>
                                    <td scope="col">
                                        @if ($announce->is_accepted == true)
                                            Approvato
                                        @elseif ($announce->is_accepted === null)
                                            In attesa
                                        @elseif ($announce->is_accepted == false)
                                            Rifiutato
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <h4 class="text-center">Non ci sono annunci in coda</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="text-center">Storico annunci revisionati</h3><a href="{{ route('log_revisions') }}"
                    class="btn">Visualizza storico</a>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Creazione</th>
                                <th scope="col">Stato</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($revisioned_announces as $announce)
                                <tr>
                                    <th scope="row">{{ $announce->id }}</th>
                                    <td scope="col">{{ $announce->name }}</td>
                                    <td scope="col">{{ $announce->category->name }}</td>
                                    <td scope="col">{{ $announce->price }}€</td>
                                    <td scope="col">{{ $announce->created_at }}</td>
                                    <td scope="col">
                                        @if ($announce->is_accepted == true)
                                            Approvato
                                        @elseif ($announce->is_accepted === null)
                                            In attesa
                                        @elseif ($announce->is_accepted == false)
                                            Rifiutato
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <form method="POST"
                                            action="{{ route('undo_revision', compact('announce')) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="ms-2 btn btn-ann">Annulla</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <h4 class="text-center">Non ci sono annunci revisionati nello storico</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
