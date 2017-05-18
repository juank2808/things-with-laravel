<!DOCTYPE html>
<html>
    <head>
    </head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(('/css/app.css')); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo e(('/css/style.css')); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo e(('/chosen-js/chosen.css')); ?>" type="text/css" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="<?php echo e(('/js/app.js')); ?>"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=4f4ypv5k01cp78grrb9t801hxlf75maskw87hugf44hg3aw8"></script>
        <script>tinymce.init({
                              selector: 'textarea',  // change this value according to your HTML
                            });
</script>
        <script type="text/javascript" src="<?php echo e(('/js/myscript.js')); ?>"></script>
        
        <?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="section">
            <!--<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
        <br>
        <footer>
        <?php echo $__env->make('admin.template.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>
    </body>
</html>