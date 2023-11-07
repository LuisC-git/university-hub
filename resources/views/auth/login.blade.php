@extends('layouts.app')

@section('titulo')
    Inicia sesión en universityHub
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-4/12 p-5">
            <img src=" {{ asset('img/img-login.png') }} " alt="Imangen Registro De Usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action=" {{ route('login') }} " method="POST" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ session('mensaje') }}
                    </p>
                @endif

                <div class="mb-2">
                    <label for="email" class="c">
                        E-mail
                    </label>
                    <input type="email" name="email" id="email" placeholder="Correo"
                        class="border p-3 w-full rounded-lg" value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="lg:flex mb-2 gap-2">
                    <div class="md:w-full">
                        <label for="password" class="mb-2 block uppercase text-gray-500">
                            Contraseña
                        </label>
                        <input type="password" name="password" id="password" placeholder="Contraseña"
                            class="border p-3 w-full rounded-lg">
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="text-gray-500 text-sm"> Mantener mi sesión abierta</label>
                </div>
                <input type="submit" value="Iniciar sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
