<ul id="dropdown1" class="dropdown-content ">
  <li><a href="" class="blue-text text-darken-2">opcion</a></li>
  <li class="divider"></li>
  <li><a href="{{url('/logout')}}" class="red-text text-darken-2"><i class="material-icons">power_settings_new</i>Salir</a></li>
</ul>
  <nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @if (auth::user())
        <li><a href="{{url('/admin/home') }}">Inicio</a></li>
        <li><a href="{{url('admin/users')}}">Usuarios</a></li>
        <li><a href="{{url('admin/categories')}}">Categorías</a></li>
        <li><a href="{{url('admin/tags')}}">Tags</a></li>
        <li><a href="{{url('admin/articles')}}">Artículos</a></li>
        <li><a href="{{url('admin/images')}}">Imágenes</a></li>
        <li><a class="dropdown-button green" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
       @else
        <li><a href="{{ URL('/') }}">Inicio</a></li>
        <li><a href="{{ URL('/login') }}">Login</a></li>
        @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
      @if (auth::user())
      <li><div class="userView">
      <div class="background">
        <img src="https://www.awrwebdesign.com/images/2017/04/03/web-designer.jpg">
      </div>
        <a href="#!user"><img class="circle" src="https://ugc.kn3.net/i/origin/http://simpsonleblog.s.i.pic.centerblog.net/7o6nak0s.gif"></a>
        <a class="green-text" href="#!"><strong>{{Auth::user()->name}}</strong></a>
        <li><a href="{{url('admin/index') }}">Inicio</a></li>
        <li><a href="{{url('admin/users')}}">Usuarios</a></li>
        <li><a href="{{url('admin/categories')}}">Categorías</a></li>
        <li><a href="{{url('admin/tags')}}">Tags</a></li>
        <li><a href="{{url('admin/articles')}}">Artículos</a></li>
        <li><a href="{{url('admin/images')}}">Imágenes</a></li>
        
        <li><div class="divider"></div></li>
        <li><a href="{{url('/logout')}}" class="red darken-3 white-text">Salir <i class=" white-text small right material-icons">power_settings_new</i></a></li>
      </div></li>
       @else
        <li><a href="{{ URL('/') }}">Inicio</a></li>
        <li><a href="{{ URL('/login') }}">Login</a></li>
        @endif
      </ul>
    </div>
  </nav>
          