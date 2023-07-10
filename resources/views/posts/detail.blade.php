@extends('layouts.app')

@section('content')
    <section class="detail-post">
        <article class="last-post" style="flex-direction:column">
            <h2>{{ $post->title }}</h2>
            <div class="tag" style="align-self: center;">{{ $post->tag }}</div>
            <br>

            <img src="../{{ $post->image }}">
            <br>
            <p>{{ $post->description }}</p>
            <div class="btn-detail">
                <a href="{{ route('posts.edit', $post) }}" class="btn-back">Editar</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-back">Eliminar</button>
                </form>
            </div>
        </article>
    </section>
@endsection
