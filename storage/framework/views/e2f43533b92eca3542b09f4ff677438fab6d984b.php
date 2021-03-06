<?php $__env->startSection('title', 'Crear Usuario'); ?>

<?php $__env->startSection('content'); ?>
    <script>
        var num_opciones = 1;
        var numcheckbox = 0;
        function habilitaDeshabilita(esto)
        
        {
            if (esto.checked){
                        if (numcheckbox >= num_opciones) {
                                esto.checked = false;
                                alert ("Solo Puedes Seleccionar 1");
                        } else {
                                numcheckbox++;
                        }
                } else {
                        numcheckbox--;
                }
        }

    </script>
<div class="container">
    <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script type="text/javascript" src="">
                alert('$error');
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php echo Form::open(['route' => 'users.store', 'method' => 'POST', ]); ?>

    <!-- ojo con el prefijo admin, no se usa!-->
        <div class="row center">
            <div class="col s12 ">
                <div class="card-panel">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <?php echo Form::text('name', null, ['class'=> 'validate', 'placeholder'=>'Nombre' ]  ); ?>

                        <?php echo Form::label('name', 'Nombre'); ?>

                    </div>
              
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
         
                    <div class="input-field">
                        <?php echo Form::label('type','Tipo'); ?><br><br>
                        <?php echo Form::select('type',[''=>'','member'=>'Miembro','admin'=>'Administrador'],null); ?>

                        
                    </div>
                    
                    <?php echo Form::submit('Registrar', ['class'=>'btn blue '] ); ?>

                </div>
            </div>
      </div>
    <?php echo Form::close(); ?>

    
</div>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>