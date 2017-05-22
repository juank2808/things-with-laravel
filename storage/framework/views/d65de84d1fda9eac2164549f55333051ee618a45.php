<?php $__env->startSection('title','Tags List'); ?>
<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="section">
    <a href="<?php echo e(url('admin/tags/create')); ?>"class="right waves-effect waves-lights btn-large btn-floating blue "><i class="material-icons">add</i></a>
    <div class="row col s5">
        <ul class="collection col s5">
            <li class="collection-item">
            <!--<form>-->
            <!--    <div class="input-field">-->
            <!--      <input id="search" type="search" required>-->
            <!--      <label class="label-icon" for="search"><i class="material-icons">search</i></label>-->
            <!--      <i class="material-icons">close</i>-->
            <!--    </div>-->
            <!--</form>-->
            <?php echo Form::open(['route'=>'tags.index', 'method'=>'GET']); ?>

                <div class="input-field">
                    <?php echo Form::text('name', null,['id'=>'search', 'type'=>'search', 'placeholder'=>'Buscar', 'class'=>'autocomplete']); ?>

                    <?php echo Form::label('','',['class'=>'label-icon', 'for'=>'search'] ); ?>

                
                    
                </div>
            <?php echo Form::close(); ?>

            </li>
        </ul>
    </div>
    <h1>Tags</h1>
    
    <ul class="collapsible popout" data-collapsible="accordion">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="collapsible-header hoverable">
                <?php echo e($tag->name); ?>

                <a class="waves-effect waves-light btn-floating red right" href="<?php echo e(route ('admin.tags.destroy', $tag->id)); ?>"><i class="small material-icons ">delete</i></a>
                <a class="waves-effect waves-red btn-floating blue right" href="<?php echo e(route('admin.tags.edit', $tag->id)); ?>"><i class="small material-icons ">mode_edit</i></a>
            </div>
            
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>