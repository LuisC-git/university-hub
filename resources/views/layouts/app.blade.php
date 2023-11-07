<!doctype html>
<html>
    {{-- <html lang="{{ str_repalce('_', '-', app()->getLocale()) }}"> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>universityHub | @yield('titulo')</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100">
    <header class="p-5 boder-b bg-white shadow">

        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-3xl font-black">universityHub</a>

            <nav class="flex gap-2 items-center">
                @auth
                <a class="font-bold text-gray-600" href="{{ route('login') }}">
                Hola: <span class="font-normal"> {{ auth()->user()->username}} </span>
                </a>
                <a class="font-bold uppercase text-gray-600" href="{{ route('login') }}">Cerrar sesión</a>
                @endauth

                @guest
                <a class="font-bold uppercase text-gray-600" href="{{ route('login') }}">Login</a>
                <a class="font-bold uppercase text-gray-600" href="{{ route('register') }}">Crear cuenta</a>
                @endguest

            </nav>

        </div>
    </header>

    <main class="container mx-auto mt-5">
        
        <h2 class="font-black text-center text-3xl mb-5">@yield('titulo')</h2>

        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-400  uppercase mt-5">
            UniversityHub - todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>
