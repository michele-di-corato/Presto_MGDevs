<x-layout namePage="Modifica {{ $announce->name }}">

    <div class="container-fluid bg-create">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 col-md-6 py-5">
                @livewire('edit-announce', compact('announce'))
            </div>
        </div>
    </div>

</x-layout>
