<x-layout namePage="{{ Auth::user()->name }}">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                <div class="card p-3 mb-2 col-text">
                    <div class="text-center">
                        <img src="{{ Storage::url('public/media/DefaultUser.jpg') }}" alt="Immagine profilo"
                            class="img-thumbnail img-fluid" style="width:100px">
                        <h4><strong>Nome utente:</strong> <i>{{ Auth::user()->name }}</i></h4>
                        <h5><strong>Email:</strong> <i>{{ Auth::user()->email }}</i></h5>
                    </div>
                </div>


                <h1 id="annunci" class="text-center col-text display-6 pb-2">Annunci</h1>

                <div class="card card-pers p-3 col-text">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4 p-3 text-center">
                            <h2>Approvati</h2>
                            @forelse ($approved_announces as $announce)
                                <div class="mb-3">
                                    <x-card :announce="$announce" />
                                </div>
                            @empty
                                <p class="text-center">Non sono presenti annunci in questa sezione</p>
                            @endforelse
                        </div>

                        <div class="col-12 col-md-4 p-3 text-center">
                            <h2>In Attesa</h2>
                            @forelse ($pending_announces as $announce)
                                <div class="mb-3">
                                    <x-card :announce="$announce" />
                                </div>
                            @empty
                                <p class="text-center">Non sono presenti annunci in questa sezione</p>
                            @endforelse
                        </div>

                        <div class="col-12 col-md-4 p-3 text-center">
                            <h2>Rifiutati</h2>
                            @forelse ($rejected_announces as $announce)
                                <div class="mb-3">
                                    <x-card :announce="$announce" />
                                </div>
                            @empty
                                <p class="text-center">Non sono presenti annunci in questa sezione</p>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
