<?php $__env->startSection('title', 'Users List'); ?>
<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="section">
    <a href="<?php echo e(url('admin/users/create')); ?>"class="waves-effect waves-red btn blue">Registrar</a>
        <table>
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th class="center">Tipo</th>
                    <th class="center">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user-> id); ?></td>
                    <td><?php echo e($user-> name); ?></td>
                    <td><?php echo e($user-> email); ?></td>
                    <?php if($user->type == 'admin'): ?>
                        <td class="red acent-4 center"><span class="white-text text-darken-2"><?php echo e($user-> type); ?></span></td>
                    <?php else: ?>
                        <td class="blue darken-3 center"><span class="white-text text-darken-2"><?php echo e($user-> type); ?></span></td>
                    <?php endif; ?>
                    
                    <td class="center">
                        <a class="waves-effect waves-light btn-floating red" href="<?php echo e(route ('admin.users.destroy', $user->id)); ?>"><i class="material-icons">delete</i></a>
                        <a class="waves-effect waves-light btn-floating green" href="<?php echo e(route ('admin.users.edit', $user->id)); ?>"><i class="material-icons">mode_edit</i></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
    <!--<?php echo $users->render(); ?>-->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>