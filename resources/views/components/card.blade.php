<div class="card card-bg mb-3 h-100">
    <img src="{{ !$announce->images()->get()->isEmpty()? $announce->images()->first()->getUrl(300, 300): Storage::url('public/media/DefaultImage.jpg') }}"
        class="card-img-top p-3" alt="Immagine annuncio">
    <div class="card-body justify-content-evenly">
        <div>
            <h4 class="card-title">{{ $announce->name }}</h4>
            <h6 class="card-title">{{ __('ui.category-card') }} {{ __('ui.category-' . $announce->category->id) }}</h6>
            <h5 class="card-subtitle ms-auto">{{ __('ui.price-card') }} {{ $announce->price }}€</h5>
            <p class="card-text">{{ $announce->description }}</p>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-4">
                <div class="py-2">
                    <a href="{{ route('announce_detail', $announce->id) }}" class="btn btn-index btn-ann fs-5"><i
                            class="bi bi-eye"></i></a>
                </div>
            </div>
            @if ($announce->user_id == Auth::id() && Auth::check())
                <div class="col-4">
                    <div class="py-2">
                        <a href="{{ route('edit_announce', compact('announce')) }}"
                            class="btn btn-index btn-ann fs-5"><i class="bi bi-pencil-square"></i></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="py-2">
                        @livewire('delete-announce', compact('announce'))
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>
