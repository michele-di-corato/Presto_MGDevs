<x-layout namePage="{{ __('ui.page-form-rev') }}">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center vh-100 pt-5">
            <div class="col-12 col-md-8 col-lg-6 py-5">

                <h1 id="annunci" class="text-center col-text display-6 pb-2">{{ __('ui.revisor-form-title') }}</h1>

                <div class="card card-pers card-elem px-3 pb-3">
                    <div class="card card-bg p-3">
                        <form action="{{ route('become_revisor') }}" method="GET">
                            @csrf
                            <label for="presentation" class="form-label">{{ __('ui.label-revisor-form') }}</label>
                            <textarea name="presentation" id="presentation" class="form-control mb-3" cols="30" rows="10"></textarea>
                            <button type="submit" class="btn button_revisor">{{ __('ui.btn-send') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
