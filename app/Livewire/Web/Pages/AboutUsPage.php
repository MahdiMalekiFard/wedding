<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class AboutUsPage extends Component
{
    public function render(): View
    {
        // load teams here
        // load the about page here

        return view('livewire.web.pages.about-us-page')
            ->layout('components.layouts.web');
    }
}
