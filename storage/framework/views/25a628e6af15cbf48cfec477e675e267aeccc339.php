<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 07:49:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anandadhara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.html">

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/xsIcon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/isotope.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/plugins.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>" />
    <link rel='stylesheet alternate' title='color-1' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-1.css')); ?>">
    <link rel='stylesheet alternate' title='color-2' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-2.css')); ?>">
    <link rel='stylesheet alternate' title='color-3' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-3.css')); ?>">
    <link rel='stylesheet alternate' title='color-4' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-4.css')); ?>">
    <link rel='stylesheet alternate' title='color-5' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-5.css')); ?>">
    <link rel='stylesheet alternate' title='color-6' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-6.css')); ?>">
    <link rel='stylesheet alternate' title='color-7' type='text/css'
        href="<?php echo e(asset('frontend/assets/css/colors/color-7.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>

    

    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    
    <script src="<?php echo e(asset('frontend/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/spectragram.min.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
    <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(session('status')): ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "<?php echo e(session('status')); ?> ",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php endif; ?>
    <script>
        $(function() {
            $(".img-w").each(function() {
                $(this).wrap("<div class='img-c'></div>")
                let imgSrc = $(this).find("img").attr("src");
                $(this).css('background-image', 'url(' + imgSrc + ')');
            })


            $(".img-c").click(function() {
                let w = $(this).outerWidth()
                let h = $(this).outerHeight()
                let x = $(this).offset().left
                let y = $(this).offset().top


                $(".active").not($(this)).remove()
                let copy = $(this).clone();
                copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
                $(".active").css('top', y - 8);
                $(".active").css('left', x - 8);

                setTimeout(function() {
                    copy.addClass("positioned")
                }, 0)

            })




        })

        $(document).on("click", ".img-c.active", function() {
            let copy = $(this)
            copy.removeClass("positioned active").addClass("postactive")
            setTimeout(function() {
                copy.remove();
            }, 500)
        })
    </script>
</body>

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 07:49:19 GMT -->

</html>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>