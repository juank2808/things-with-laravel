<?php $__env->startSection('title','Edit Tag'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' => ['categories.update',$category], 'method'=>'PUT']); ?>

        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">book</i>
                        <?php echo Form::text('name', $category->name, ['class'=> 'validate', 'placeholder'=>'Nombre de tag','required' ]  ); ?>

                        <?php echo Form::label('name', 'Nombre'); ?>

                    </div>
                </div>
            </div>
            <?php echo Form::submit('Guardar', ['class'=>'btn blue '] ); ?>

        </div>
    <?php echo Form::close(); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>