<?php

namespace App\Livewire\Web\Pages;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class TeamDetailPage extends Component
{
    public Team $team;

    public function mount(string $slug): void
    {
        $this->team = Team::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        return view('livewire.web.pages.team-detail-page', ['team' => $this->team])
            ->layout('components.layouts.web');
    }
}
