<?php $__env->startSection('title'); ?>
Access denied
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="section blue-grey darken-3">
    <div class="section">
        <div class="section blue-grey darken-3">
            <div class="section">
                <div class="section blue-grey darken-3">
                    <div class="section">
                        <div class="section blue-grey darken-3">
                            <div class="section">
                                <div class="section blue-grey darken-3">
                                    <div class="row">
                                        <div class="col s12 m8 l8 offset-l2 offset-m2">
                                            <div class="card blue-grey darken-1">
                                                <div class="card-content white-text">
                                                    <span class="card-title"><h1 class="center white-text"><i class="material-icons large red-text">lock_outline</i><br> Acceso Denegado</h1></span>
                                                    <p class="center">Acceso denegado para este usuario</p>
                                                </div>
                                                <div class="card-action">
                                                    <a href="<?php echo e(url('/admin/home')); ?>" class="center btn red">Volver al inicio</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>