<?php

namespace App\Livewire\Web\Pages;

use App\Enums\BooleanEnum;
use App\Models\Portfolio;
use Illuminate\View\View;
use Livewire\Component;

class PortfolioPage extends Component
{
    public function render(): View
    {
        $portfolios = Portfolio::where('published', BooleanEnum::ENABLE)->paginate(6);

        return view('livewire.web.pages.portfolio-page', compact('portfolios'))
            ->layout('components.layouts.web');
    }
}
