<x-layout namePage="{{ $announce->name }}">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">{{ $announce->name }}</h1>
                <div class="card card-pers p-3">
                    <div class="row justify-content-center">

                        <div class="col-12 col-md-6 p-3 row justify-content-center">
                            <h3>{{ $announce->category->name }}</h3>
                            <h3>{{ $announce->price }} €</h3>
                            <p>{{ $announce->description }}</p>
                            <h5>Creato da: {{ $announce->user->name }}</h5>
                            <h5>Creato il: {{ $announce->created_at->format('d/m/Y') }}</h5>
                        </div>



                        <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                            class="d-block img-fluid" alt="DefaultImage">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                            class="d-block img-fluid" alt="DefaultImage">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}"
                                            class="d-block img-fluid " alt="DefaultImage">
                                    </div>
                                </div>
                                <div class="container container-control">
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="btn btn-back" href="{{ route('show_announces') }}">
                            Torna Indietro
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>

</x-layout>
