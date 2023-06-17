<?php if($showSearch): ?>
    <div class="mb-3 mb-md-0 input-group">
        <input
            wire:model<?php echo e($this->searchFilterOptions); ?>="filters.search"
            placeholder="<?php echo e(__('Search')); ?>"
            type="text"
            class="form-control"
        >

        <?php if(isset($filters['search']) && strlen($filters['search'])): ?>
            <div class="input-group-append">
                <button wire:click="$set('filters.search', null)" class="btn btn-outline-secondary" type="button">
                    <svg style="width:.75em;height:.75em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/search.blade.php ENDPATH**/ ?>