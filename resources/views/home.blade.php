<x-layout namePage="Home">

    <header class="container-fluid header-home">
        <div class="row align-items-center vh-100 pt-5">
            <div class="col-12 col-md-6">
                <h1 class="title-home text-center">Benvenuto su Presto.it!</h1>
            </div>
            <div class="col-12 col-md-6">
                <i class="d-flex justify-content-center mb-3 icon-home bi bi-bag-check"></i>
                <h3 class="para-home text-center">Qui Potrai Caricare, E Trovare <br> Prodotti Di Tutti I Tipi</h3>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <x-lastCard 
                :announces="$announces"
            />
        </div>
    </div>

</x-layout>
