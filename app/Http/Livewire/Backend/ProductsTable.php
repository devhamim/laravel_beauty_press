<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Products\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RolesTable.
 */
class ProductsTable  extends DataTableComponent
{
    /**
     
     * @return Builder
     */

    public function query(): Builder
    {

        return Product::with('user');
    }


    public function columns(): array
    {

        return [

            Column::make('Service Type', 'service_type')
                ->searchable(),

            Column::make('Category', 'category')
                ->searchable()
                ->sortable(),

            Column::make('Shipped From', 'shipped_from')
                ->searchable(),

            Column::make('Rate', 'rate')
                ->searchable(),


            Column::make('Status', 'status')
                ->searchable(),



            Column::make(__('Action'), 'action')
                ->format(function ($value, $column, $row) {
                    return view('backend.products.product.includes.actions')->withproduct($row);
                }),
        ];
    }
}
