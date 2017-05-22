<?php $__env->startSection('title', 'Galería de Imágenes'); ?>
<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="section">
        <h1 class="center">Galería de imágenes</h1>
        <div class="container">
             
            <div class="slider" >
                <ul class="slides">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <img src="/images/articles/<?php echo e($image->name); ?>"> <!-- random image -->
                    <div class="caption left-align">
                        <h4 class="blue-text">Artículo: </h4>
                        <h5 class="light blue-text text-lighten-3"><?php echo e($image->article->title); ?></h5>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>