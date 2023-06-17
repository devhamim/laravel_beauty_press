<?php if($showFilterDropdown && ($filtersView || count($customFilters))): ?>
    <div
        x-cloak
        x-data="{ open: false }"
        x-on:keydown.escape.stop="open = false"
        x-on:mousedown.away="open = false"
        class="btn-group d-block d-md-inline"
    >
        <button
            x-on:click="open = !open"
            type="button"
            class="btn dropdown-toggle d-block w-100 d-md-inline"
        >
            <?php echo app('translator')->get('Filters'); ?>

            <?php if(count($this->getFiltersWithoutSearch())): ?>
                <span class="badge badge-info">
                   <?php echo e(count($this->getFiltersWithoutSearch())); ?>

                </span>
            <?php endif; ?>

            <span class="caret"></span>
        </button>
        <ul
            class="dropdown-menu w-100 mt-md-3"
            x-bind:class="{'show' : open}"
            role="menu"
        >
            <li>
                <?php if($filtersView): ?>
                    <?php echo $__env->make($filtersView, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif(count($customFilters)): ?>
                    <?php $__currentLoopData = $customFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div wire:key="filter-<?php echo e($key); ?>" class="p-2">
                            <label for="filter-<?php echo e($key); ?>" class="mb-2">
                                <?php echo e($filter->name()); ?>

                            </label>

                            <?php if($filter->isSelect()): ?>
                                <?php echo $__env->make('livewire-tables::bootstrap-4.includes.filter-type-select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($filter->isMultiSelect()): ?>
                                <?php echo $__env->make('livewire-tables::bootstrap-4.includes.filter-type-multiselect', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($filter->isDate()): ?>
                                <?php echo $__env->make('livewire-tables::bootstrap-4.includes.filter-type-date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($filter->isDatetime()): ?>
                                <?php echo $__env->make('livewire-tables::bootstrap-4.includes.filter-type-datetime', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if(count($this->getFiltersWithoutSearch())): ?>
                    <div class="dropdown-divider"></div>

                    <button
                        wire:click.prevent="resetFilters"
                        x-on:click="open = false"
                        class="dropdown-item btn text-center"
                    >
                        <?php echo app('translator')->get('Clear'); ?>
                    </button>
                <?php endif; ?>
            </li>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/filters.blade.php ENDPATH**/ ?>