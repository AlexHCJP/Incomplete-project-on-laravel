<?php $__env->startSection('content'); ?>
    <div class="form-group">

        <h1><?php echo e($recipe->title); ?></h1>
        <?php if(auth()->user()->id == $recipe->user_id): ?>
            <div class="d-flex flex-row ">
                <a href="<?php echo e(route('recipe.edit', $recipe)); ?>">
                    <button class="ml-auto btn btn-success mr-1">Update</button>
                </a>
                <form action="<?php echo e(route('recipe.show', $recipe)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\lessons\homework\laravel\resources\views/recipe/show.blade.php ENDPATH**/ ?>