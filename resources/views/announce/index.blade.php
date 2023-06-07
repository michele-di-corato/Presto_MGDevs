<x-layout namePage="Annunci">
    @if (session('confirm'))
        <div class="alert alert-success mt-5">
            <p>{{ session('confirm') }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <div class="col-12 d-flex justify-content-evenly">
                @foreach ($categories as $category)
                    <a href="{{ route('show_per_category', compact('category')) }}">{{ $category->name }}</a>
                @endforeach
            </div>
            @foreach ($announces as $announce)
                <x-card :announce="$announce" />
            @endforeach
        </div>
    </div>
</x-layout>
