<div class="card mb-3">
    <img src="{{ !$announce->images()->get()->isEmpty()? $announce->images()->first()->getUrl(300, 300): Storage::url('public/media/DefaultImage.jpg') }}"
        class="card-img-top p-3" alt="Immagine annuncio">
    <div class="card-body justify-content-evenly">
        <div>
            <h4 class="card-title">{{ $announce->name }}</h4>
            <h6 class="card-title">Categoria: {{ $announce->category->name }}</h6>
            <h5 class="card-subtitle ms-auto">Prezzo: {{ $announce->price }}€</h5>
            <p class="card-text">{{ $announce->description }}</p>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-12 justify-content-evenly">
                    <div class="py-2">
                        <a href="{{ route('announce_detail', $announce->id) }}"
                            class="btn pe-md-1 btn-index btn-ann w-100">Dettagli</a>
                    </div>
                    @if ($announce->user_id == Auth::id() && Auth::check())
                        <div class="py-2">
                            <a href="{{ route('edit_announce', compact('announce')) }}"
                                class="btn pe-md-1 btn-index btn-ann w-100">Modifica</a>
                        </div>
                        <div class="py-2">
                            @livewire('delete-announce', compact('announce'))
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
