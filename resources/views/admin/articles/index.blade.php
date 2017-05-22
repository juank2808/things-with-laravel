@extends('admin.template.main')
@section('title', 'Artículos')
@include('admin.template.partials.nav')
@section('content')

<div class="section">
    <a href="{{url('admin/articles/create')}}"class="right waves-effect waves-lights btn-large btn-floating blue "><i class="material-icons">add</i></a>
    <div class="row col s5">
        <ul class="collection col s5">
            <li class="collection-item">
           
            {!!Form::open(['route'=>'articles.index', 'method'=>'GET'])!!}
                <div class="input-field">
                    {!!Form::text('title', null,['id'=>'search', 'type'=>'search', 'placeholder'=>'Buscar', 'class'=>'autocomplete'])!!}
                    {!!Form::label('','',['class'=>'label-icon', 'for'=>'search'] )!!}
                
                    
                </div>
            {!!Form::close()!!}
            </li>
        </ul>
    </div>
        <h1 class="center">Artículos</h1>
        
        @foreach($articles as $article)
        <div class="row">
        <div class="col s12 m7 l6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title orange-text">{{$article->title}}</span>
                <p>Categoria:  {{$article->category->name}}</p>
                <p>Usuario:  {{$article->user->name}}</p>
            </div>
            <div class="card-action">
                <a href="{{route('admin.articles.destroy', $article->id)}}"class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></a>
                <a href="{{route('admin.articles.edit', $article->id)}}"class="left btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">mode_edit</i></a>
            </div>
          </div>
        </div>
      </div>
        @endforeach
        
</div>
@endsection