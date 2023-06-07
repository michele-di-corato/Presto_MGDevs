<x-layout namePage="{{ $category->name }}">

    <div class="container-fluid">
        <div class="row justify-content-around">

            <x-navCategory />

            @forelse ($category->announces as $announce)
                <x-card :announce="$announce" />
            @empty
                <p>Nessun annuncio trovato.</p>
            @endforelse

        </div>
    </div>

</x-layout>
