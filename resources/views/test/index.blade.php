<!DOCTYPE html>
<html>
    <head>
        <title>{{$article->title}}</title>
        @push('links')
        <link rel="stylesheet" href="{{('/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{('/css/app.css') }}" type="text/css" />
        @endpush
        
        
    </head>
    <body>
        @push('scripts')
        <script type="text/javascript" src="{{('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{('/js/myscript.js') }}"></script>
        @endpush
        <h1>{{$article -> title}}</h1>
            <br>
        {{$article -> content}}
            <br>
        {{$article -> user->name}} | {{$article -> category->name}} <br>
        
        @foreach($article->tags as $tag)
        {{$tag->name}}
        @endforeach
    </body>
</html>