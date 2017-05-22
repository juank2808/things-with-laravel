<?php if(auth::user()): ?>
  <ul id="dropdown1" class="dropdown-content ">
    <li><a href="" class="blue-text text-darken-2">opcion</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo e(url('/logout')); ?>" class="red-text text-darken-2"><i class="material-icons">power_settings_new</i>Salir</a></li>
  </ul>
   <?php endif; ?>
    <nav>
      <div class="nav-wrapper blue-grey darken-4">
        <?php if(auth::user()): ?>
        <a href="#!" class="brand-logo"><img id="logo" src="/images/logolara.png"></a>
        <?php else: ?>
        <a href="#!" class="brand-logo center"><img id="logo" src="/images/logolara.png"></a>
        <?php endif; ?>
        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <?php if(auth::user()): ?>
          <li><a href="<?php echo e(url('/admin/home')); ?>">Inicio</a></li>
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
        <ul class="side-nav" id="mobile-demo">
        <?php if(auth::user()): ?>
        <li><div class="userView">
        <div class="background">
          <img src="https://www.awrwebdesign.com/images/2017/04/03/web-designer.jpg">
        </div>
          <a href="#!user"><img class="circle" src="https://ugc.kn3.net/i/origin/http://simpsonleblog.s.i.pic.centerblog.net/7o6nak0s.gif"></a>
          <a class="green-text" href="#!"><strong><?php echo e(Auth::user()->name); ?></strong></a>
          <li><a href="<?php echo e(url('admin/home')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(url('admin/users')); ?>">Usuarios</a></li>
          <li><a href="<?php echo e(url('admin/categories')); ?>">Categorías</a></li>
          <li><a href="<?php echo e(url('admin/tags')); ?>">Tags</a></li>
          <li><a href="<?php echo e(url('admin/articles')); ?>">Artículos</a></li>
          <li><a href="<?php echo e(url('admin/images')); ?>">Imágenes</a></li>
          
          <li><div class="divider"></div></li>
          <li><a href="<?php echo e(url('/logout')); ?>" class="red darken-3 white-text">Salir <i class=" white-text small right material-icons">power_settings_new</i></a></li>
        </div></li>
         <?php else: ?>
          <li><a href="<?php echo e(URL('/')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(URL('/login')); ?>">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
          