<x-layout namePage="{{ $announce->name }}">

    <div class="container-fluid bg-create h-100">
        <div class="row justify-content-center align-items-center vh-100 py-5">
            <div class="col-12 col-md-10 py-5">

                <h1 id="annunci" class="text-center col-text display-6 p-2 pb-3">{{ $announce->name }}</h1>
                <div class="card card-pers card-elem px-3 pb-3">
                    <div class="card card-bg p-3">


                        <div class="row justify-content-center">

                            <div class="col-12 col-md-6 p-3 row justify-content-center">
                                <h5>
                                    <strong class="font-head">{{__('ui.revision-table-category')}}:</strong>
                                    {{ __('ui.category-' . $announce->category->id) }}
                                </h5>
                                <h5>
                                    <strong class="font-head">{{__('ui.revision-table-price')}}:</strong> 
                                    {{ $announce->price }}€
                                </h5>
                                <h5>
                                    <strong class="font-head">{{__('ui.edit-description-placehold')}}:</strong> 
                                    {{ $announce->description }}
                                </h5>
                                <h5>
                                    <strong class="font-head">{{ __('ui.details-createdBy') }}</strong> 
                                    {{ $announce->user->name }}
                                </h5>
                                <h5>
                                    <strong class="font-head">{{ __('ui.details-createdDate') }}</strong> 
                                    {{ $announce->created_at->format('d/m/Y') }}
                                </h5>
                            </div>


                            @if (!$announce->images()->get()->isEmpty())
                                <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($announce->images as $image)
                                                <div class="carousel-item active">
                                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block img-fluid"
                                                        alt="DefaultImage">
                                                </div>
                                            @endforeach
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
                    @else
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
                    @endif

                    <div class="text-center">
                        <a class="btn btn-back" href="{{ route('show_announces') }}">
                            {{ __('ui.btn-back-details') }}
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-layout>
