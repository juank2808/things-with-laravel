<div class="collection with-header">
    <li class="collection-header"><h5 class="blue-text">Categorías</h5></li>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/search/category', $category->name)); ?>" class="collection-item grey-text text-darken-3"><span class="badge white-text blue-grey"><?php echo e($category->articles->count()); ?></span><?php echo e($category->name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="collection with-header">
    <li class="collection-header"><h5 class="blue-text">Tags</h5></li>
    <li href="#!" class="collection-item">
    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="chip">
        <a href="<?php echo e(url('search/tags', $tag->name)); ?>"><?php echo e($tag->name); ?></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </li>
</div>