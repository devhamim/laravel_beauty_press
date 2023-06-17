<?php if($columnSelect): ?>
    <div class="mb-3 mb-md-0 pl-0 pl-md-2">
        <div
            x-data="{ open: false }"
            x-on:keydown.escape.stop="open = false"
            x-on:mousedown.away="open = false"
            class="dropdown d-block d-md-inline"
        >
            <button
                x-on:click="open = !open"
                class="btn dropdown-toggle d-block w-100 d-md-inline"
                type="button"
                aria-haspopup="true"
                x-bind:aria-expanded="open"
            >
                <?php echo app('translator')->get('Columns'); ?>
            </button>

            <div
                class="dropdown-menu dropdown-menu-right w-100 mt-0 mt-md-3"
                x-bind:class="{'show' : open}"
            >
                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($column->isVisible() && $column->isSelectable()): ?>
                        <div wire:key="columnSelect-<?php echo e($loop->index); ?>">
                            <label class="px-2 <?php echo e($loop->last ? 'mb-0' : 'mb-1'); ?>">
                                <input
                                    wire:model="columnSelectEnabled"
                                    wire:target="columnSelectEnabled"
                                    wire:loading.attr="disabled"
                                    type="checkbox"
                                    value="<?php echo e($column->column()); ?>"
                                />
                                <span class="ml-2"><?php echo e($column->text()); ?></span>
                            </label>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/column-select.blade.php ENDPATH**/ ?>