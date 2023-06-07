<x-layout namePage="Home">
    <header class="container-fluid header-home vh-100">
        <div class="row align-items-center vh-100">
            <div class="col-12 col-md-6">
                <h1 class="title-home text-center">Benvenuto Nel Sito!</h1>
            </div>
            <div class="col-12 col-md-6">
                <i class="d-flex justify-content-center mb-3 icon-home bi bi-bag-check"></i>
                <h3 class="para-home text-center">Qui Potrai Creare, E Trovare <br> Prodotti Di Tutti I Tipi</h3>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            @foreach ($announces as $announce)
            <x-card :announce="$announce"/>
            @endforeach
        </div>
    </div>
</x-layout>
