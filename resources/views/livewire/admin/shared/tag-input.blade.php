<div
    wire:ignore
    x-data
    x-init="
        const select = new TomSelect($refs.select, {
            plugins: ['remove_button'],
            persist: false,
            create: true, // allow typing new tags
            options: @js(collect($options)->map(fn($tag) => ['value'=>$tag,'text'=>$tag]), JSON_THROW_ON_ERROR),
            items: @js($selected, JSON_THROW_ON_ERROR),
            onChange: function(values) {
                @this.set('selected', values)
            }
        });
    "
>
    <label class="block mb-2 font-bold">{{ __('Tags') }}</label>

    <select x-ref="select" multiple placeholder="Select or type tags..."></select>
</div>
