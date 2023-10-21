<!doctype html>
<html>
    {{-- <html lang="{{ str_repalce('_', '-', app()->getLocale()) }}"> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>universityHub | @yield('titulo')</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100">
    <header class="p-5 boder-b bg-white shadow">

        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-3xl font-black">universityHub</a>

            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600" href="#">Login</a>
                <a class="font-bold uppercase text-gray-600" href="/crear-cuenta">Crear cuenta</a>
            </nav>

        </div>
    </header>

    <main class="container mx-auto mt-10">
        
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>

        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-400  uppercase">
            UniversityHub - todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>
