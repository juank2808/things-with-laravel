<!DOCTYPE html>
<html>
    <head>
    </head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{('/css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{('/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{('/chosen-js/chosen.css') }}" type="text/css" />
    <title>@yield('title')</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{('/chosen-js/chose.jquery.js') }}"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=4f4ypv5k01cp78grrb9t801hxlf75maskw87hugf44hg3aw8"></script>
        <script>tinymce.init({
                              selector: 'textarea',  // change this value according to your HTML
                            });
</script>
        <script type="text/javascript" src="{{('/js/myscript.js') }}"></script>
        
        @include('admin.template.partials.nav')

        <div class="container">
            <!--@include('flash::message')-->
            @yield('content')
        </div>
        
        <br>
        <footer>
        @include('admin.template.partials.footer')
        </footer>
    </body>
</html>