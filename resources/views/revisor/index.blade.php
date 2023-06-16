<x-layout namePage="Revisiona">
    
    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 pt-5 pb-3">
                
                {{-- Alert --}}
                <div class="container-fluid">
                    <div class="row justify-content-center text-center">
                        @if (session('confirm'))
                        <div class="alert alert-success fade show d-flex" role="alert">
                            {{ session('confirm') }}
                            <button type="button" class="btn-close align-self-center ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                
                {{-- Annullare Annuncio --}} 
                @if ($verified_announces)
                <div class="mb-3">
                    <form method="POST" action="{{ route('undo_announce') }}">
                        @csrf @method('PATCH')
                        <p>
                            {{ __('ui.undo-phrase') }}
                            <button type="submit" class="ms-md-2 btn btn-ann">
                                {{ __('ui.btn-undo') }}
                            </button>
                        </p>
                    </form>
                </div>
                @endif 
                
                {{-- Annuncio --}}
                <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">
                    {{ __('ui.to-revise') }}
                </h2>
                
                <div class="card card-pers card-elem pb-3 px-3">
                    <div class="card card-bg p-3">
                        
                        
                        @if ($announce_to_check)
                        <div class="col-12">
                            <div class="pt-3">
                                <div class="row justify-content-center align-items-center p-3">
                                    <div class="col-12 col-md-6 text-center">
                                        <h2>{{ $announce_to_check->name }}</h2>
                                        <h3>{{ __('ui.category-' . $announce_to_check->category->id) }}</h3>
                                        <h3>{{ $announce_to_check->price }} €</h3>
                                        <p>{{ $announce_to_check->description }}</p>
                                        <h5>{{ __('ui.created-by') }} {{ $announce_to_check->user->name }}</h5>
                                        <h5>{{ __('ui.created-at') }} {{ $announce_to_check->created_at->format('d/m/Y') }}</h5>
                                    </div>
                                    @if (!$announce_to_check->images()->get()->isEmpty())
                                    <div class="col-12 col-md-6 py-3 d-flex justify-content-center">
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="d-none">{{ $i = 0 }}</div>
                                                @foreach ($announce_to_check->images as $image) @if ($i == 0)
                                                <div class="carousel-item active">
                                                    @else
                                                    <div class="carousel-item">
                                                        @endif
                                                        <div class="d-flex flex-column align-items-center">
                                                            <img src="{{ $image->getUrl(300, 300) }}" class="d-block img-fluid" alt="DefaultImage" />
                                                            <div class="card-body text-center">
                                                                <h5>{{ __('ui.tags') }}</h5>
                                                                <div class="p-2">
                                                                    @if ($image->labels) @foreach ($image->labels as $label)
                                                                    <p class="d-inline">
                                                                        - {{ $label }}
                                                                    </p>
                                                                    @endforeach @endif
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5>{{ __('ui.images-revision') }}</h5>
                                                                <p>{{ __('ui.image-adult') }} <span class="{{ $image->adult }}"></span></p>
                                                                <p>{{ __('ui.image-spoof') }} <span class="{{ $image->spoof }}"></span></p>
                                                                <p>{{ __('ui.image-medical') }} <span class="{{ $image->medical }}"></span></p>
                                                                <p>{{ __('ui.image-violence') }} <span class="{{ $image->violence }}"></span></p>
                                                                <p>{{ __('ui.image-racy') }} <span class="{{ $image->racy }}"></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-none">{{ $i++ }}</div>
                                                    @endforeach
                                                </div>
                                                <div class="container container-control">
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-12 col-md-6 p-3 d-flex justify-content-center">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid" alt="DefaultImage" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid" alt="DefaultImage" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ Storage::url('public/media/DefaultImage.jpg') }}" class="d-block img-fluid" alt="DefaultImage" />
                                                    </div>
                                                </div>
                                                <div class="container container-control">
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-6 d-flex justify-content-center">
                                            <form method="POST" action="{{ route('accept_announce', ['announce' => $announce_to_check]) }}">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="btn btn-ann mb-sm-3">{{ __('ui.btn-approve') }}</button>
                                            </form>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <form method="POST" action="{{ route('reject_announce', ['announce' => $announce_to_check]) }}">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="btn btn-ann">{{ __('ui.btn-reject') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="table-pers p-3">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h4 class="text-center">{{ __('ui.none-to-revise') }}</h4>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                {{-- Seconda Sezione --}}
                <div class="col-12 col-md-10 row">
                    {{-- Annunci in Coda --}}
                    <div class="col-12 col-md-6 px-0 pe-0 pe-md-2 mb-3">
                        <h2 id="annunci" class="text-center col-text display-6 p-2 pb-3">
                            {{ __('ui.revision-queue') }}
                        </h2>
                        <div class="card card-pers card-elem px-3 pb-3">
                            <div class="card card-bg p-3">
                                {{-- Categorie --}}
                                <div id="annunci2" class="d-flex justify-content-center p-3">
                                    <div class="col-3">
                                        <p><strong>{{ __('ui.revision-table-name') }}</strong></p>
                                    </div>
                                    <div class="col-4">
                                        <p><strong>{{ __('ui.revision-table-category') }}</strong></p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p><strong>{{ __('ui.revision-table-price') }}</strong></p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p><strong>{{ __('ui.revision-table-creation') }}</strong></p>
                                    </div>
                                </div>
                                @forelse ($announces_queue as $announce)
                                <div class="table-pers mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="col-3">
                                            <p>{{ $announce->name }}</p>
                                        </div>
                                        <div class="col-4">
                                            <p>{{ __('ui.category-' . $announce->category->id) }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p>{{ $announce->price }}€</p>
                                        </div>
                                        <div class="col-3 text-center">
                                            <p>{{ $announce->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="table-pers2 mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4 class="text-center">{{ __('ui.no-revision-queue') }}</h4>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    
                    {{-- Annunci Revisionati --}}
                    <div class="col-12 col-md-6 px-0 ps-md-2 ps-0">
                        <h2 id="annunci" class="text-center display-6 p-2 pb-3">
                            <a class="text-decoration-none col-text" href="{{ route('log_revisions') }}">
                                {{ __('ui.history-revisions') }}
                            </a>
                        </h2>
                        <div class="card card-pers card-elem px-3 pb-3">
                            <div class="card card-bg p-3">
                                {{-- Categorie --}}
                                <div id="annunci2" class="d-flex justify-content-center p-3">
                                    <div class="col-2">
                                        <p><strong>{{ __('ui.revision-table-name') }}</strong></p>
                                    </div>
                                    <div class="col-2">
                                        <p><strong>{{ __('ui.revision-table-category') }}</strong></p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <p><strong>{{ __('ui.revision-table-price') }}</strong></p>
                                    </div>
                                    <div class="col-2">
                                        <p><strong>{{ __('ui.revision-table-creation') }}</strong></p>
                                    </div>
                                    <div class="col-2">
                                        <p class="text-center"><strong>{{ __('ui.revision-table-status') }}</strong></p>
                                    </div>
                                    <div class="col-2">
                                        <p class="text-center"><strong>{{ __('ui.revision-table-actions') }}</strong></p>
                                    </div>
                                </div>
                                {{-- Annunci --}} @forelse ($revisioned_announces as $announce)
                                <div class="table-pers mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="col-2">
                                            <p>{{ $announce->name }}</p>
                                        </div>
                                        <div class="col-2">
                                            <p>{{ __('ui.category-' . $announce->category->id) }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p>{{ $announce->price }}€</p>
                                        </div>
                                        <div class="col-2">
                                            <p>{{ $announce->created_at }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            @if ($announce->is_accepted == true)
                                            <div class="b-true">
                                                {{ __('ui.table-status-approved') }}
                                            </div>
                                            @elseif ($announce->is_accepted === null)
                                            <div class="b-null">
                                                {{ __('ui.table-status-pending') }}
                                            </div>
                                            @elseif ($announce->is_accepted == false)
                                            <div class="b-false">
                                                {{ __('ui.table-status-rejected') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-2 text-center">
                                            <form method="POST" action="{{ route('undo_announce') }}">
                                                @csrf @method('PATCH')
                                                <button type="submit" class="ms-md-2 btn btn-ann">{{ __('ui.btn-undo') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="table-pers2 mt-2 p-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h4>{{ __('ui.no-history-revisions') }}</h4>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</x-layout>