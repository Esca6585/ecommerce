<!DOCTYPE html>
<html lang="<?php echo e(app()->getlocale()); ?>">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="<?php echo e(asset('metronic-template/v8/assets/media/logos/sumbar-market-logo-2-2.png')); ?>" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <?php echo $__env->yieldContent('style'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('metronic-template/v7/assets/css/alert.css')); ?>">

    <style>
        .brand {
            background-color: #fff;
        }
    </style>

</head>
<!--end::Head-->
<!--begin::Body-->
<?php echo $__env->yieldContent('body'); ?>
<!--end::Body-->

<?php echo $__env->make('layouts.scroll-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<?php /**PATH /home/ubuntu/Documents/domains/sumbar-market/resources/views/layouts/admin-template-app.blade.php ENDPATH**/ ?>