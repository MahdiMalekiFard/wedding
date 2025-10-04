<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class ContactUsPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.contact-us-page')
            ->layout('components.layouts.web');
    }
}
