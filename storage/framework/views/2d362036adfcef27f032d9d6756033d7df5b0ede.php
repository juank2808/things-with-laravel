<?php $__env->startSection('title', 'Categories List'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('admin/categories/create')); ?>"class="right waves-effect waves-red btn blue">Crear</a>
    <h1>Categorías</h1>
    
    <ul class="collapsible popout" data-collapsible="accordion">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="collapsible-header">
                <?php echo e($category->name); ?>

                <a class="waves-effect waves-light btn red right" href="<?php echo e(route ('admin.categories.destroy', $category->id )); ?>"><i class="material-icons">delete</i></a>
                <a class="waves-effect waves-light btn yellow right" href="<?php echo e(route ('admin.categories.edit', $category->id)); ?>"><i class="material-icons">mode_edit</i></a>
            </div>
            
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>