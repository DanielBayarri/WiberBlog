@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Editar Posts</h2>
            </div>
            <a href="{{ route('posts.show', $post) }}" class="btn-back">Volver</a>
            <hr>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                Error en la edicion del post.
                <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Titulo:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Titulo"
                            value="{{ $post->title }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Descripción:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción...">{{ $post->description }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 mt-2">
                    <div class="form-group">
                        <strong>Tag:</strong>
                        <select name="tag" class="form-select" id="">
                            <option value="{{ $post->tag }}">{{ $post->tag }}</option>
                            <option value="Tecnologia">Tecnología</option>
                            <option value="Comida">Comida</option>
                            <option value="Noticias">Noticias</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Imagen del Post:</strong>
                        <br>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit">Editar Post</button>
                </div>
            </div>
        </form>
    </div>

@endsection
