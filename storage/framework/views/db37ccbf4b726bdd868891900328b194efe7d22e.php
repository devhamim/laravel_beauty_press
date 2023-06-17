<!doctype html>

<html lang="<?php echo e(htmlLang()); ?>" <?php if (\Illuminate\Support\Facades\Blade::check('langrtl')): ?> dir="rtl" <?php endif; ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(app_name()); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', app_name()); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'Anthony Rappa'); ?>">
    <?php echo $__env->yieldContent('meta'); ?>
    <link href="<?php echo e(asset('icon_img/assets/icons/flaticon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('icon_img/assets/icons/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('icon_img/assets/icons/linearicons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('icon_img/assets/icons/simple-line-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('icon_img/assets/icons/themify-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('icon_img/assets/icons/fontAwesome/css/all.css')); ?>" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset(get_setting('favicon'))); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset(get_setting('favicon'))); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset(get_setting('favicon'))); ?>">
    <link rel="manifest" href="<?php echo e(asset(get_setting('favicon'))); ?>">

    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link href="<?php echo e(mix('css/backend.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('after-styles'); ?>
</head>


<body class="hold-transition sidebar-mini text-sm">
    <div class="wrapper">
        
        <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper">
            <?php echo $__env->make('includes.partials.read-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('includes.partials.logged-in-as', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <section class="content-header">
                <?php echo $__env->make('includes.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.includes.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <section class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </section> <!-- section -->
        </div> <!-- content -->

        
    </div>

    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/backend.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('after-scripts'); ?>
</body>

</html><?php /**PATH /home/anandadhara/public_html/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>