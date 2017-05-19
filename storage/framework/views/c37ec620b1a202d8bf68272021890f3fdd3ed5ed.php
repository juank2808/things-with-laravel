<?php $__env->startSection('title','Login'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'login','method'=> 'POST']); ?>

    <div class="row">
            <div class="col s5 m5 l6 offset-l3 ">
                <div class="collection">
                    <div class="collection-item">
                        <div class="collection-item">
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
            </div>
      </div>
    
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>