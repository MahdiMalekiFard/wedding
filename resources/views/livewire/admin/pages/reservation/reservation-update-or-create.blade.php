@php use App\Enums\BooleanEnum; @endphp
<form wire:submit="submit">
    <x-admin.shared.bread-crumbs :breadcrumbs="$breadcrumbs" :breadcrumbs-actions="$breadcrumbsActions"/>
    <x-card :title="trans('general.page_sections.data')" shadow separator progress-indicator="submit">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input :label="trans('validation.attributes.name')"
                            wire:model="name"
            />
            <x-input :label="trans('validation.attributes.email')"
                    wire:model="email"
            />
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input :label="trans('validation.attributes.guest')"
                    wire:model="guest"
            />
            <x-datepicker :label="trans('validation.attributes.date', locale: app()->getFallbackLocale())" wire:model="date" icon="o-calendar" />
        </div>
        
        <x-textarea
                :label="trans('validation.attributes.description')"
                wire:model="description"
        />
    </x-card>
    

    <x-admin.shared.form-actions/>
</form>
