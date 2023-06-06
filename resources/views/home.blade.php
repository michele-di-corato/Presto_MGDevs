<x-layout namePage="Home">
    <header class="container-fluid header-home vh-100">
        <div class="row align-items-center vh-100">
            <div class="col-12 col-md-6">
                <h1 class="title-home text-center">Benvenuto Nel Sito!</h1>
            </div>
            <div class="col-12 col-md-6">
                <i class="d-flex justify-content-center icon-home bi bi-bag-check"></i>
                <h3 class="para-home text-center">Qui Potrai Creare, E Trovare <br> Prodotti Di Tutti I Tipi</h3>
            </div>
        </div>
    </header>
    <div class="vh-100 container-fluid">
        <div class="row justify-content-evenly">
            @foreach ($announces as $announce)
                <div class="card col-10 col-md-3 m-md-3">
                    <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="card-img-top img-rounded mt-2"
                        alt="Immagine annuncio">
                    <div class="card-body row justify-content-evenly">
                        <div class="col-6">
                            <h4 class="card-title">{{ $announce->name }}</h4>
                            <h6 class="card-title">Categoria: {{ $announce->category->name }}</h6>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <h5 class="card-subtitle ms-auto">Prezzo: {{ $announce->price }}€</h5>
                        </div>
                        <div class="col-12 mb-3">
                            <p class="card-text">{{ $announce->description }}</p>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</x-layout>
