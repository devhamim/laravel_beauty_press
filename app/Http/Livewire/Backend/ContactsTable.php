<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Contacts\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ContactsTable extends DataTableComponent
{
    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return contact::with('user:id')->latest();
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->searchable(),
            Column::make('Phone', 'phone')
                ->searchable(),
            Column::make('Message', 'message')
                ->searchable(),

            Column::make(__('Action'), 'action')
                ->format(function ($value, $column, $row) {
                    return view('backend.messaging.contact.includes.actions')->withcontact($row);
                }),
        ];
    }
}
