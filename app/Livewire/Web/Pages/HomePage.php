<?php

namespace App\Livewire\Web\Pages;

use App\Enums\BooleanEnum;
use App\Models\Blog;
use Illuminate\View\View;
use Livewire\Component;

class HomePage extends Component
{
    public function render(): View
    {
        $blogs = Blog::where('published', BooleanEnum::ENABLE)->limit(3)->get();

        return view('livewire.web.pages.home-page', [
            'blogs' => $blogs ?? [],
        ])
            ->layout('components.layouts.web');
    }
}
