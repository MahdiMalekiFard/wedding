<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class PortfolioDetailPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.portfolio-detail-page')
            ->layout('components.layouts.web');
    }
}
