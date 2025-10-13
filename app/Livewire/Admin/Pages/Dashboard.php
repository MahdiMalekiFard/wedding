<?php

namespace App\Livewire\Admin\Pages;

use Illuminate\View\View;
use Livewire\Component;
use App\Models\ContactUs;

class Dashboard extends Component
{
    public function render(): View
    {
        $contactStats = [
            'total'  => ContactUs::count(),
            'unread' => ContactUs::unread()->count(),
            'today'  => ContactUs::whereDate('created_at', today())->count(),
        ];

        // Get recent unread contact messages (limit to 5 for dashboard)
        $unreadMessages = ContactUs::unread()
            ->latest()
            ->limit(10)
            ->get();

        return view('livewire.admin.pages.dashboard', compact('contactStats', 'unreadMessages'));
    }
}
