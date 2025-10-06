<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class GalleryDetailPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.gallery-detail-page')
            ->layout('components.layouts.web');
    }
}
