@php use Illuminate\Support\Arr; @endphp

@foreach($items as $item)
    @if(Arr::get($item,'access', true))
        @if(Arr::has($item, 'sub_menu'))
            <x-menu-sub :title="Arr::get($item,'title')" :icon="Arr::get($item,'icon')">
                @include('admin.layouts.partials.menu-tree', ['items' => Arr::get($item,'sub_menu', [])])
            </x-menu-sub>
        @elseif(Arr::get($item, 'type') === 'custom_component')
            {{-- Custom Livewire Component --}}
            @livewire(Arr::get($item, 'component'))
        @else
            @php
                $routeName = Arr::get($item,'route_name');
                $params    = Arr::get($item,'params', []);
                $link      = $routeName ? route($routeName, $params) : '#';
            @endphp

            <x-menu-item
                :exact="Arr::get($item,'exact', false)"
                :title="Arr::get($item,'title')"
                :icon="Arr::get($item,'icon')"
                :badge="Arr::get($item,'badge')"
                :badge-classes="Arr::get($item,'badge_classes','float-left')"
                :noWireNavigate="Arr::get($item,'noWireNavigate', false)"
                :link="$link"
            >
                @if(Arr::has($item, 'livewire_badge'))
                    <x-slot:badge>
                        @livewire(Arr::get($item, 'livewire_badge'))
                    </x-slot:badge>
                @endif
            </x-menu-item>
        @endif
    @endif
@endforeach
