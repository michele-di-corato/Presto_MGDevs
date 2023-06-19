<div class="table-pers my-2 p-3">

    <div class="row justify-content-center align-items-center">

        <div class="col-4 col-md-2 col-lg-2">
            <p>{{ $announce->name }}</p>
        </div>
        <div class="col-5 col-md-2 col-lg-2">
            <p>{{ __('ui.category-' . $announce->category->id) }}</p>
        </div>
        <div class="col-2 col-md-1 col-lg-1 text-center">
            <p>{{ $announce->price }}€</p>
        </div>
        <div class="col-4 col-md-3 col-lg-3 text-center d-none d-md-block">
            <p>{{ $announce->created_at }}</p>
        </div>
        <div class="col-3 col-md-1 col-lg-1 d-flex justify-content-center px-0">

            @if ($announce->is_accepted == true)
                <div class="b-true px-3 py-2 fs-5">
                    <i class="bi bi-check-circle"></i>
                </div>
            @elseif ($announce->is_accepted === null)
                <div class="b-null px-3 py-2 fs-5">
                    <i class="bi bi-hourglass-split"></i>
                </div>
            @elseif ($announce->is_accepted == false)
                <div class="b-false px-3 py-2 fs-5">
                    <i class="bi bi-slash-circle"></i>
                </div>
            @endif

        </div>


        <div class="col-3 col-md-1 col-lg-1 d-flex justify-content-center px-0">
            <a href="{{ route('announce_detail', $announce->id) }}" class="btn btn-index btn-ann fs-5">
                <i class="bi bi-eye"></i>
            </a>
        </div>
        
        @if ($announce->user_id == Auth::id() && Auth::check())
            <div class="col-3 col-md-1 col-lg-1 d-flex justify-content-center px-0">
                <a href="{{ route('edit_announce', compact('announce')) }}" class="btn btn-index btn-ann fs-5">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </div>
            <div class="col-3 col-md-1 col-lg-1 d-flex justify-content-center px-0">
                @livewire('delete-announce', compact('announce'))
            </div>
        @endif
        </p>


    </div>

</div>
