<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-10 py-5">
            <h1 id="annunci2" class="text-center col-text display-6 pb-2">{{ __('ui.latest-ann') }}</h1>
            <div class="card card-pers card-elem px-3 pb-3">
                <div class="row justify-content-center">
                    @forelse ($announces as $announce)
                        <div class="animationUp last-card col-12 col-md-6 col-lg-3 mb-3">
                            <div class="card card-bg p-2">
                                <img class="card-img-top img-fluid img-last"
                                    src="{{ !$announce->images()->get()->isEmpty()? $announce->images()->first()->getUrl(300, 300): Storage::url('public/media/DefaultImage.jpg') }}"
                                    alt="Foto Prodotto">
                                <div class="card-overlay">
                                    <div class="row text-center align-items-center h-100">
                                        <div class="col-12">
                                            <a class="btn btn-light p-1"
                                                href="{{ route('announce_detail', $announce->id) }}">{{ $announce->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card card-bg p-3">
                                <div class="alert alert-success fade show d-flex my-0 h-100 d-flex justify-content-center"
                                    role="alert">
                                    <p>{{ __('ui.no-article-home') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
