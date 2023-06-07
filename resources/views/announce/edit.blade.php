<x-layout namePage="Modifica {{ $announce->name }}">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @livewire('edit-announce', compact('announce'))
            </div>
        </div>
    </div>

</x-layout>
