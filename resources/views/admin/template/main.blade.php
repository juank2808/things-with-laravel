<!DOCTYPE html>
<html>
    <head></head>
        <link rel="stylesheet" href="{{('/css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{('/css/style.css') }}" type="text/css" />
    <title>@yield('title')</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{('/js/myscript.js') }}"></script>
        @include('admin.template.partials.nav')
        <section>
            @yield('content')
        </section>
        <br>
        <footer>
        @include('admin.template.partials.footer')
        </footer>
    </body>
</html>