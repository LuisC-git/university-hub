@extends('layouts.app')

@section('titulo')
    Paguina principal
@endsection

@section('contenido')
    <x-lista-post :posts="$posts">
        <x-slot:textPostVacio>
            No hay posts, sigue a alguien para mostrar los posts.
        </x-slot:textPostVacio>
    </x-lista-post>
@endsection
