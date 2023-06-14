<x-layout>
    <div class="container-fluid bg-profile">
        <div class="row justify-content-center align-items-center vh-100 pt-5">
            <div class="col-12 col-md-6 py-5">

                <h1 id="annunci" class="text-center col-text display-6 pb-2">Invia la tua candidatura</h1>

                <div class="card card-pers p-3">
                    <form action="{{ route('become_revisor') }}" method="GET">
                        @csrf
                        <label for="presentation" class="form-label">Scrivi una lettera di presentazione</label>
                        <textarea name="presentation" id="presentation" class="form-control mb-3" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn button_revisor">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
