<?php

namespace App\Livewire\Web\Pages;

use App\Models\Blog;
use Illuminate\View\View;
use Livewire\Component;

class FaqPage extends Component
{
    public function render(): View
    {
        $latestBlogs = Blog::latest()->where('published', true)->take(3)->get();
        return view('livewire.web.pages.faq-page', compact('latestBlogs'))
            ->layout('components.layouts.web');
    }
}
