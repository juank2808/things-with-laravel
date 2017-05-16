@extends('admin.template.main')
@section('title', 'Galería de Imágenes')
@section('content')
    <div class="section">
        <h1 class="center">Galería de imágenes</h1>
        <div class="container">
             
            <div class="slider" >
                <ul class="slides">
            @foreach($images as $image)
                <li>
                    <img src="/images/articles/{{$image->name}}"> <!-- random image -->
                    <div class="caption left-align">
                        <h4 class="blue-text">Artículo: </h4>
                        <h5 class="light blue-text text-lighten-3">{{$image->article->title}}</h5>
                    </div>
                </li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection