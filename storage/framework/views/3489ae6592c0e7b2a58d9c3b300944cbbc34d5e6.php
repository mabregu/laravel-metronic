<?php $__env->startSection('content'); ?>

    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Typeahead Examples
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Demo</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="typeahead">
                            <input class="form-control" id="kt_typeahead_1" type="text" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" placeholder="States of USA"/>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Bloodhound (Suggestion Engine)</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="typeahead">
                            <input class="form-control" id="kt_typeahead_2" type="text" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" placeholder="States of USA"/>
                        </div>
                        <div class="form-text text-muted">
                            Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Prefetch</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="typeahead">
                            <input class="form-control" id="kt_typeahead_3" type="text" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" placeholder="Countries"/>
                        </div>
                        <div class="form-text text-muted">Prefetched data is fetched and processed on initialization</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Templates</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="typeahead">
                            <input class="form-control" id="kt_typeahead_4" type="text" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" placeholder="Oscar winners"/>
                        </div>
                        <div class="form-text text-muted">Custom templates give you full control over how suggestions get rendered</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Multiple Datasets</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="typeahead">
                            <input class="form-control" id="kt_typeahead_5" type="text" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" placeholder="Select an option"/>
                        </div>
                        <div class="form-text text-muted">Remote data is only used when the data provided by local and prefetch is insufficient</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <a href="" class="btn btn-light-primary font-weight-bold btn-sm" data-toggle="modal" data-target="#kt_typeahead_modal">Launch modal typeaheads</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="reset" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->

    <!--begin::Modal-->
    <div class="modal fade" id="kt_typeahead_modal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Typeahead Examples</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Demo</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="typeahead">
                                    <input class="form-control" id="kt_typeahead_1_modal" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" type="text" placeholder="States of USA"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Bloodhound</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="typeahead">
                                    <input class="form-control" id="kt_typeahead_2_modal" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" type="text" placeholder="States of USA"/>
                                </div>
                                <div class="form-text text-muted">
                                    Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Prefetch</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="typeahead">
                                    <input class="form-control" id="kt_typeahead_3_modal" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" type="text" placeholder="Countries"/>
                                </div>
                                <div class="form-text text-muted">Prefetched data is fetched and processed on initialization</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Card-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">
                Validation State Examples
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>

                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Success State</label>
                    <div class="col-lg-4 col-md-9 col-sm-12 is-valid">
                        <div class="typeahead">
                            <input class="form-control is-valid" id="kt_typeahead_1_validate" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" type="text" placeholder="States of USA"/>
                        </div>
                        <div class="valid-feedback">Success! You've done it.</div>
                        <span class="form-text text-muted">Example help text that remains unchanged.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Error State</label>
                    <div class="col-lg-4 col-md-9 col-sm-12 is-invalid">
                        <div class="typeahead">
                            <input class="form-control is-invalid" id="kt_typeahead_2_validate" dir="<?php echo isset($_REQUEST['rtl']) && $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?>" type="text" placeholder="States of USA"/>
                        </div>
                        <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                        <span class="form-text text-muted">Example help text that remains unchanged.</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="reset" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/pages/crud/forms/validation/form-widgets.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\keenthemes\themes\metronic\theme\html_laravel\demo1\skeleton\resources\views/pages/typeahead.blade.php ENDPATH**/ ?>