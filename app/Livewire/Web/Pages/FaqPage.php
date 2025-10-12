<?php

namespace App\Livewire\Web\Pages;

use App\Enums\BooleanEnum;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\View\View;
use Livewire\Component;

class FaqPage extends Component
{
    public function render(): View
    {
        $faqs = Faq::where('published', BooleanEnum::ENABLE)->orderByDesc('ordering')->get();
        $latestBlogs = Blog::latest()->where('published', true)->take(3)->get();

        return view('livewire.web.pages.faq-page', compact('latestBlogs', 'faqs'))
            ->layout('components.layouts.web');
    }
}
