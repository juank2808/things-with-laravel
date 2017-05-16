<ul id="dropdown1" class="dropdown-content ">
  <li><a href="" class="blue-text text-darken-2">opcion</a></li>
  <li class="divider"></li>
  <li><a href="<?php echo e(url('/logout')); ?>" class="red-text text-darken-2"><i class="material-icons">power_settings_new</i>Salir</a></li>
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
        <li><a href="<?php echo e(url('admin/images')); ?>">Imágenes</a></li>
        <li><a class="dropdown-button green" href="#!" data-activates="dropdown1"><?php echo e(Auth::user()->name); ?><i class="material-icons right">arrow_drop_down</i></a></li>
        <?php else: ?>
        <li><a href="<?php echo e(URL('/')); ?>">Inicio</a></li>
        <li><a href="<?php echo e(URL('/login')); ?>">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>