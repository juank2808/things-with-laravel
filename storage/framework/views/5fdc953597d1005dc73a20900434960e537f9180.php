<?php $__env->startSection('title'); ?>
Blog-Learning
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="parallax-container">
            <h1 class="blue-text center blog">Learning blog</h1>
        
        <div class="parallax">
            <img class="" src="http://g1.pcworld.pl/news/thumb/2/9/296593">
        </div>
    </div>
    <div class="section  blue-grey darken-4">
        <div class="row">
            <div class="col l9">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col s12 m6 l5">
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
            <div class="col s12 m6 l3  blue-grey darken-4">
                <?php echo $__env->make('partials.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div id="up" class="fixed-action-btn ">
            <a class="btn-floating btn white right pulse">
                <i class="material-icons black-text">keyboard_arrow_up</i>
            </a>
        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>