@extends('admin.template.main')
@section('title', $article->title)
@section('content')
    <div class="row">
        <div class="col s12 m7 l9">
            <h2>{{$article->title}}</h2>
            <div class="divider"></div>
            <p>{!!$article->content!!}</p>
        </div>
        
        <div class="col s12 m5 l3">
            @include('partials.aside')
        </div>
        <div class="col s12 m7 l9">
            <h5>Comentarios:</h5>
            @include('admin.template.partials.coment')
        </div>
    </div>

@endsection
