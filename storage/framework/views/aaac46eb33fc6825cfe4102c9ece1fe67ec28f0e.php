 <header>
     <div id="header-sticky" class="main-header">
         <div class="container-fluid header-container-p">
             <div class="row align-items-center">
                 <div class="col-lg-3 col-md-6">
                     <div class="logo">
                         <a href="<?php echo e(route('frontend.index')); ?>"><img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>"
                                 style="height: 108px" class="mobile-logo" alt="Logo"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-6 d-none d-md-block">
                     <div class="menu-area">
                         <div class="main-menu">
                             <div class="mean-push"></div>
                             <nav id="mobile-menu" style="display: none;">
                                 <ul>
                                     <?php
                                         $headers = DB::table('pages')
                                             ->where('is_active', 1)
                                             ->get();
                                     ?>
                                     <li class="active"><a href="<?php echo e(route('frontend.index')); ?>">Home</a></li>

                                     
                                     


                                     <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <li>
                                             <a href="/page/<?php echo e($header->slug); ?>"><?php echo e($header->title); ?></a>
                                         </li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <?php if(auth()->guard()->check()): ?>
                                         <?php if($logged_in_user->isAdmin()): ?>
                                             <li>
                                                 <a href="<?php echo e(route('admin.dashboard')); ?>">
                                                     <?php echo e($logged_in_user->name); ?> </a>
                                             </li>
                                         <?php endif; ?>

                                         <?php if($logged_in_user->isUser()): ?>
                                             <li>
                                                 <a href="<?php echo e(route('frontend.user.dashboard')); ?>">
                                                     <?php echo e($logged_in_user->name); ?> </a>
                                             </li>
                                         <?php endif; ?>
                                     <?php else: ?>
                                         <?php if(config('boilerplate.access.user.registration')): ?>
                                             <li>
                                                 <a href="<?php echo e(route('frontend.auth.login')); ?>">Login</a>
                                             </li>
                                             <li><a href="<?php echo e(route('frontend.auth.register')); ?>">Register</a></li>
                                         <?php endif; ?>
                                     <?php endif; ?>
                                     </li>
                                     <li><a href="#">Support</a></li>
                                 </ul>
                             </nav>
                         </div>
                         <div class="header-btn">
                             <?php if(auth()->guard()->check()): ?>
                                 <?php if($logged_in_user->isAdmin()): ?>
                                     <li>
                                         <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn">
                                             <?php echo e($logged_in_user->name); ?> </a>
                                     </li>
                                 <?php endif; ?>

                                 <?php if($logged_in_user->isUser()): ?>
                                     <li>
                                         <a href="<?php echo e(route('frontend.user.dashboard')); ?>" class="btn">
                                             <?php echo e($logged_in_user->name); ?> </a>
                                     </li>
                                 <?php endif; ?>
                             <?php else: ?>
                                 <?php if(config('boilerplate.access.user.registration')): ?>
                                     <li>
                                         <a href="<?php echo e(route('frontend.auth.login')); ?>" class="btn">Login/Register</a>
                                     </li>
                                 <?php endif; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </header>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/header.blade.php ENDPATH**/ ?>