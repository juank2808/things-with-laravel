<ul id="dropdown1" class="dropdown-content ">
  <li><a href="" class="blue-text text-darken-2">opcion</a></li>
  <li class="divider"></li>
  <li><a href="{{url('/logout')}}" class="red-text text-darken-2"><i class="material-icons">power_settings_new</i>Salir</a></li>
</ul>
<nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
         @if (auth::user())
        <li><a href="{{ URL('/') }}">Inicio</a></li>
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
    </div>
  </nav>