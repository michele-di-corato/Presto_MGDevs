<x-layout namePage="Login">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card-user p-5">
                    <h1 class="display-6 text-center pb-5">Accedi</h1>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                            <label for="inputEmail" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                            <label for="InputPassword" class="form-label">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Entra</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-layout>