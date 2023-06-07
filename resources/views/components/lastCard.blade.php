<div class="container-fluid">
    <div class="row justify-content-center p-5">
        <h6>Ultimi articoli caricati:</h6>
        @foreach ($announces as $announce)
        <div class="col-4 col-md-2 my-2">
            <div class="card">
                <img class="card-img-top img-fluid img-last" src="{{ Storage::url('public/media/DefaultImage.jpg') }}" alt="Immagine">
                <div class="card-overlay">
                    <div class="row text-center align-items-center h-100">
                        <div class="col-12">
                            <a class="btn btn-light" href="{{ route('announce_detail', $announce->id) }}">{{ $announce->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    
    
</div>