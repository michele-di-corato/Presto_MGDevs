<x-layout namePage="{{ Auth::user()->name }}">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center pt-5">
            <div class="col-12 col-md-10 pt-5">

                {{-- Dati Profilo --}}
                <h2 id="annunci" class="text-center col-text display-6 pb-2">Profilo di {{ Auth::user()->name }}</h2>
                <div class="card card-pers card-elem px-3 pb-3 mb-5">
                    <div class="card card-bg p-3">

                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 col-md-6 text-center">
                                <img src="{{ Storage::url('public/media/DefaultUser.jpg') }}" alt="Immagine profilo"
                                    class="img-thumbnail img-fluid" style="width:100px">
                            </div>
                            <div class="col-12 col-md-6 text-center col-text">
                                <h4><strong>{{ __('ui.profile-username') }}</strong> <i>{{ Auth::user()->name }}</i>
                                </h4>
                                <h5><strong>{{ __('ui.profile-email') }}</strong> <i>{{ Auth::user()->email }}</i></h5>
                            </div>
                        </div>
                        
                    </div>
                </div>

                {{-- Annunci --}}
                <h2 id="annunci" class="text-center col-text display-6 pb-2">{{ __('ui.profile-announces') }}</h2>

                <div class="card card-pers card-elem px-3 pb-3 col-text">
                    <div class="card card-bg p-3">

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
    </div>

</x-layout>
