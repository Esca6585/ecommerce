<!DOCTYPE html>
<html lang="<?php echo e(app()->getlocale()); ?>">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
    	<title><?php echo e(__('Admin')); ?> <?php echo $__env->yieldContent('title'); ?></title>

		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v7/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
		
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo e(asset('metronic-template/v7/assets/media/logos/favicon.ico')); ?>" />

		<style>
			.odd {
				background: var(--light);
			}

			.even {
				background: var(--white);
			}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
		<?php echo $__env->yieldContent('body'); ?>
	<!--end::Body-->
</html><?php /**PATH C:\OpenServer\domains\ecommerce\resources\views/layouts/admin-template-app.blade.php ENDPATH**/ ?>