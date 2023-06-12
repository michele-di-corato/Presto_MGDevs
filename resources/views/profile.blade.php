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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Prezzo</th>
                                    <th scope="col">Creazione</th>
                                    <th scope="col">Stato</th>
                                    <th scope="col" colspan="3" class="text-center">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announces as $announce)
                                    <div class="d-none">{{ $index++ }}</div>
                                    <x-tableCard :announce="$announce" :index="$index" />
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
