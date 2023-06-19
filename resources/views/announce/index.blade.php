<x-layout namePage="Annunci">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-10 pt-5">

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

                <div id="annunci" class="mb-2">
                    <h2 class="text-center col-text display-6 p-2">{{ __('ui.show-title') }}</h2>
                    <x-navCategory />
                </div>

                <div class="card card-pers card-elem px-3 pb-3">
                    <div class="row justify-content-center px-2 px-md-0">
                        @forelse ($announces as $announce)
                            <div class="col-12 col-md-4 col-lg-2 px-0 px-md-2 mb-3 mb-lg-0 pb-4">
                                <x-card :announce="$announce" />
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="card card-bg p-3">
                                    <div class="alert alert-success fade show d-flex my-0 h-100 d-flex justify-content-center"
                                        role="alert">
                                        <p>{{ __('ui.no-result-alert') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                        <div class="d-flex justify-content-center">
                            <div class="px-3 pt-2">
                                {{ $announces->links() }}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
