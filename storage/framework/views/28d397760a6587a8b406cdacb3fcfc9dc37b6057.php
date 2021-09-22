

<?php $__env->startSection('title'); ?>
    <?php echo e(__('404')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--begin::Body-->
<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Error 404 -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?php echo e(asset('metronic-template/v8/assets/media/illustrations/development-hd.png')); ?>)">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-20">
                <!--begin::Logo-->
                <a href="../../demo1/dist/index.html" class="mb-10 pt-lg-20">
                    <img alt="Logo" src="<?php echo e(asset('metronic-template/v8/assets/media/logos/logo-2-dark.svg')); ?>" class="h-50px mb-5" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="pt-lg-10">
                    <!--begin::Logo-->
                    <h1 class="fw-bolder fs-4x text-gray-800 mb-10"><?php echo e(__('Page Not Found')); ?></h1>
                    <!--end::Logo-->
                    <!--begin::Message-->
                    <div class="fw-bold fs-3 text-muted mb-15">The page you looked not found!
                    <br />Plan your blog post by choosing a topic</div>
                    <!--end::Message-->
                    <!--begin::Action-->
                    <div class="text-center">
                        <a href="<?php echo e(url('/')); ?>" class="btn btn-lg btn-primary fw-bolder"><?php echo e(__('Go to homepage')); ?></a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-16">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<select class="form-select" id="changeLanguage">
							<?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($lang); ?>" <?php echo e(Request::segment(1) == $lang ? 'selected' : ''); ?>><?php echo e($language['name']); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<!--end::Links-->
				</div>
				<div style="padding-top: 255px"></div>
				<!--end::Footer-->
        </div>
        <!--end::Authentication - Error 404-->
    </div>
    <!--end::Main-->
</body>
<!--end::Body-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/errors/404.blade.php ENDPATH**/ ?>