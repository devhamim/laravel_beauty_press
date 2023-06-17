<?php $attributes = $attributes->exceptProps(['active' => '', 'text' => '', 'hide' => false, 'icon' => false,  'rightIcon' => false, 'permission' => false]); ?>
<?php foreach (array_filter((['active' => '', 'text' => '', 'hide' => false, 'icon' => false,  'rightIcon' => false, 'permission' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($permission): ?>
    <?php if($logged_in_user->can($permission)): ?>
        <?php if(!$hide): ?>
            <a <?php echo e($attributes->merge(['href' => '#', 'class' => $active])); ?>>
              <?php if($icon): ?><i class="<?php echo e($icon); ?>"></i> <?php endif; ?>
              <p>
                <?php echo e(strlen($text) ? $text : $slot); ?>

                <?php if($rightIcon): ?><i class="<?php echo e($rightIcon); ?>"></i> <?php endif; ?>
              </p>
            </a>
        <?php endif; ?>
    <?php endif; ?>
<?php else: ?>
    <?php if(!$hide): ?>
        <a <?php echo e($attributes->merge(['href' => '#', 'class' => $active])); ?>>
          <?php if($icon): ?><i class="<?php echo e($icon); ?>"></i> <?php endif; ?>
          <p>
            <?php echo e(strlen($text) ? $text : $slot); ?>

            <?php if($rightIcon): ?><i class="<?php echo e($rightIcon); ?>"></i> <?php endif; ?>
          </p>
        </a>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\php7 laravel\Anandadhara\resources\views/components/utils/link-sidebar.blade.php ENDPATH**/ ?>