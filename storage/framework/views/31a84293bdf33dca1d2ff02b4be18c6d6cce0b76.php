<?php if(config('layout.self.layout') == 'blank'): ?>
    <div class="d-flex flex-column flex-root">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php else: ?>

    <?php echo $__env->make('layout.base._header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

            <?php if(config('layout.aside.self.display')): ?>
                <?php echo $__env->make('layout.base._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <?php echo $__env->make('layout.base._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="content <?php echo e(Metronic::printClasses('content', false)); ?> d-flex flex-column flex-column-fluid" id="kt_content">

                    <?php if(config('layout.subheader.display')): ?>
                        <?php if(array_key_exists(config('layout.subheader.layout'), config('layout.subheader.layouts'))): ?>
                            <?php echo $__env->make('layout.partials.subheader._'.config('layout.subheader.layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <?php echo $__env->make('layout.partials.subheader._'.array_key_first(config('layout.subheader.layouts')), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php echo $__env->make('layout.base._content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php echo $__env->make('layout.base._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php if(config('layout.self.layout') != 'blank'): ?>

    <?php if(config('layout.extras.search.layout') == 'offcanvas'): ?>
        <?php echo $__env->make('layout.partials.extras.offcanvas._quick-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.notifications.layout') == 'offcanvas'): ?>
        <?php echo $__env->make('layout.partials.extras.offcanvas._quick-notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.quick-actions.layout') == 'offcanvas'): ?>
        <?php echo $__env->make('layout.partials.extras.offcanvas._quick-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.user.layout') == 'offcanvas'): ?>
        <?php echo $__env->make('layout.partials.extras.offcanvas._quick-user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.quick-panel.display')): ?>
        <?php echo $__env->make('layout.partials.extras.offcanvas._quick-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.toolbar.display')): ?>
        <?php echo $__env->make('layout.partials.extras._toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(config('layout.extras.chat.display')): ?>
        <?php echo $__env->make('layout.partials.extras._chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->make('layout.partials.extras._scrolltop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH C:\wamp64\www\keenthemes\themes\metronic\theme\html_laravel\demo1\skeleton\resources\views/layout/base/_layout.blade.php ENDPATH**/ ?>