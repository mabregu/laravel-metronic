

<div class="subheader py-2 <?php echo e(Metronic::printClasses('subheader', false)); ?>" id="kt_subheader">
    <div class="<?php echo e(Metronic::printClasses('subheader-container', false)); ?> d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

		
        <div class="d-flex align-items-center flex-wrap mr-1">

			
            <h5 class="text-dark font-weight-bold my-2 mr-5">
                <?php echo e(@$page_title); ?>


                <?php if(isset($page_description) && config('layout.subheader.displayDesc')): ?>
                    <small><?php echo e(@$page_description); ?></small>
                <?php endif; ?>
            </h5>

            <?php if(!empty($page_breadcrumbs)): ?>
				
                <div class="subheader-separator subheader-separator-ver my-2 mr-4 d-none"></div>

				
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2">
                    <li class="breadcrumb-item"><a href="#"><i class="flaticon2-shelter text-muted icon-1x"></i></a></li>
                    <?php $__currentLoopData = $page_breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="breadcrumb-item">
                        	<a href="<?php echo e(url($item['page'])); ?>" class="text-muted">
                            	<?php echo e($item['title']); ?>

                        	</a>
						</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>

		
        <div class="d-flex align-items-center">

            <?php if (! empty(trim($__env->yieldContent('page_toolbar')))): ?>
                <?php $__env->startSection('page_toolbar'); ?>
            <?php endif; ?>

            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(Metronic::getSVG("media/svg/icons/Files/File-plus.svg", "svg-icon-success svg-icon-2x")); ?>

                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    
                    <ul class="navi navi-hover">
                        <li class="navi-header font-weight-bold">
                            Jump to:
                            <i class="flaticon2-information" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                        </li>
                        <li class="navi-separator mb-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                <span class="navi-text">Recent Orders</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
                                <span class="navi-text">Support Cases</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-telegram-logo"></i></span>
                                <span class="navi-text">Projects</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-new-email"></i></span>
                                <span class="navi-text">Messages</span>
                                <span class="navi-label">
                                    <span class="label label-success label-rounded">5</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-separator mt-3"></li>
                        <li class="navi-footer">
                            <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">Upgrade plan</a>
                            <a class="btn btn-clean font-weight-bold btn-sm" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\wamp64\www\keenthemes\themes\metronic\theme\html_laravel\demo1\skeleton\resources\views/layout/partials/subheader/_subheader-v1.blade.php ENDPATH**/ ?>