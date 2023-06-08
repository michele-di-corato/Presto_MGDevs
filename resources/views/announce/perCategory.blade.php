<x-layout namePage="{{ $category->name }}">
    <x-navCategory />
    <div class="container-fluid mt-2">
        <div class="row justify-content-around">

            <div class="col-12 text-center">
                <h1>{{ $category->name }}</h1>
            </div>
            @forelse ($category->announces as $announce)
                <x-card :announce="$announce" />
            @empty
                <p>Nessun annuncio trovato.</p>
            @endforelse

        </div>
    </div>

</x-layout>
