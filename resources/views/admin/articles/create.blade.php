@extends('admin.template.main')
@section('title', 'Create articles')
@section('content')
    <div class="container">
        <h1 class="center">Crear Articulos</h1>
        <div class="row">
            <div class="col s8 offset-s2 ">    
                <div class="card-panel">
                    {!!Form::open(['route'=>'articles.store', 'method'=>'POST', 'files'=>true])!!}
                        {!!Form::label('title','Titulo')!!}
                        {!!Form::text('title',  null, ['class'=> 'validate', 'placeholder'=>'' ]  )!!}
                        {!!Form::label('title','Categoria')!!}
                        <select>
                            <option value="" disabled selected>Elige una Categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                        {!!Form::textarea('content',null,['id'=> 'textarea1', 'class'=> 'materialize-textarea', 'placeholder'=>'Contenido'])!!}
                        {!!Form::label('title','Tags')!!}
                        <select multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"> {{$tag->name}}</option>
                            @endforeach
                        </select>
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons">add_a_photo</i></span>
                                <input name="imagen" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="divider"></div>
                        <br>
                        {!! Form::submit('Crear Artículo', ['class'=>'btn blue '] )!!}
                    {!!Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection