<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.table','data' => ['wire:sortable' => ''.e($reordering ? $reorderingMethod : '').'','customSecondaryHeader' => $secondaryHeader,'useHeaderAsFooter' => $useHeaderAsFooter,'customFooter' => $customFooter,'class' => method_exists($this, 'setTableClass') ? ' ' . $this->setTableClass() : '' ]]); ?>
<?php $component->withName('livewire-tables::bs4.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:sortable' => ''.e($reordering ? $reorderingMethod : '').'','customSecondaryHeader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondaryHeader),'useHeaderAsFooter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($useHeaderAsFooter),'customFooter' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customFooter),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableClass') ? ' ' . $this->setTableClass() : '' )]); ?>
     <?php $__env->slot('head', null, []); ?> 
        <?php if($reordering): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.heading','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($bulkActionsEnabled && count($this->bulkActions)): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.heading','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <input
                    wire:model="selectPage"
                    type="checkbox"
                />
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($column->isVisible()): ?>
                <?php if($columnSelect && ! $this->isColumnSelectEnabled($column)) continue; ?>

                <?php if($column->isBlank()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.heading','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.heading','data' => ['sortingEnabled' => $sortingEnabled,'sortable' => $column->isSortable(),'column' => $column->column(),'direction' => $column->column() ? $sorts[$column->column()] ?? null : null,'text' => $column->text() ?? '','class' => $column->class() ?? '','customAttributes' => $column->attributes()]]); ?>
<?php $component->withName('livewire-tables::bs4.table.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['sortingEnabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortingEnabled),'sortable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->isSortable()),'column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->column()),'direction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->column() ? $sorts[$column->column()] ?? null : null),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->text() ?? ''),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->class() ?? ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($column->attributes())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php $__env->endSlot(); ?>

    <?php if($secondaryHeader): ?>
         <?php $__env->slot('customSecondaryHead', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.row','data' => ['wire:loading.class.delay' => 'opacity-50 dark:bg-gray-900 dark:opacity-60','class' => method_exists($this, 'setSecondaryHeaderRowClass') ? ' ' . $this->setSecondaryHeaderRowClass($rows) : '','id' => method_exists($this, 'setSecondaryHeaderRowId') ? $this->setSecondaryHeaderRowId($rows) : '','customAttributes' => method_exists($this, 'setSecondaryHeaderRowAttributes') ? $this->setSecondaryHeaderRowAttributes($rows) : []]]); ?>
<?php $component->withName('livewire-tables::bs4.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading.class.delay' => 'opacity-50 dark:bg-gray-900 dark:opacity-60','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderRowClass') ? ' ' . $this->setSecondaryHeaderRowClass($rows) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderRowId') ? $this->setSecondaryHeaderRowId($rows) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderRowAttributes') ? $this->setSecondaryHeaderRowAttributes($rows) : [])]); ?>
                <?php if($reordering): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if($bulkActionsEnabled && count($this->bulkActions)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($column->isVisible()): ?>
                        <?php if($columnSelect && ! $this->isColumnSelectEnabled($column)) continue; ?>

                        <?php if($column->hasSecondaryHeader()): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => ['class' => method_exists($this, 'setSecondaryHeaderDataClass') ? $this->setSecondaryHeaderDataClass($column, $rows) : '','id' => method_exists($this, 'setSecondaryHeaderDataId') ? $this->setSecondaryHeaderDataId($column, $rows) : '','customAttributes' => method_exists($this, 'setSecondaryHeaderDataAttributes') ? $this->setSecondaryHeaderDataAttributes($column, $rows) : []]]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderDataClass') ? $this->setSecondaryHeaderDataClass($column, $rows) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderDataId') ? $this->setSecondaryHeaderDataId($column, $rows) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setSecondaryHeaderDataAttributes') ? $this->setSecondaryHeaderDataAttributes($column, $rows) : [])]); ?>
                                <?php if($column->isHtml()): ?>
                                    <?php echo e(new \Illuminate\Support\HtmlString($column->secondaryHeaderFormatted($rows))); ?>

                                <?php else: ?>
                                    <?php echo e($column->secondaryHeaderFormatted($rows)); ?>

                                <?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>

     <?php $__env->slot('body', null, []); ?> 
        <?php
            $colspan = count($columns);
            if ($bulkActionsEnabled && count($this->bulkActions)) $colspan++;
            if ($reordering) $colspan++;
        ?>

        <?php echo $__env->make('livewire-tables::bootstrap-4.includes.bulk-select-row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__empty_1 = true; $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.row','data' => ['wire:loading.class.delay' => 'text-muted','wire:key' => 'table-row-'.e(md5(mt_rand())).'-'.e($row->{$this->parseField($primaryKey)}).'','wire:sortable.item' => ''.e($row->{$primaryKey}).'','reordering' => $reordering,'url' => method_exists($this, 'getTableRowUrl') ? $this->getTableRowUrl($row) : '','target' => method_exists($this, 'getTableRowUrlTarget') ? $this->getTableRowUrlTarget($row) : '_self','wireclick' => method_exists($this, 'getTableRowWireClick') ? $this->getTableRowWireClick($row) : '','class' => method_exists($this, 'setTableRowClass') ? ' ' . $this->setTableRowClass($row) : '','id' => method_exists($this, 'setTableRowId') ? $this->setTableRowId($row) : '','customAttributes' => method_exists($this, 'setTableRowAttributes') ? $this->setTableRowAttributes($row) : []]]); ?>
<?php $component->withName('livewire-tables::bs4.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading.class.delay' => 'text-muted','wire:key' => 'table-row-'.e(md5(mt_rand())).'-'.e($row->{$this->parseField($primaryKey)}).'','wire:sortable.item' => ''.e($row->{$primaryKey}).'','reordering' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reordering),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'getTableRowUrl') ? $this->getTableRowUrl($row) : ''),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'getTableRowUrlTarget') ? $this->getTableRowUrlTarget($row) : '_self'),'wireclick' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'getTableRowWireClick') ? $this->getTableRowWireClick($row) : ''),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableRowClass') ? ' ' . $this->setTableRowClass($row) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableRowId') ? $this->setTableRowId($row) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableRowAttributes') ? $this->setTableRowAttributes($row) : [])]); ?>
                <?php if($reordering): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => ['wire:sortable.handle' => true]]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:sortable.handle' => true]); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-inline" style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if($bulkActionsEnabled && count($this->bulkActions)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <input
                            wire:model="selected"
                            wire:loading.attr.delay="disabled"
                            value="<?php echo e($row->{$this->parseField($primaryKey)}); ?>"
                            onclick="event.stopPropagation();return true;"
                            type="checkbox"
                        />
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php echo $__env->make($rowView, ['row' => $row], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.row','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.cell','data' => ['colspan' => $colspan]]); ?>
<?php $component->withName('livewire-tables::bs4.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['colspan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($colspan)]); ?>
                    <?php echo app('translator')->get($emptyMessage); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>

    <?php if($customFooter): ?>
         <?php $__env->slot('foot', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.row','data' => ['wire:loading.class.delay' => 'text-muted','class' => method_exists($this, 'setFooterRowClass') ? ' ' . $this->setFooterRowClass($rows) : '','id' => method_exists($this, 'setFooterRowId') ? $this->setFooterRowId($rows) : '','customAttributes' => method_exists($this, 'setFooterRowAttributes') ? $this->setFooterRowAttributes($rows) : []]]); ?>
<?php $component->withName('livewire-tables::bs4.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading.class.delay' => 'text-muted','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterRowClass') ? ' ' . $this->setFooterRowClass($rows) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterRowId') ? $this->setFooterRowId($rows) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterRowAttributes') ? $this->setFooterRowAttributes($rows) : [])]); ?>
                <?php if($reordering): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.footer','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if($bulkActionsEnabled && count($this->bulkActions)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.footer','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($column->isVisible()): ?>
                        <?php if($columnSelect && ! $this->isColumnSelectEnabled($column)) continue; ?>

                        <?php if($column->hasFooter()): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.footer','data' => ['class' => method_exists($this, 'setFooterDataClass') ? $this->setFooterDataClass($column, $rows) : '','id' => method_exists($this, 'setFooterDataId') ? $this->setFooterDataId($column, $rows) : '','customAttributes' => method_exists($this, 'setFooterDataAttributes') ? $this->setFooterDataAttributes($column, $rows) : []]]); ?>
<?php $component->withName('livewire-tables::bs4.table.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterDataClass') ? $this->setFooterDataClass($column, $rows) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterDataId') ? $this->setFooterDataId($column, $rows) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setFooterDataAttributes') ? $this->setFooterDataAttributes($column, $rows) : [])]); ?>
                                <?php if($column->isHtml()): ?>
                                    <?php echo e(new \Illuminate\Support\HtmlString($column->footerFormatted($rows))); ?>

                                <?php else: ?>
                                    <?php echo e($column->footerFormatted($rows)); ?>

                                <?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-tables::bootstrap-4.components.table.footer','data' => []]); ?>
<?php $component->withName('livewire-tables::bs4.table.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/bootstrap-4/includes/table.blade.php ENDPATH**/ ?>