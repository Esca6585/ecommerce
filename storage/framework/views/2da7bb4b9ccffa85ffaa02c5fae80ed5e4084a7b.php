<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<!--begin::Head-->
	<head>
        <title><?php echo e(config('app.name')); ?> <?php echo $__env->yieldContent('title'); ?></title>
		
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="shortcut icon" href="<?php echo e(asset('metronic-template/v8/assets/media/logos/favicon.ico')); ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo e(asset('metronic-template/v8/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('metronic-template/v8/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<link rel="stylesheet" href="<?php echo e(asset('metronic-template/v7/assets/css/admin-pagination.css')); ?>">

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<body>
            <div id="app">
                <main>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
    </body>
	<!--end::Body-->
    
    
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo e(asset('metronic-template/v8/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('metronic-template/v8/assets/js/scripts.bundle.js')); ?>"></script>
    <!--end::Global Javascript Bundle-->
    
	<!--begin::jQuery-->
	<script src="<?php echo e(asset('/metronic-template/v7/assets/js/ajax/jquery-3.6.0.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/metronic-template/v7/assets/js/ajax/changeLanguage.js')); ?>"></script>
    <!--begin::jQuery-->

	<script src="<?php echo e(asset('metronic-template/v7/assets/js/ajax/getdata.js')); ?>"></script>

</html>

<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/layouts/app.blade.php ENDPATH**/ ?>