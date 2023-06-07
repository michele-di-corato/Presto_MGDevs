<x-layout namePage="{{ $category->name }}">
    <div class="container-fluid">            

        <div class="row justify-content-around">
            @forelse ($category->announces as $announce)
            
            <x-card :announce="$announce"/>
           
            @empty
                <p>Nessun annuncio trovato.</p>
            @endforelse

            <div class="col-12 d-flex justify-content-evenly">
                @foreach ($categories as $category)
                    <a href="{{ route('show_per_category', compact('category')) }}">{{ $category->name }}</a>
                @endforeach
            </div>

        </div>
    </div>
</x-layout>
