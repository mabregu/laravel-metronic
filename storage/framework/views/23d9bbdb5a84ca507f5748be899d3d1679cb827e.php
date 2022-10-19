
<?php if(config('layout.extras.quick-actions.dropdown.style') == 'light'): ?>
    <div class="d-flex flex-column flex-center py-10 bg-dark-o-5 rounded-top bg-light">
        <h4 class="text-dark font-weight-bold">
            Quick Actions
        </h4>
        <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
    </div>
<?php else: ?>
    <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('<?php echo e(asset('media/misc/bg-1.jpg')); ?>')">
        <h4 class="text-white font-weight-bold">
            Quick Actions
        </h4>
        <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
    </div>
<?php endif; ?>


<div class="row row-paddingless">
    
    <div class="col-6">
        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            <?php echo e(Metronic::getSVG("media/svg/icons/Shopping/Euro.svg", "svg-icon-3x svg-icon-success")); ?>

            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
            <span class="d-block text-dark-50 font-size-lg">eCommerce</span>
        </a>
    </div>

    
    <div class="col-6">
        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
            <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Mail-attachment.svg", "svg-icon-3x svg-icon-success")); ?>

            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
            <span class="d-block text-dark-50 font-size-lg">Console</span>
        </a>
    </div>

    
    <div class="col-6">
        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
            <?php echo e(Metronic::getSVG("media/svg/icons/Shopping/Box2.svg", "svg-icon-3x svg-icon-success")); ?>

            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
            <span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
        </a>
    </div>

    
    <div class="col-6">
        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
            <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Group.svg", "svg-icon-3x svg-icon-success")); ?>

            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
            <span class="d-block text-dark-50 font-size-lg">Latest cases</span>
        </a>
    </div>
</div>
<?php /**PATH C:\wamp64\www\keenthemes\themes\metronic\theme\html_laravel\demo1\skeleton\resources\views/layout/partials/extras/dropdown/_quick-actions.blade.php ENDPATH**/ ?>