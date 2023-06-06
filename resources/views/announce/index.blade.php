<x-layout>
    @if (session('confirm'))
        <div class="alert alert-success mt-5"><p>{{session('confirm')}}</p>
        </div>
    @endif
</x-layout>
