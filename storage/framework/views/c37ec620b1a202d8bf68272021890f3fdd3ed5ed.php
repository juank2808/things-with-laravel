<?php $__env->startSection('title','Login'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'login','method'=> 'POST']); ?>

    <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <?php echo Form::email('email', null, ['class'=> 'validate', 'placeholder'=>'example@example.com' ]  ); ?>

                        <?php echo Form::label('E-mail', 'E-mail'); ?>

                    </div>
          
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <?php echo Form::password('password', ['class'=> 'validate', 'placeholder'=>'Password' ]  ); ?>

                        <?php echo Form::label('Password', 'Password'); ?>

                    </div>

                    
                    <?php echo Form::submit('Entrar', ['class'=>'btn blue '] ); ?>

                </div>
            </div>
      </div>
    
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>