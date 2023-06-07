<x-layout namePage="Annunci">
    
    @if (session('confirm'))
    <div class="alert alert-success">
        <p>{{ session('confirm') }}</p>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-evenly">

            <x-navCategory />
            
            @foreach ($announces as $announce)
            <x-card :announce="$announce" />
            @endforeach

        </div>
    </div>
    
</x-layout>
