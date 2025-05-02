<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/img/logo-smp.png">

        <title>{{ $head }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- type Js --}}
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


        <!-- Tailwind -->
        @vite('resources/css/app.css')

        {{-- my style --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- Font awwsome(icon) --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Cabin:ital,wght@0,400..700;1,400..700&family=Jersey+15&family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body class="h-full overflow-x-hidden max-w-[100vw] scrol bg-white">
        @yield('content')

    </body>
    <script src="js/Home2.js"></script>
</html>


