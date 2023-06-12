<x-layout namePage="Storico revisioni">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">

            <div class="col-12 col-md-10 pt-5 pb-3">
                <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">Storico annunci revisionati</h2>
                <div class="card card-pers p-3">


                    {{-- Categorie --}}
                    <div id="annunci2" class="d-flex justify-content-center p-3">
                        <div class="col-2">
                            <p><strong>Nome</strong></p>
                        </div>
                        <div class="col-3">
                            <p><strong>Categoria</strong></p>
                        </div>
                        <div class="col-1">
                            <p><strong>Prezzo</strong></p>
                        </div>
                        <div class="col-2">
                            <p><strong>Creazione</strong></p>
                        </div>
                        <div class="col-1">
                            <p class="text-center"><strong>Stato</strong></p>
                        </div>
                        <div class="col-3">
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
                                <div class="col-3">
                                    <p>{{ $announce->category->name }}</p>
                                </div>
                                <div class="col-1">
                                    <p>{{ $announce->price }}€</p>
                                </div>
                                <div class="col-2">
                                    <p>{{ $announce->created_at }}</p>
                                </div>
                                <div class="col-1">

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
                                <div class="col-3 d-flex justify-content-center">
                                    <a href="{{ route('announce_detail', $announce->id) }}"
                                        class="btn btn-ann">Dettagli</a>
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
                    <div class="d-flex justify-content-center">
                        {{ $revisioned_announces->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
