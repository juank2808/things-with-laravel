@extends('admin.template.main')

@section('title')
Blog-Learning
@endsection

@section('content')

    <div class="parallax-container">
            <h1 class="blue-text center blog">Learning blog</h1>
        
        <div class="parallax">
            <img class="" src="http://g1.pcworld.pl/news/thumb/2/9/296593">
        </div>
    </div>
    <div class="section  blue-grey darken-4">
        <div class="row">
            <div class="col l9">
            @foreach($articles as $article)
                <div class="col s12 m6 l5">
                    <div class="card small">
                        <div class="card-image">
                            @foreach($article->images as $image)
                            <a href="{{url('/view/article',$article->id)}}"><img src="/images/articles/{{$image->name}}"></a>
                            @endforeach
                            <a href="{{url('/view/article',$article->id)}}"class="card-title black-text">{{$article->title}}</a>
                        </div>
                        <div class="card-content">
                            <a class="left">{{$article->user->name}}</a><a href="{{url('/search/category', $article->category->name)}}" class="right">{{$article->category->name}}</a>
                            <br><a class="right black-text">{{$article->created_at->difFForHumans()}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col s12 m6 l3  blue-grey darken-4">
                @include('partials.aside')
            </div>
        </div>
        <div id="up" class="fixed-action-btn ">
            <a class="btn-floating btn white right pulse">
                <i class="material-icons black-text">keyboard_arrow_up</i>
            </a>
        </div>
   </div>

@endsection
