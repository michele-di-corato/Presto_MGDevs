<x-layout namePage="{{ Auth::user()->name }}">

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="{{ Storage::url('public/media/DefaultUser.jpg') }}" alt="Immagine profilo"
                    class="img-thumbnail w-50">
                <h4>Nome utente: {{ Auth::user()->name }}</h4>
                <h5>Email: {{ Auth::user()->email }}</h5>
            </div>
            <div class="col-9">
                <div class="row justify-content-evenly">
                    @foreach ($announces as $announce)
                        <x-card :announce="$announce" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-layout>
