<?php

namespace App\Livewire\Web\Pages;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class TeamPage extends Component
{
    public function render(): View
    {
        $teams = Team::all();

        return view('livewire.web.pages.team-page', ['teams' => $teams])
            ->layout('components.layouts.web');
    }
}
