<div class="card col-10 col-lg-3 m-3 col-md-5">
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
        <div class="d-flex justify-content-between px-0">
            <a href="{{ route('announce_detail', $announce->id) }}" class="btn btn-primary btn-ann">Dettagli</a>
            <a href="{{route('edit_announce',compact('announce'))}}" class="btn btn-warning btn-ann">Modifica</a>
            @livewire('delete-announce',compact('announce'))
        </div>
    </div>
</div>
