@extends('layouts.app')

@section('titulo')
    Paguina principal
@endsection

@section('contenido')
    @if ($posts->count())
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div>
                <a href=" {{ route('post.show', ['user' => $post->user, 'post' => $post]) }} ">
                    <img src="{{ asset('uploads') . '/' . $post->imagen }}"
                        alt="Imagen del post {{ $post->titulo }}">
                </a>
            </div>
        @endforeach
    </div>
    
    <div class="mt-10">
        {{ $posts->links('pagination::tailwind') }}
    </div>

    @else
    <p class="text-center">No hay posts, sigue a alguien para mostrar los posts.</p>
    @endif



    {{-- @forelse ($posts as $post)
        <h1>{{$post->titulo }}</h1>
    @empty
        <p>No hay Post</p>
    @endforelse --}}


@endsection
