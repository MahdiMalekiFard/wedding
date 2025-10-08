<?php

namespace App\Livewire\Admin\Pages\Team;

use App\Actions\Team\StoreTeamAction;
use App\Actions\Team\UpdateTeamAction;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class TeamUpdateOrCreate extends Component
{
    use Toast, WithFileUploads;

    public Team    $model;
    public ?string $slug    = '';
    public ?string $name    = null;
    public ?string $job     = null;
    public ?string $body    = '';
    public bool    $special = true;
    public array   $social  = [
        'youtube'  => '',
        'facebook' => '',
        'twitter'  => '',
        'linkedin' => '',
    ];
    public array   $info    = [
        'experience' => '',
        'mobile'     => '',
        'email'      => '',
    ];
    public         $image;

    public function mount(Team $team): void
    {
        $this->model = $team;
        if ($this->model->id) {
            $this->slug = $this->model->slug;
            $this->name = $this->model->name;
            $this->job = $this->model->job;
            $this->body = $this->model->body;
            $this->special = $this->model->special->value;

            // merge existing stored values (if any)
            $stored_social = (array)($this->model->extra()->get('social_media') ?? []);
            $this->social = array_merge($this->social, $stored_social);

            $stored_info = (array)($this->model->extra()->get('extra_info') ?? []);
            $this->info = array_merge($this->info, $stored_info);
        }
    }

    protected function rules(): array
    {
        return [
            'name'            => 'required|string',
            'slug'            => 'required|string|max:255|unique:teams,slug,' . $this->model->id,
            'job'             => 'required|string',
            'body'            => 'nullable|string',
            'special'         => 'required|boolean',

            // social media
            'social'          => ['nullable', 'array'],
            'social.youtube'  => ['nullable', 'string'],
            'social.facebook' => ['nullable', 'string'],
            'social.twitter'  => ['nullable', 'string'],
            'social.linkedin' => ['nullable', 'string'],

            // extra information
            'info'            => ['nullable', 'array'],
            'info.experience' => ['nullable', 'string'],
            'info.mobile'     => ['nullable', 'string'],
            'info.email'      => ['nullable', 'string'],

            'image' => 'nullable|image|max:4096',
        ];
    }

    public function submit(): void
    {
        $payload = $this->validate();

        // move socials into schemaless config key
        $social = array_filter($payload['social'] ?? [], fn($v) => filled($v));
        $info = array_filter($payload['info'] ?? [], fn($v) => filled($v));

        $payload['config'] = [
            'social_media' => $social,
            'info'         => $info
        ];

        // you don’t want to mass-assign "social" itself
        unset($payload['social'], $payload['info']);

        if ($this->model->id) {
            UpdateTeamAction::run($this->model, $payload);
            $this->success(
                title: trans('general.model_has_updated_successfully', ['model' => trans('team.model')]),
                redirectTo: route('admin.team.index')
            );
        } else {
            StoreTeamAction::run($payload);
            $this->success(
                title: trans('general.model_has_stored_successfully', ['model' => trans('team.model')]),
                redirectTo: route('admin.team.index')
            );
        }
    }

    public function updatedName($value): void
    {
        $this->slug = Str::slug($value);
    }

    public function render(): View
    {
        return view('livewire.admin.pages.team.team-update-or-create', [
            'edit_mode'          => $this->model->id,
            'breadcrumbs'        => [
                ['link' => route('admin.dashboard'), 'icon' => 's-home'],
                ['link' => route('admin.team.index'), 'label' => trans('general.page.index.title', ['model' => trans('team.model')])],
                ['label' => trans('general.page.create.title', ['model' => trans('team.model')])],
            ],
            'breadcrumbsActions' => [
                ['link' => route('admin.team.index'), 'icon' => 's-arrow-left'],
            ],
        ]);
    }
}
