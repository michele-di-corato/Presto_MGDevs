<x-layout namePage="{{ __('ui.category-' . $category->id) }}">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-10 py-5">

                <div id="annunci" class="mb-2">

                    <h1 class="text-center col-text display-6 p-2 pb-3">{{ __('ui.category-' . $category->id) }}</h1>
                    <x-navCategory />

                </div>

                <div class="card card-pers card-elem pb-3 px-3">

                    <div class="row justify-content-center px-2 px-md-0">
                        @forelse ($announces as $announce)
                            <div class="col-12 col-md-3">
                                <x-card :announce="$announce" />
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
                        
                        <div class="d-flex justify-content-center">
                            <div class="px-3 pt-2">
                                {{ $announces->links() }}
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</x-layout>
