<?php

namespace App\Livewire\Admin\Pages;

use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render(): View
    {
        $contactStats = [
            'total'  => 10,
            'unread' => 8,
            'today'  => 8,
        ];

        return view('livewire.admin.pages.dashboard', compact('contactStats'));
    }
}
