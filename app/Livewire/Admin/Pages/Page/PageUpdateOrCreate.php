<?php

namespace App\Livewire\Admin\Pages\Page;

use App\Actions\Page\StorePageAction;
use App\Actions\Page\UpdatePageAction;
use App\Models\Page;
use Illuminate\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class PageUpdateOrCreate extends Component
{
    use Toast;

    public Page   $model;
    public string $title       = '';
    public string $description = '';
    public bool   $published   = false;

    public function mount(Page $page): void
    {
        $this->model = $page;
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
            UpdatePageAction::run($this->model, $payload);
            $this->success(
                title: trans('general.model_has_updated_successfully', ['model' => trans('page.model')]),
                redirectTo: route('admin.page.index')
            );
        } else {
            StorePageAction::run($payload);
            $this->success(
                title: trans('general.model_has_stored_successfully', ['model' => trans('page.model')]),
                redirectTo: route('admin.page.index')
            );
        }
    }

    public function render(): View
    {
        return view('livewire.admin.pages.page.page-update-or-create', [
            'edit_mode'          => $this->model->id,
            'breadcrumbs'        => [
                ['link' => route('admin.dashboard'), 'icon' => 's-home'],
                ['link' => route('admin.page.index'), 'label' => trans('general.page.index.title', ['model' => trans('page.model')])],
                ['label' => trans('general.page.create.title', ['model' => trans('page.model')])],
            ],
            'breadcrumbsActions' => [
                ['link' => route('admin.page.index'), 'icon' => 's-arrow-left']
            ],
        ]);
    }
}
