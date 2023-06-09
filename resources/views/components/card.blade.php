<div class="card mb-md-0 mb-3">
    <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="card-img-top p-3" alt="Immagine annuncio">
    <div class="card-body justify-content-evenly">
        <div>
            <h4 class="card-title">{{ $announce->name }}</h4>
            <h6 class="card-title">Categoria: {{ $announce->category->name }}</h6>
            <h5 class="card-subtitle ms-auto">Prezzo: {{ $announce->price }}€</h5>
            <p class="card-text">{{ $announce->description }}</p>
        </div>
        <div class="d-flex justify-content-between pt-3 px-0">
            <a href="{{ route('announce_detail', $announce->id) }}" class="btn btn-ann">Dettagli</a>
            @if ($announce->user_id == Auth::id() && Auth::check())
                <a href="{{ route('edit_announce', compact('announce')) }}" class="btn btn-ann px-1">Modifica</a>
                @livewire('delete-announce', compact('announce'))
            @endif
        </div>
    </div>
</div>
