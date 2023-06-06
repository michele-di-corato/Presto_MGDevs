<x-layout>
    <div class="container-fluid mt-5">

        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
                <label for="InputUserName" class="form-label">Nome utente</label>
                <input type="text" class="form-control" id="InputUserName" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleEmail" name="email">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </x-layout>