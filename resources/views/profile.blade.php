<x-layout namePage="{{ Auth::user()->name }}">

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3">
                <img src="{{ Storage::url('public/media/DefaultUser.jpg') }}" alt="Immagine profilo"
                    class="img-thumbnail w-50">
                <h4>Nome utente: {{ Auth::user()->name }}</h4>
                <h5>Email: {{ Auth::user()->email }}</h5>
            </div>
            <div class="col-9">
                <div class="row justify-content-evenly mb-5">
                    <div class="col-12 text-center">
                        <h2>Annunci approvati</h2>
                    </div>
                    @forelse ($approved_announces as $announce)
                        <x-card :announce="$announce" />
                    @empty
                        <p class="text-center">Non sono presenti annunci in questa sezione</p>
                    @endforelse
                </div>
                <div class="row justify-content-evenly mb-5">
                    <div class="col-12 text-center">
                        <h2>Annunci in attesa di approvazione</h2>
                    </div>
                    @forelse ($pending_announces as $announce)
                        <x-card :announce="$announce" />
                    @empty
                        <p class="text-center">Non sono presenti annunci in questa sezione</p>
                    @endforelse
                </div>
                <div class="row justify-content-evenly mb-5">
                    <div class="col-12 text-center">
                        <h2>Annunci rifiutati</h2>
                    </div>
                    @forelse ($rejected_announces as $announce)
                        <x-card :announce="$announce" />
                    @empty
                        <p class="text-center">Non sono presenti annunci in questa sezione</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-layout>
