<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Products\Models\Status;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RolesTable.
 */

class StatusesTable extends DataTableComponent

{
    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Status::with('user:id,name')->latest();
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'asc');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Status', 'name')
                ->searchable(),

            Column::make(__('Action'), 'action')
                ->format(function ($value, $column, $row) {
                    return view('backend.products.status.includes.actions')->withstatus($row);
                }),
        ];
    }
}
