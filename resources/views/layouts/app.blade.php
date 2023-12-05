<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased bg-gray-200">
    <div class="min-h-screen flex flex-col justify-between">
        @include('layouts.navbar')
        <main class="w-full xl:max-w-4xl mx-auto overflow-y-auto">
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
    @livewireScripts
</body>

</html>
