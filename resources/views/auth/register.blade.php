<x-layout namePage="Registrati">

    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center vh-100 pt-5">
            <div class="col-12 col-md-6 py-5">

                <h1 id="annunci" class="text-center col-text display-6 pb-2">Registrati</h1>

                <div class="card card-pers p-3">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                                name="name" value="{{ old('name') }}" placeholder="Name">
                            <label for="inputName">Name</label>
                            @error('name')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
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
                                id="inputPassword" name="password" placeholder="Password">
                            <label for="inputPassword" class="form-label">Password</label>
                            @error('password')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation"
                                placeholder="Password Confirmation">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            @error('password_confirmation')
                                <div class="text-danger pt-1">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Registrati</button>
                            <p>Sei un utente già registrato? <a href="{{ route('login') }}" class="btn">Effettua il
                                    login</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layout>
