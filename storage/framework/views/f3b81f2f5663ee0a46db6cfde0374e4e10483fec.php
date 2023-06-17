<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('frontend.index')); ?>" class="nav-link" target="_blank">Frontend</a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">-->
        <!--  <a href="<?php echo e(route('admin.messaging.contact.index')); ?>" class="nav-link">Contacts</a>-->
        <!--</li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="far fa-comments"></i>-->
        <!--    <span class="badge badge-danger navbar-badge">3</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--      <div class="media">-->
        <!-- <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" /> -->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            Brad Diesel-->
        <!--            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">Call me whenever you can...</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--      <div class="media">-->
        <!-- <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" /> -->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            John Pierce-->
        <!--            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">I got your message bro</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--<a href="#" class="dropdown-item">-->
        <!-- Message Start -->
        <!--  <div class="media">-->
        <!-- <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" /> -->
        <!--    <div class="media-body">-->
        <!--      <h3 class="dropdown-item-title">-->
        <!--        Nora Silvester-->
        <!--        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
        <!--      </h3>-->
        <!--      <p class="text-sm">The subject goes here</p>-->
        <!--      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!-- Message End -->
        <!--</a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="<?php echo e(route('admin.messaging.contact.index')); ?>" class="dropdown-item dropdown-footer">See All Messages</a>-->
        <!--  </div>-->
        <!--</li>-->
        <!-- Notifications Dropdown Menu -->
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="far fa-bell"></i>-->
        <!--    <span class="badge badge-warning navbar-badge">15</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <span class="dropdown-item dropdown-header">15 Notifications</span>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-envelope mr-2"></i> 4 new messages-->
        <!--      <span class="float-right text-muted text-sm">3 mins</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-users mr-2"></i> 8 friend requests-->
        <!--      <span class="float-right text-muted text-sm">12 hours</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-file mr-2"></i> 3 new reports-->
        <!--      <span class="float-right text-muted text-sm">2 days</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
        <!--  </div>-->
        <!--</li>-->
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link" data-widget="fullscreen" href="#" role="button">-->
        <!--    <i class="fas fa-expand-arrows-alt"></i>-->
        <!--  </a>-->
        <!--</li>-->
        <li class="nav-item dropdown">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => '#','id' => 'navbarDropdown','class' => 'nav-link dropdown-toggle','role' => 'button','dataToggle' => 'dropdown','ariaHaspopup' => 'true','ariaExpanded' => 'false','vPre' => true]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','id' => 'navbarDropdown','class' => 'nav-link dropdown-toggle','role' => 'button','data-toggle' => 'dropdown','aria-haspopup' => 'true','aria-expanded' => 'false','v-pre' => true]); ?>
                 <?php $__env->slot('text', null, []); ?> 
                    <img class="rounded-circle" style="max-height: 20px" src="<?php echo e($logged_in_user->avatar); ?>" />
                    <?php echo e($logged_in_user->name); ?> <span class="caret"></span>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <?php if($logged_in_user->isAdmin()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.dashboard'),'text' => __('Administration'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Administration')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if($logged_in_user->isUser()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.user.dashboard'),'active' => activeClass(Route::is('frontend.user.dashboard')),'text' => __('Dashboard'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.user.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.user.dashboard'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.user.account'),'active' => activeClass(Route::is('frontend.user.account')),'text' => __('My Account'),'class' => 'dropdown-item']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.user.account')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('frontend.user.account'))),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('My Account')),'class' => 'dropdown-item']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __('Logout'),'class' => 'dropdown-item','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Logout')),'class' => 'dropdown-item','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']); ?>
                     <?php $__env->slot('text', null, []); ?> 
                        <?php echo app('translator')->get('Logout'); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.logout'),'id' => 'logout-form','class' => 'd-none']]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.logout')),'id' => 'logout-form','class' => 'd-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<?php /**PATH D:\php7 laravel\Anandadhara\resources\views/backend/includes/header.blade.php ENDPATH**/ ?>