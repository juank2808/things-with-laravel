<ul id="dropdown1" class="dropdown-content">

  <li><a href="{{url('/logout')}}">Salir</a></li>
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
        <li><a href="collapsible.html">Artículos</a></li>
        <li><a href="collapsible.html">Imagenes</a></li>

        <li><a class="dropdown-button green" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
        @endif
      </ul>
    </div>
  </nav>