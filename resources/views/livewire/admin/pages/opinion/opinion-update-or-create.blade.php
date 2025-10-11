@php use App\Enums\BooleanEnum;use App\Helpers\Constants; @endphp
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form wire:submit.prevent="submit" enctype="multipart/form-data">
    <x-admin.shared.bread-crumbs :breadcrumbs="$breadcrumbs" :breadcrumbs-actions="$breadcrumbsActions"/>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">

        <div class="col-span-2 grid grid-cols-1 gap-4">
            <x-card :title="trans('general.page_sections.data')" shadow separator progress-indicator="submit">
                <div class="grid grid-cols-1 gap-4">
                    <x-input :label="trans('validation.attributes.full_name')"
                             wire:model="user_name"
                             required
                    />
                    <x-input :label="trans('validation.attributes.company_name')"
                             wire:model="company"
                    />
                    <x-textarea :label="trans('validation.attributes.comment')"
                                wire:model="comment"
                                required
                    />
                    <x-input :label="trans('validation.attributes.ordering')"
                             wire:model="ordering" type="number"
                             required
                    />
                </div>
            </x-card>
        </div>
        <div class="col-span-1 ">
            <div class="sticky top-20">
                <x-card :title="trans('general.page_sections.upload_image')" shadow separator
                        progress-indicator="submit" class="">
                    <x-admin.shared.single-file-upload
                        wire_model="image"
                        :default_image="$model->getFirstMediaUrl('image',Constants::RESOLUTION_1280_400)"
                        :crop_after_change="true"
                    />
                </x-card>
                <x-card :title="trans('general.page_sections.publish_config')" shadow separator
                        progress-indicator="submit" class="mt-5">
                    <x-admin.shared.published-config :model="basename($model::class)"/>
                </x-card>
            </div>
        </div>
    </div>

    <x-admin.shared.form-actions/>
</form>
