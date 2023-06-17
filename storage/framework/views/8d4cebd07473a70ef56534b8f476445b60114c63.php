<?php if($offlineIndicator): ?>
    <div wire:offline.class.remove="d-none" class="d-none">
        <div class="alert alert-danger d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <span class="d-inline-block ml-2"><?php echo app('translator')->get('You are not connected to the internet.'); ?></span>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/bootstrap-4/includes/offline.blade.php ENDPATH**/ ?>