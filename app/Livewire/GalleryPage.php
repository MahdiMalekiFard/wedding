<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class GalleryPage extends Component
{
    public function render(): View
    {
        return view('livewire.gallery-page')
            ->layout('components.layouts.web');
    }
}
