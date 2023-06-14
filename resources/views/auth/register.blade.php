<x-layout namePage="Registrati">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center vh-100 pt-5">
            <div class="col-12 col-md-6 py-5">

                <h1 id="annunci" class="text-center col-text display-6 pb-2">{{ __('ui.register-title') }}</h1>

                <div class="card card-pers p-3">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="py-3 form-control @error('name') is-invalid @enderror" id="inputName"
                                name="name" value="{{ old('name') }}" placeholder="{{ __('ui.register-name-placehold') }}">
                            @error('name')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="py-3 form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ old('email') }}" name="email" placeholder="{{ __('ui.register-email-placehold') }}">
                            @error('email')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="py-3 form-control @error('password') is-invalid @enderror"
                                id="inputPassword" name="password" placeholder="{{ __('ui.register-password-placehold') }}">
                            @error('password')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="py-3 form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation" placeholder="{{ __('ui.register-confirmation-placehold') }}">
                            @error('password_confirmation')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-ann">{{ __('ui.register-btn') }}</button>
                            <p>{{ __('ui.register-to-login') }} <a href="{{ route('login') }}" class="btn">{{ __('ui.link-to-login') }}
                                    </a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layout>
