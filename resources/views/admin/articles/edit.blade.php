@extends('admin.template.main')
@section('title', 'editar articles')
@section('content')
    <div class="container">
        <h2 class="center">Editar Articulo - {{$articles->title}}</h2>
        <div class="row">
            <div class="col s8 offset-s2 ">    
                <div class="card-panel">
                    {!!Form::open(['route'=>['articles.update', $articles], 'method'=>'PUT', 'files'=>true])!!}
                        <div class="input-field">
                        {!!Form::label('title','Titulo')!!}
                        {!!Form::text('title', $articles->title, ['class'=> 'validate', 'placeholder'=>'', 'required']  )!!}
                        </div>
                        <div class="input-field">
                        {!!Form::label('title','Categoria')!!}<br><br>
                        <select name="category_id">
                            <option value="" disabled selected>Elige una Categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                        
                        <!--{!! Form::select('category_id', $categories, null,['placeholder'=>'Elije'])!!}-->
                        </div>
                        {!!Form::textarea('content',$articles->content, ['id'=> 'textarea1', 'class'=> 'materialize-textarea textarea-content', 'placeholder'=>'Contenido'])!!}
                        <div class="input-field">
                        {!!Form::label('tags','Tags')!!}<br><br>
                        <select name="tag_id" multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"> {{$tag->name}}</option>
                            @endforeach
                        </select>
                        <!--{!!Form::select('tags[]',$tags,null,['id'=>'tags','placeholder'=>'Elige los tags','multiple'])!!}-->
                        </div>
                        <br><br>
                        <div class="divider"></div>
                        <br>
                        {!! Form::submit('aceptar', ['class'=>'btn blue '] )!!}
                    {!!Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection