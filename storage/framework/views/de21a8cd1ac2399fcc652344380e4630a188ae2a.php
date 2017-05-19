  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header blue-grey darken-2 blue-grey-text text-lighten-3">Categorías</div>
      <div class="collapsible-body blue-grey darken-2">
          
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p ><a href="<?php echo e(url('/search/category', $category->name)); ?>" class="collection-item  white-text">
            <?php echo e($category->name); ?></a><span class="badge white-text deep-orange accent-3"><?php echo e($category->articles->count()); ?></span></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </li>
    <li>
        <div class="collapsible-header blue-grey darken-2 blue-grey-text text-lighten-3">Tags</div>
        <div class="collapsible-body blue-grey darken-2">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="chip">
            <a href="<?php echo e(url('search/tags', $tag->name)); ?>"><?php echo e($tag->name); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </li>
  </ul>
        