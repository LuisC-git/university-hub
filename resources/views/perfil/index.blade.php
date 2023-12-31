@extends('layouts.app')

@section('titulo')
    Editar perfil:
    {{ auth()->user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('perfil.store',auth()->user()) }}"  method="POST" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-2">
                    <label for="username" class="mb-2 block uppercase text-gray-500">
                        username
                    </label>
                    <input type="text" name="username" id="username" placeholder="Tu nombre de Usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500">
                        Imagen de Perfil
                    </label>
                    <input  name="imagen" id="imagen" type="file" accept=".jpg, .jpeg, .png"
                        class="border p-3 w-full rounded-lg " value="">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    </div>

                    <input type="submit" value="Guardar Cambios"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
