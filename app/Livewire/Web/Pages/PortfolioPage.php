<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class PortfolioPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.portfolio-page')
            ->layout('components.layouts.web');
    }
}
