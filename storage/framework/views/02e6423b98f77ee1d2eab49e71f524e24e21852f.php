<link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet">
<?php $__env->startSection('content'); ?>
    <div class="d-flex">
        <h1><?php echo e(Auth::user()->name); ?></h1>
        <a class="ml-auto" href="<?php echo e(route('recipe.create')); ?>">
            <button class="btn btn-success">Create Recipe</button>
        </a>
    </div>


    <div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4 ">
            <a href="<?php echo e(route('recipe.show', $recipe)); ?>">
                <div class="card mb-4 shadow-sm">
                    <div class="card-title alert-secondary text-center px-2">
                        <h4 class="mt-2"><?php echo e($recipe->title); ?></h4>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary" value="<?php echo e($recipe->id); ?>">Like <?php echo e($recipe->likes); ?></button>
                            </div>
                            <small class="text-muted"><?php echo e($recipe->user->name); ?></small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>
            <h1>Haven`t recipes</h1>
        </div>
    <?php endif; ?>
    </div>
    <div class="d-flex justify-content-center">
        <?php echo e($recipes->links()); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\lessons\homework\laravel\resources\views/recipe/recipes.blade.php ENDPATH**/ ?>