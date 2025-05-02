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
        <style>
            .upgrade-btn:hover { background: #0038fd; }
            .active-nav-link { background: #1947ee; }
            .nav-item:hover { background: #1947ee; }
            .account-link:hover { background: #3d68ff; }
        </style>

        {{-- Font awwsome(icon) --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Cabin:ital,wght@0,400..700;1,400..700&family=Jersey+15&family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body class="h-full overflow-x-hidden max-w-[100vw] bg-gray-100 font-family-karla flex">
        @yield('content')

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <script>
            document.getElementById('imgInput').addEventListener('change', function(event) {
                // Ambil file yang dipilih
                const file = event.target.files[0];

                // Ambil elemen dengan id 'nameFoto'
                const nameFotoElement = document.getElementById('nameFoto');

                // Jika ada file yang dipilih, ubah teksnya menjadi nama file
                if (file) {
                    nameFotoElement.textContent = file.name;
                } else {
                    nameFotoElement.textContent = "Tidak ada file yang dipilih";
                }
            });
        </script>
    </body>
</html>


