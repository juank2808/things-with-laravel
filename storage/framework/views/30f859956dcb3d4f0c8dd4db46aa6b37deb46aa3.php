<?php $__env->startSection('title'); ?>
Home-<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="title m-b-md">
        <h1>Bienvenido! <?php echo e(Auth::user()->name); ?></h1>
    </div>
<a href="" class="btn "> Botonazo</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>