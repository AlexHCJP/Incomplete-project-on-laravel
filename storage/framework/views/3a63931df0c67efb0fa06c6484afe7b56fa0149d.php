<?php $__env->startSection('content'); ?>
    <h1><?php echo e(Auth::user()->name); ?></h1>

    <form class="my-3" action="<?php echo e(route('create')); ?>">
        <div class="form-group">
            <input id="title" name="title" class="form-control" placeholder="Title" autocomplete="off" >
        </div>
        <div class="form-group">
            <input id="text" name="text" class="form-control" placeholder="Recipe" autocomplete="off">
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
        <button class="btn btn-success">Create Recipe</button>
    </form>

    <div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-title alert-secondary text-center">
                    <h2 class="mt-2"><?php echo e($recipe->title); ?></h2>
                </div>

                <div class="card-body">
                    <p><?php echo e(substr($recipe->text, 0, 125)); ?></p>
                    <div class="d-flex justify-content-between">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-secondary" value="<?php echo e($recipe->id); ?>">Like <?php echo e($recipe->likes); ?></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>
            <h1>Haven`t recipes</h1>
        </div>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\lessons\homework\laravel\resources\views/recipes.blade.php ENDPATH**/ ?>