<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class TeamPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.team-page')
            ->layout('components.layouts.web');
    }
}
