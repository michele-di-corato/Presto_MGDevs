<x-layout namePage="{{ Auth::user()->name }}">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                {{-- Dati Profilo --}}
                <div class="card card-bg p-3 mb-3 col-text">
                    <div class="text-center">
                        <img src="{{ Storage::url('public/media/DefaultUser.jpg') }}" alt="Immagine profilo"
                            class="img-thumbnail img-fluid" style="width:100px">
                        <h4><strong>{{ __('ui.profile-username') }}</strong> <i>{{ Auth::user()->name }}</i></h4>
                        <h5><strong>{{ __('ui.profile-email') }}</strong> <i>{{ Auth::user()->email }}</i></h5>
                    </div>
                </div>

                {{-- Annunci --}}
                <h1 id="annunci" class="text-center col-text display-6 pb-2">{{ __('ui.profile-announces') }}</h1>

                <div class="card card-pers card-bg p-3 col-text">

                    {{-- Categorie --}}
                    <div id="annunci2" class="d-flex justify-content-center p-3">
                        <div class="col-2">
                            <p><strong>{{ __('ui.revision-table-name') }}</strong></p>
                        </div>
                        <div class="col-2">
                            <p><strong>{{ __('ui.revision-table-category') }}</strong></p>
                        </div>
                        <div class="col-1">
                            <p><strong>{{ __('ui.revision-table-price') }}</strong></p>
                        </div>
                        <div class="col-2">
                            <p><strong>{{ __('ui.created-at') }}</strong></p>
                        </div>
                        <div class="col-1">
                            <p class="text-center"><strong>{{ __('ui.revision-table-status') }}</strong></p>
                        </div>
                        <div class="col-4">
                            <p class="text-center"><strong>{{ __('ui.revision-table-actions') }}</strong></p>
                        </div>
                    </div>

                    {{-- Tabelle --}}
                    <div class="row justify-content-center align-items-center">

                        @forelse ($announces as $announce)
                            <div class="col-12">
                                <x-tableCard :announce="$announce" />
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="table-pers2 mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4>{{ __('ui.profile-no-announces') }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>

                </div>

            </div>
        </div>
    </div>

</x-layout>
