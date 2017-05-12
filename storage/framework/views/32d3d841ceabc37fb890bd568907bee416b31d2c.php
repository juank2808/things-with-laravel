<ul id="dropdown1" class="dropdown-content">

  <li><a href="<?php echo e(url('/logout')); ?>">Salir</a></li>
</ul>
<nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         <?php if(auth::user()): ?>
        <li><a href="<?php echo e(URL('/')); ?>">Inicio</a></li>
        <li><a href="<?php echo e(url('admin/users')); ?>">Usuarios</a></li>
        <li><a href="<?php echo e(url('admin/categories')); ?>">Categorías</a></li>
        <li><a href="<?php echo e(url('admin/tags')); ?>">Tags</a></li>
        <li><a href="<?php echo e(url('admin/articles')); ?>">Artículos</a></li>
        <li><a href="collapsible.html">Imagenes</a></li>

        <li><a class="dropdown-button green" href="#!" data-activates="dropdown1"><?php echo e(Auth::user()->name); ?><i class="material-icons right">arrow_drop_down</i></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>