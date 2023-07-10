@extends('layouts.app')

@section('content')
    <header>
        <h1>Blog Wiber</h1>
        <p>Blog para el proceso de seleccion de Wiber Rent a Car</p>
    </header>
    
    <section class="last">
        <h2>Ultimo post</h2>
        <article class="last-post">
            <div class="text">
                    @if (!empty($posts) && count($posts) > 0)
                    <h3>{{ $posts[0]->title }}</h3>
                <div class="tag" style="align-self: center;">{{ $posts[0]->tag }}</div>
                <p>{{ $posts[0]->description }}</p>
                <a class="btn-back" href="{{route('posts.show',$posts[0])}}">Leer mas</a>

            </div>
            <img src="{{ $posts[0]->image }}">
            @else
                <h3>Default post</h3>
                <div class="tag" style="align-self: center;">Otros</div>
                <p>Este post viene por default al no tener ningun post creado, <strong>Registrate, Logeate y crea tus posts!</strong>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto dolore, aut sint, beatae
                    accusantium quod quas doloribus soluta eum iste, voluptates esse nisi omnis vel! Excepturi ducimus
                    dolor voluptatum!
                </p>
                
            </div>
            <img src="images/example.png">
            @endif

        </article>
    </section>




    <section class="posts">
        <h2>Nuestros posts</h2>

        <div class="post-filter">
            <span id="tag" class="tag active-tag" data-filter="all">Todos</span>
            <span id="tag" class="tag" data-filter="Tecnologia">Tecnologia</span>
            <span id="tag" class="tag" data-filter="Comida">Comida</span>
            <span id="tag" class="tag" data-filter="Noticias">Noticias</span>
            <span id="tag" class="tag" data-filter="Otros">Otros</span>
        </div>
        @if (!empty($posts) && count($posts) > 0)

        <div class="post-container">
            @foreach ($posts as $post)  
            <article class="post-card">
                <img src="{{ $post->image }}" alt="{{ $post->image }}">
                <div class="tag">{{ $post->tag }}</div>
                <h3>{{ $post->title }}</h3>

                <p> {{ Str::limit($post->description, 100, '...') }}</p>
                <a class="btn-back" href="{{route('posts.show',$post)}}">Leer mas</a>
            </article>
            @endforeach
        </div>
        @else
        <div class="post-container">
            <article class="post-card">
                <img src="images/example.png" alt="">
                <div class="tag">Otros</div>
                <h3>Default posts</h3>
                <p>Este post viene por default al no tener ningun post creado, <strong>Registrate, Logeate y crea tus posts!</strong> </p>
            </article>
        </div>
        @endif
    </section>
@endsection
