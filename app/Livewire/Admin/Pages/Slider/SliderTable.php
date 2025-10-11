<?php

namespace App\Livewire\Admin\Pages\Slider;

use App\Enums\BooleanEnum;
use App\Helpers\PowerGridHelper;
use App\Models\Slider;
use App\Traits\PowerGridHelperTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use Livewire\Attributes\Computed;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class SliderTable extends PowerGridComponent
{
    use PowerGridHelperTrait;
    public string $tableName     = 'index_slider_datatable';
    public string $sortDirection = 'desc';

    public function setUp(): array
    {
        $setup = [
            PowerGrid::header()
                     ->includeViewOnTop('components.admin.shared.bread-crumbs')
                     ->showSearchInput(),

            PowerGrid::footer()
                     ->showPerPage()
                     ->showRecordCount(),
        ];

        if ((new Agent)->isMobile()) {
            $setup[] = PowerGrid::responsive()->fixedColumns('id', 'title', 'actions');
        }

        return $setup;
    }

    #[Computed(persist: true)]
    public function breadcrumbs(): array
    {
        return [
            ['link' => route('admin.dashboard'), 'icon' => 's-home'],
            ['label' => trans('general.page.index.title', ['model' => trans('slider.model')])],
        ];
    }

    #[Computed(persist: true)]
    public function breadcrumbsActions(): array
    {
        return [
            ['link' => route('admin.slider.create'), 'icon' => 's-plus', 'label' => trans('general.page.create.title', ['model' => trans('slider.model')])],
        ];
    }

    public function datasource(): Builder
    {
        return Slider::query();
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
                        ->add('title', fn ($row) => PowerGridHelper::fieldTitle($row))
                        ->add('published_formated', fn ($row) => PowerGridHelper::fieldPublishedAtFormated($row));
    }

    public function columns(): array
    {
        return [
            PowerGridHelper::columnId(),
            PowerGridHelper::columnTitle(),
            PowerGridHelper::columnPublished(),
            PowerGridHelper::columnCreatedAT('created_at'),
            PowerGridHelper::columnAction(),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::enumSelect('published_formated', 'published')
                  ->datasource(BooleanEnum::cases()),

            Filter::datepicker('created_at', 'created_at')
                  ->params([
                      'maxDate' => now(),
                  ]),
        ];
    }

    public function actions(Slider $row): array
    {
        return [
            PowerGridHelper::btnToggle($row),
            PowerGridHelper::btnEdit($row),
            PowerGridHelper::btnDelete($row),
        ];
    }

    public function noDataLabel(): string|View
    {
        return view('admin.datatable-shared.empty-table', [
            'link' => route('admin.slider.create'),
        ]);
    }
}
