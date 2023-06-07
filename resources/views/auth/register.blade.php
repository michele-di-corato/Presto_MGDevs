<x-layout namePage="Registrati">
    
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card-user p-5">
                    <h1 class="display-6 text-center pb-5">Registrati</h1>

                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                            <label for="inputName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                            <label for="inputEmail" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                            <label for="inputPassword" class="form-label">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrati</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-layout>