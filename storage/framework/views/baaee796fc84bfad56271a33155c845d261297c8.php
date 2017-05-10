<?php $__env->startSection('title', 'Agregar Categoría'); ?>
<?php $__env->startSection('content'); ?>
    
    <?php echo Form::open(['route'=>'categories.store','method'=> 'POST']); ?>

         <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        <?php echo Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  ); ?>

                        <?php echo Form::label('name', 'Nombre de categoria'); ?>

                    </div>
                </div>
            </div>
            <?php echo Form::submit('Crear', ['class'=>'btn blue '] ); ?>

        </div>
         
    <?php echo Form::close(); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>