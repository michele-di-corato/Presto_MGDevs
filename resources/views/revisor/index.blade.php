<x-layout>
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>
                    {{ $announce_to_check ? 'Annuncio da revisionare' : 'Non c\'è nessun annuncio da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-4">
            @if (session('confirm'))
                <div class="alert alert-success fade show d-flex" role="alert">
                    {{ session('confirm') }}
                    <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    @if ($announce_to_check)
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card m-5">
                        <div class="row justify-content-center align-items-center p-5">
                            <div class="col-12 col-md-6">
                                <h2>{{ $announce_to_check->name }}</h2>
                                <h3>{{ $announce_to_check->category->name }}</h3>
                                <h3>{{ $announce_to_check->price }} €</h3>
                                <p>{{ $announce_to_check->description }}</p>
                                <h5>Creato da: {{ $announce_to_check->user->name }}</h5>
                                <h5>Creato il: {{ $announce_to_check->created_at->format('d/m/Y') }}</h5>
                            </div>
                            <div class="col-12 col-md-6">
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
                        <div class="row mb-4">
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <form method="POST"
                                    action="{{ route('accept_announce', ['announce' => $announce_to_check]) }}">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit" class="btn btn-ann">Accetta</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <form method="POST"
                                    action="{{ route('reject_announce', ['announce' => $announce_to_check]) }}">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit" class="btn btn-ann">Rifiuta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-layout>
