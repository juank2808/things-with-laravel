<?php $__env->startSection('title', 'Create articles'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="center">Crear Articulos</h1>
        <div class="row">
            <div class="col s8 offset-s2 ">    
                <div class="card-panel">
                    <?php echo Form::open(['route'=>'articles.store', 'method'=>'POST', 'files'=>true]); ?>

                        <div class="input-field">
                        <?php echo Form::label('title','Titulo'); ?>

                        <?php echo Form::text('title',  null, ['class'=> 'validate', 'placeholder'=>'', 'required']  ); ?>

                        </div>
                        <div class="input-field">
                        <?php echo Form::label('title','Categoria'); ?><br><br>
                        <select name="category_id">
                            <option value="" disabled selected>Elige una Categoria</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <!--<?php echo Form::select('category_id', $categories, null,['placeholder'=>'Elije']); ?>-->
                        </div>
                        <?php echo Form::textarea('content',null,['id'=> 'textarea1', 'class'=> 'materialize-textarea textarea-content', 'placeholder'=>'Contenido']); ?>

                        <div class="input-field">
                        <?php echo Form::label('tags','Tags'); ?><br><br>
                        <select name="tag_id" multiple>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tag->id); ?>"> <?php echo e($tag->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <!--<?php echo Form::select('tags[]',$tags,null,['id'=>'tags','placeholder'=>'Elige los tags','multiple']); ?>-->
                        </div>
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons">add_a_photo</i></span>
                                <input name="image" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="divider"></div>
                        <br>
                        <?php echo Form::submit('Crear Artículo', ['class'=>'btn blue '] ); ?>

                    <?php echo Form::close(); ?>

                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>