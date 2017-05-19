<?php $__env->startSection('title', $article->title); ?>
<?php $__env->startSection('content'); ?>
    <div class="parallax-container">
         <h1 class="blue-text center titulo-articulo"><?php echo e($article->title); ?></h1>
        <?php if(($image->article_id) == ($article->id)): ?>
      <div class="parallax"><img src="/images/articles/<?php echo e($image->name); ?>"></div>
        <?php endif; ?>
    </div>
    <div class="section">
       <div class="row">
        <div class="col s12 m7 l9">
            <h2><?php echo e($article->title); ?></h2>
            <div class="divider"></div>
            <p><?php echo $article->content; ?></p>
        </div>
        
        <div class="col s12 m5 l3">
            <?php echo $__env->make('partials.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col s12 m7 l9">
            <h5>Comentarios:</h5>
            <?php echo $__env->make('admin.template.partials.coment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
 
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>