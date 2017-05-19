<?php $__env->startSection('title'); ?>
Bienvenido
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        
        <div class="col l9">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col s12 m4 l5">
                <div class="card small">
                    <div class="card-image">
                        <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('/view/article',$article->id)); ?>"><img src="/images/articles/<?php echo e($image->name); ?>"></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('/view/article',$article->id)); ?>"class="card-title black-text"><?php echo e($article->title); ?></a>
                    </div>
                    <div class="card-content">
                        <a class="left"><?php echo e($article->user->name); ?></a><a href="<?php echo e(url('/search/category', $article->category->name)); ?>" class="right"><?php echo e($article->category->name); ?></a>
                        <br><a class="right black-text"><?php echo e($article->created_at->difFForHumans()); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col s12 m5 l3 ">
            <?php echo $__env->make('partials.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>