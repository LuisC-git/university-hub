@extends('layouts.app')

@section('titulo')
perfil: {{ $user->username }}
@endsection


@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 log:w-6/12 px-5 ">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen De Perfil">
            </div>
            <div class="md:w-8/12 log:w-6/12 px-5 flex flex-col justify-center items-center py-10 md:items-start">
                <p class="text-gray-700 text-2xl">{{ $user->username  }} </p>

                <p class="text-gray-800 text-sm mb-3 font-bold ">
                    0
                    <span class="font-normal">
                        Seguidores
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">
                        Siguiendo
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">
                        Post
                    </span>
                </p>
            </div>
        </div>
    </div>
@endsection