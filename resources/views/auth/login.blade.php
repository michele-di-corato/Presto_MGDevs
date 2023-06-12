<x-layout namePage="Login">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center vh-100 pt-5">
            <div class="col-12 col-md-6 py-5">

                <h1 id="annunci" class="text-center col-text display-6 pb-2">Accedi</h1>

                <div class="card card-pers p-3">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="py-3 form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ old('email') }}" name="email" placeholder="Email">
                            @error('email')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="py-3 form-control @error('password') is-invalid @enderror"
                                id="InputPassword" name="password" placeholder="Password">
                            @error('password')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-ann">Entra</button>
                            <p>Sei un nuovo utente? <a href="{{ route('register') }}" class="btn">Registrati</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layout>
