



<?php $__env->startSection('content'); ?>

    

    <div class="row">
        <div class="col-lg-6 col-xxl-4">
            <?php echo $__env->make('pages.widgets._widget-1', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4">
            <?php echo $__env->make('pages.widgets._widget-2', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4">
            <?php echo $__env->make('pages.widgets._widget-3', ['class' => 'card-stretch card-stretch-half gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('pages.widgets._widget-4', ['class' => 'card-stretch card-stretch-half gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
            <?php echo $__env->make('pages.widgets._widget-5', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-xxl-8 order-2 order-xxl-1">
            <?php echo $__env->make('pages.widgets._widget-6', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-7', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-8', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-9', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\keenthemes\themes\metronic\theme\html_laravel\demo1\skeleton\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>