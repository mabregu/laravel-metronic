
<?php if(config('layout.content.extended')): ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php else: ?>
    <div class="d-flex flex-column-fluid">
        <div class="<?php echo e(Metronic::printClasses('content-container', false)); ?>">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\skeleton\resources\views/layout/base/_content.blade.php ENDPATH**/ ?>