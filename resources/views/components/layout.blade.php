<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it • {{$namePage ?? 'Home'}}</title>
    {{-- Icon Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Livewire --}}
    @livewireStyles
    {{-- Style --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <x-navbar />

    @if(Route::currentRouteName() == 'home')
    <main>
    @elseif(Route::currentRouteName() == 'create_announce')
    <main>
    @else
    <main class="mt-5 pt-5">
    @endif
        {{ $slot }}
    </main>


    <x-footer />

    {{-- Livewire --}}
    @livewireScripts
    
</body>

</html>
