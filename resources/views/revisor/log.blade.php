<x-layout namePage="{{ __('ui.page-log-rev') }}">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">

            <div class="col-12 col-md-10 pt-5 pb-3">
                <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">{{ __('ui.history-revisions') }}</h2>
                <div class="card card-pers card-elem pb-3 px-3">

                    <div class="card card-bg p-3">

                        {{-- Categorie --}}
                        <div id="annunci2" class="d-flex justify-content-center p-3">
                            <div class="col-2">
                                <p><strong>{{ __('ui.revision-table-name') }}</strong></p>
                            </div>
                            <div class="col-3">
                                <p><strong>{{ __('ui.revision-table-category') }}</strong></p>
                            </div>
                            <div class="col-1">
                                <p><strong>{{ __('ui.revision-table-price') }}</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>{{ __('ui.revision-table-creation') }}</strong></p>
                            </div>
                            <div class="col-1">
                                <p class="text-center"><strong>{{ __('ui.revision-table-status') }}</strong></p>
                            </div>
                            <div class="col-3">
                                <p class="text-center"><strong>{{ __('ui.revision-table-actions') }}</strong></p>
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
                                    <div class="col-1 d-flex justify-content-center">
                                        <a href="{{ route('announce_detail', $announce->id) }}"
                                            class="btn btn-ann fs-5">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <form method="POST"
                                            action="{{ route('undo_revision', compact('announce')) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="ms-md-2 btn btn-ann fs-5">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="table-pers2 mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4>{{ __('ui.no-history-revisions') }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                        <div class="d-flex justify-content-center">
                            {{ $revisioned_announces->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
