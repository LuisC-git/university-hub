@extends('layouts.app')

@section('titulo')
    Regístrate en universityHub
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-4/12 p-5">
           <img src=" {{ asset('img/img-register.avif') }} " alt="Imangen Registro De Usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action=" {{ route('register') }} " method="POST" novalidate>
                @csrf
                <div class="mb-2">
                    <label for="name" class="mb-2 block uppercase text-gray-500">
                        Nombre
                    </label>
                    <input type="text" name="name" id="name" placeholder="Nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }} 
                        </p>
                        @enderror
                </div>
                <div class="mb-2">
                    <label for="username" class="mb-2 block uppercase text-gray-500">
                        Username
                    </label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="border p-3 w-full rounded-lg" value="{{ old('username') }}">
                        @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }} 
                        </p>
                        @enderror
                </div>
                <div class="mb-2">
                    <label for="email" class="mb-2 block uppercase text-gray-500">
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
                    <div class="md:w-1/1 lg:w-1/2">
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
                    <div class="md:w-1/1 lg:w-1/2">
                        <label for="password_confirmation" class="mb-2 block uppercase truncate text-gray-500">
                            Confirmar contraseña
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repetir Contraseña" class="border p-3 w-full rounded-lg">
                            @error('password_confirmation')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }} 
                            </p>
                            @enderror
                    </div>
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
