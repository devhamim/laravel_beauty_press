<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Products\Models\Brand;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RolesTable.
 */
class BrandsTable extends DataTableComponent
{
  /**
   * @return Builder
   */
  public function query(): Builder
  {
    return Brand::with('user:id,name')->latest();
  }

  public function columns(): array
  {
    return [
      Column::make('Id', 'id')
        ->sortable()
        ->searchable(),
      Column::make('Name', 'name')
        ->searchable(),
      Column::make('Slug', 'slug')
        ->searchable(),
      Column::make('MetaTitle', 'meta_title')
        ->searchable(),
      Column::make('logo', 'logo')
        ->format(function ($value, $column, $row) {
          return '<img src="' . asset($row->logo) . '" style="width:110px" alt="' . $row->name . '">';
        })->asHtml(),
      Column::make(__('Action'), 'action')
        ->format(function ($value, $column, $row) {
          return view('backend.products.brand.includes.actions')->withBrand($row);
        }),
    ];
  }
}
