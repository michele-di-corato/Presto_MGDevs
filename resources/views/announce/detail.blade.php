<x-layout namePage="{{ $announce->name }}">
    <div class="container-fluid">
        <div class="row ms-5 my-5">
            <div class="col-6">
                <h2>{{ $announce->name }}</h2>
                <h3>{{ $announce->category->name }}</h3>
                <h3>{{ $announce->price }} €</h3>
                <p>{{ $announce->description }}</p>
                <h5>Creato da: {{ $announce->user->name }}</h5>
                <h5>Creato il: {{ $announce->created_at->format('d/m/Y') }}</h5>
            </div>
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid" alt="DefaultImage">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid" alt="DefaultImage">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid " alt="DefaultImage">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>              
            </div>
            <div class="col-2"><a class="btn btn-primary" role="button" href="{{ route('show_announces') }}">Torna
                    Indietro</a>
            </div>

        </div>
    </div>
</x-layout>