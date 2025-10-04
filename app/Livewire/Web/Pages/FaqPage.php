<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class FaqPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.faq-page')
            ->layout('components.layouts.web');
    }
}
