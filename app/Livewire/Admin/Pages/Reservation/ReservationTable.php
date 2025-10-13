<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Pages\Reservation;

use App\Enums\BooleanEnum;
use App\Helpers\PowerGridHelper;
use App\Models\Reservation;
use App\Traits\PowerGridHelperTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Jenssegers\Agent\Agent;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class ReservationTable extends PowerGridComponent
{
    use PowerGridHelperTrait;
    public string $tableName = 'index_reservation_datatable';
    public string $sortDirection = 'desc';

    #[Computed(persist: true)]
    public function breadcrumbs(): array
    {
        return [
            ['link' => route('admin.dashboard'), 'icon' => 's-home'],
            ['label' => trans('general.page.index.title', ['model' => trans('reservation.model')])],
        ];
    }

    #[Computed(persist: true)]
    public function breadcrumbsActions(): array
    {
        return [
            ['link' => route('admin.reservation.create'), 'icon' => 's-plus', 'label' => trans('general.page.create.title', ['model' => trans('reservation.model')])],
        ];
    }

    public function setUp(): array
    {
        $setup = [
            PowerGrid::header()
                ->includeViewOnTop("components.admin.shared.bread-crumbs")
                ->showSearchInput(),

            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];

        if((new Agent())->isMobile()) {
            $setup[] = PowerGrid::responsive()->fixedColumns('id', 'title', 'actions');
        }

        return $setup;
    }


    public function datasource(): Builder
    {
        return Reservation::query();
    }

    public function relationSearch(): array
    {
        return [
            'translations' => [
                'value',
            ],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name', fn ($row) => $row->name)
            ->add('email', fn ($row) => $row->email)
            ->add('guest', fn ($row) => $row->guest)
            ->add('date_formatted', fn ($row) => $row->date->format('l, d F Y'));
    }

    public function columns(): array
    {
        return [
            PowerGridHelper::columnId(),
            Column::make('Name', 'name'),
            Column::make('Email', 'email'),
            Column::make('Guest Number', 'guest'),
            Column::make('Date', 'date_formatted'),
            PowerGridHelper::columnAction(),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::enumSelect('published_formated', 'published')
                  ->datasource(BooleanEnum::cases()),

            Filter::datepicker('created_at_formatted', 'created_at')
                  ->params([
                      'maxDate' => now(),
                  ])
        ];
    }

    public function actions(Reservation $row): array
    {
        return [
            PowerGridHelper::btnEdit($row),
            PowerGridHelper::btnDelete($row),
        ];
    }

    public function noDataLabel(): string|View
    {
        return view('admin.datatable-shared.empty-table',[
            'link'=>route('admin.reservation.create')
        ]);
    }

}
