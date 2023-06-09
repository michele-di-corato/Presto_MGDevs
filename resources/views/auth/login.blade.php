<x-layout namePage="Login">

    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card-user p-5">
                    <h1 class="display-6 text-center pb-5">Accedi</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ old('email') }}" name="email" placeholder="Email">
                            <label for="inputEmail" class="form-label">Email</label>
                            @error('email')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="InputPassword" name="password" placeholder="Password">
                            <label for="InputPassword" class="form-label">Password</label>
                            @error('password')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Entra</button>
                            <p>Sei un nuovo utente? <a href="{{ route('register') }}" class="btn">Registrati</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout>
