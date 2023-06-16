<div class="container-fluid">
    <div class="row bg-last justify-content-center align-items-center">
        <div class="col-12 col-md-10 py-5">
            <h1 id="annunci2" class="text-center col-text display-6 pb-2">{{ __('ui.latest-ann') }}</h1>
            <div class="card card-pers card-elem p-3">
                <div class="row point justify-content-center">
                    @forelse ($announces as $announce)
                        <div class="animationUp last-card col-6 col-md-3 my-2">
                            <div class="card">
                                <img class="card-img-top img-fluid img-last"
                                    src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(300, 300) : Storage::url('public/media/DefaultImage.jpg') }}" alt="Foto Prodotto">
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
                    <div class="alert alert-success fade show d-flex h-100 my-0" role="alert">
                        <p>{{ __('ui.no-article-home') }}</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
