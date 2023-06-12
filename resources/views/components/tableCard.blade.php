<div class="table-pers my-2 p-3">

    <div class="d-flex justify-content-center align-items-center">

        <div class="col-2">
            <p>{{ $announce->name }}</p>
        </div>
        <div class="col-2">
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

        <div class="col-4 d-flex justify-content-center text-center">
            <div class="col-4">
                <a href="{{ route('announce_detail', $announce->id) }}" class="btn btn-ann">
                    Dettagli
                </a>
            </div>
            @if ($announce->user_id == Auth::id() && Auth::check())
                <div class="col-4">
                    <a href="{{ route('edit_announce', compact('announce')) }}" class="btn btn-ann px-1">
                        Modifica
                    </a>
                </div>
                <div class="col-4">
                    @livewire('delete-announce', compact('announce'))
                </div>
            @endif
            </p>
        </div>

    </div>

</div>
