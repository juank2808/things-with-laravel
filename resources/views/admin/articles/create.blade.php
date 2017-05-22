@extends('admin.template.main')
@section('title', 'Create articles')
@include('admin.template.partials.nav')
@section('content')
    <div class="container">
        <h1 class="center">Crear Articulos</h1>
        <div class="row">
            <div class="col s10 offset-s1 ">    
                <div class="card-panel">
                    {!!Form::open(['route'=>'articles.store', 'method'=>'POST', 'files'=>true])!!}
                        <div class="input-field">
                        {!!Form::label('title','Titulo')!!}
                        {!!Form::text('title',  null, ['class'=> 'validate', 'placeholder'=>'', 'required']  )!!}
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
                        <br><br><br>
                        {!!Form::textarea('content',null,['id'=> 'textarea1', 'class'=> 'materialize-textarea textarea-content', 'placeholder'=>'Contenido'])!!}
                        <div class="input-field">
                        {!!Form::label('tags','Tags')!!}<br><br>
                        <select name="tag_id" multiple="multiple" clasS="chosen-select">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"> {{$tag->name}}</option>
                            @endforeach
                        </select>
                        <!--{!!Form::select('tags[]',$tags,null,['id'=>'tags','placeholder'=>'Elige los tags','multiple'])!!}-->
                        </div>
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons">add_a_photo</i></span>
                                <input name="image" type="file">
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