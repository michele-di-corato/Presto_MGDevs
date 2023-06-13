<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it • {{ $namePage ?? 'Home' }}</title>
    {{-- Icon Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Livewire --}}
    @livewireStyles
    {{-- Style --}}
    @vite(['resources/css/app.css'])
</head>

<body>

    <x-navbar />

    {{-- @if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'create_announce') --}}
    <main>
        {{-- @else
    <main id="main">
    @endif --}}
        {{ $slot }}

    </main>

    <x-footer />

    {{-- Livewire --}}
    @livewireScripts
    {{-- Script --}}
    @vite(['resources/js/app.js'])

    <div id="buttonGlobal" class="opacity-0">
        <a href="#" class="btn-global shadow rounded-circle">
            <i class="fa fa-arrow-up justify-content-center d-flex align-items-center h-100 fs-5"></i>
        </a>
    </div>
</body>


<body>


    

</html>
