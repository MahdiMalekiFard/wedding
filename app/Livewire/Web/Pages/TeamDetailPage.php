<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class TeamDetailPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.team-detail-page')
            ->layout('components.layouts.web');
    }
}
