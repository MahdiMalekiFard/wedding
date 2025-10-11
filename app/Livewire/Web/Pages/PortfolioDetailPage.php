<?php

namespace App\Livewire\Web\Pages;

use App\Models\Portfolio;
use Illuminate\View\View;
use Livewire\Component;

class PortfolioDetailPage extends Component
{
    public Portfolio $portfolio;

    public function mount(string $slug): void
    {
        $this->portfolio = Portfolio::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        return view('livewire.web.pages.portfolio-detail-page', [
            'portfolio' => $this->portfolio,
        ])
            ->layout('components.layouts.web');
    }
}
