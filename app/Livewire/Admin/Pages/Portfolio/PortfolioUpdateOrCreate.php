<?php

namespace App\Livewire\Admin\Pages\Portfolio;

use App\Actions\Portfolio\StorePortfolioAction;
use App\Actions\Portfolio\UpdatePortfolioAction;
use App\Models\Portfolio;
use Illuminate\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class PortfolioUpdateOrCreate extends Component
{
    use Toast;

    public Portfolio   $model;
    public string $title       = '';
    public string $description = '';
    public bool   $published   = false;

    public function mount(Portfolio $portfolio): void
    {
        $this->model = $portfolio;
        if ($this->model->id) {
            $this->title = $this->model->title;
            $this->description = $this->model->description;
            $this->published = $this->model->published->value;
        }
    }

    protected function rules(): array
    {
        return [
            'title'       => 'required|string',
            'description' => 'required|string',
            'published'   => 'required'
        ];
    }

    public function submit(): void
    {
        $payload = $this->validate();
        if ($this->model->id) {
            UpdatePortfolioAction::run($this->model, $payload);
            $this->success(
                title: trans('general.model_has_updated_successfully', ['model' => trans('portfolio.model')]),
                redirectTo: route('admin.portfolio.index')
            );
        } else {
            StorePortfolioAction::run($payload);
            $this->success(
                title: trans('general.model_has_stored_successfully', ['model' => trans('portfolio.model')]),
                redirectTo: route('admin.portfolio.index')
            );
        }
    }

    public function render(): View
    {
        return view('livewire.admin.pages.portfolio.portfolio-update-or-create', [
            'edit_mode'          => $this->model->id,
            'breadcrumbs'        => [
                ['link' => route('admin.dashboard'), 'icon' => 's-home'],
                ['link' => route('admin.portfolio.index'), 'label' => trans('general.page.index.title', ['model' => trans('portfolio.model')])],
                ['label' => trans('general.page.create.title', ['model' => trans('portfolio.model')])],
            ],
            'breadcrumbsActions' => [
                ['link' => route('admin.portfolio.index'), 'icon' => 's-arrow-left']
            ],
        ]);
    }
}
