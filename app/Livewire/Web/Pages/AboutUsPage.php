<?php

namespace App\Livewire\Web\Pages;

use App\Enums\PageTypeEnum;
use App\Enums\YesNoEnum;
use App\Models\Page;
use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class AboutUsPage extends Component
{
    public function render(): View
    {
        $teams = Team::where('special', YesNoEnum::YES)->limit(3)->get();
        $page = Page::where('type', PageTypeEnum::ABOUT_US)->first();

        return view('livewire.web.pages.about-us-page', [
            'page'  => $page,
            'teams' => $teams ?? [],
        ])
            ->layout('components.layouts.web');
    }
}
