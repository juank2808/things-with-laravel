<?php $__env->startSection('title', 'Artículos'); ?>
<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="section">
    <a href="<?php echo e(url('admin/articles/create')); ?>"class="right waves-effect waves-lights btn-large btn-floating blue "><i class="material-icons">add</i></a>
    <div class="row col s5">
        <ul class="collection col s5">
            <li class="collection-item">
           
            <?php echo Form::open(['route'=>'articles.index', 'method'=>'GET']); ?>

                <div class="input-field">
                    <?php echo Form::text('title', null,['id'=>'search', 'type'=>'search', 'placeholder'=>'Buscar', 'class'=>'autocomplete']); ?>

                    <?php echo Form::label('','',['class'=>'label-icon', 'for'=>'search'] ); ?>

                
                    
                </div>
            <?php echo Form::close(); ?>

            </li>
        </ul>
    </div>
        <h1 class="center">Artículos</h1>
        
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
        <div class="col s12 m7 l6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title orange-text"><?php echo e($article->title); ?></span>
                <p>Categoria:  <?php echo e($article->category->name); ?></p>
                <p>Usuario:  <?php echo e($article->user->name); ?></p>
            </div>
            <div class="card-action">
                <a href="<?php echo e(route('admin.articles.destroy', $article->id)); ?>"class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></a>
                <a href="<?php echo e(route('admin.articles.edit', $article->id)); ?>"class="left btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">mode_edit</i></a>
            </div>
          </div>
        </div>
      </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>