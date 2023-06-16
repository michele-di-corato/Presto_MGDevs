<div class="table-pers my-2 p-3">

    <div class="d-flex justify-content-center align-items-center">

        <div class="col-2">
            <p>{{ $announce->name }}</p>
        </div>
        <div class="col-2">
            <p>{{ __('ui.category-' . $announce->category->id) }}</p>
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
                    {{ __('ui.table-status-approved') }}
                </div>
            @elseif ($announce->is_accepted === null)
                <div class="b-null">
                    {{ __('ui.table-status-pending') }}
                </div>
            @elseif ($announce->is_accepted == false)
                <div class="b-false">
                    {{ __('ui.table-status-rejected') }}
                </div>
            @endif

        </div>

        <div class="col-4 d-flex justify-content-center text-center">
            <div class="col-4 px-2">
                <a href="{{ route('announce_detail', $announce->id) }}" class="btn pe-md-1 btn-index btn-ann w-100">
                    {{ __('ui.btn-details') }}
                </a>
            </div>
            @if ($announce->user_id == Auth::id() && Auth::check())
                <div class="col-4 px-2">
                    <a href="{{ route('edit_announce', compact('announce')) }}" class="btn pe-md-1 btn-index btn-ann w-100">
                        {{ __('ui.btn-modify') }}
                    </a>
                </div>
                <div class="col-4 px-2">
                    @livewire('delete-announce', compact('announce'))
                </div>
            @endif
            </p>
        </div>

    </div>

</div>
