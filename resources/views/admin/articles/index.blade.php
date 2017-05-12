@extends('admin.template.main')
@section('title', 'Articulos')
@section('content')
<div class="container">
    <a href="{{url('admin/articles/create')}}"class="right waves-effect waves-lights btn-large btn-floating blue "><i class="material-icons">add</i></a>
        <h1>Artículos</h1>
        
        @foreach($articles as $article)
        <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <!--<div class="card-image">-->
                    <!--@if($images->article_id=$article->id)-->
                    <!--<img src="">-->
                    <!--@endif-->
                    <span class="card-title">{{$article->title}}</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></a>
                    <a class="left btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">mode_edit</i></a>
                <!--</div>-->
                <div class="card-content">
                     <div class="divider"></div>
                    <p>{{$article->category_id}}</p>
                </div>
            </div>
        </div>
      </div>
        @endforeach
        
</div>
@endsection