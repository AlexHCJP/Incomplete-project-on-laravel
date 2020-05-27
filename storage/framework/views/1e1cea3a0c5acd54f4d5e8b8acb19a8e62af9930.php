<?php $update = isset($recipe);
?>


<?php $__env->startSection('content'); ?>
    <form class="my-3" action="<?php echo e($update ? route('recipe.update', $recipe) : route('recipe.store')); ?>" method="post">
        <?php if($update): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input id="title" name="title" class="form-control" placeholder="Title" autocomplete="off" value="<?php echo e($recipe->title ?? ( old('title') ?? '')); ?>">
        </div>
        <div class="form-group">
            <input id="text" name="text" class="form-control" placeholder="Recipe" autocomplete="off" value="<?php echo e($recipe->text ?? ( old('text') ?? '')); ?>">
        </div>
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger d-flex">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <button class="btn btn-success"><?php echo e($update ? 'Update' : 'Create'); ?></button>
        <a href="<?php echo e(URL::previous()); ?>">
            <button class="btn btn-danger">Back</button>
        </a>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\lessons\homework\laravel\resources\views/recipe/form.blade.php ENDPATH**/ ?>