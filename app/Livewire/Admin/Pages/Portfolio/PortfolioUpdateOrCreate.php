<?php

namespace App\Livewire\Admin\Pages\Portfolio;

use App\Actions\Portfolio\StorePortfolioAction;
use App\Actions\Portfolio\UpdatePortfolioAction;
use App\Enums\CategoryTypeEnum;
use App\Livewire\Traits\SeoOptionTrait;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class PortfolioUpdateOrCreate extends Component
{
    use Toast, SeoOptionTrait, WithFileUploads;

    public Portfolio $model;
    public string    $title       = '';
    public ?string   $body        = '';
    public bool      $published   = false;
    public array     $categories  = [];
    public ?int      $category_id = null;
    public           $image;

    public function mount(Portfolio $portfolio): void
    {
        $this->model = $portfolio;
        $this->categories = Category::where('type', CategoryTypeEnum::PORTFOLIO->value)->get()->map(fn($item) => ['name' => $item->title, 'id' => $item->id])->toArray();
        $defaultCategoryId = Category::where('type', CategoryTypeEnum::PORTFOLIO->value)->value('id');

        if ($this->model->id) {
            $this->mountStaticFields();
            $this->title = $this->model->title;
            $this->body = $this->model->body;
            $this->published = $this->model->published->value;
            $this->category_id = $this->model->category_id ?? $defaultCategoryId;
        } else {
            $this->category_id = $defaultCategoryId;
        }
    }

    protected function rules(): array
    {
        return array_merge($this->seoOptionRules(), [
            'slug'            => 'required|string|max:255|unique:portfolios,slug,' . $this->model->id,
            'title'           => 'required|string',
            'body'            => 'nullable|string',
            'published'       => 'required|boolean',
            'category_id'     => 'required|exists:categories,id,type,' . CategoryTypeEnum::PORTFOLIO->value,
            'image'           => 'nullable|image|max:4096',
            'seo_description' => ['nullable', 'string', 'max:255'],
        ]);
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
