<?php

namespace App\Livewire\Web\Pages;

use Illuminate\View\View;
use Livewire\Component;

class ReservationPage extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.reservation-page')
            ->layout('components.layouts.web');
    }
}
