<x-layout namePage="Annunci">
    @if (session('confirm'))
        <div class="alert alert-success mt-5">
            <p>{{ session('confirm') }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <div class="col-12 d-flex justify-content-evenly">
                @foreach ($categories as $category)
                    <a href="{{ route('show_per_category', compact('category')) }}">{{ $category->name }}</a>
                @endforeach
            </div>
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
                        <div class="col-2">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="col-2">
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                        <div class="col-2">
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
