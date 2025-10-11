<?php

namespace App\Livewire\Web\Pages;

use App\Enums\BooleanEnum;
use App\Enums\PageTypeEnum;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Slider;
use Illuminate\View\View;
use Livewire\Component;

class HomePage extends Component
{
    public function render(): View
    {
        $sliders = Slider::where('published', BooleanEnum::ENABLE)->get();
        $blogs = Blog::where('published', BooleanEnum::ENABLE)->limit(3)->get();
        $aboutUsPage = Page::where('type', PageTypeEnum::ABOUT_US)->first();
        $portfolios = Portfolio::where('published', BooleanEnum::ENABLE)->limit(3)->get();

        return view('livewire.web.pages.home-page', [
            'blogs'       => $blogs ?? [],
            'sliders'     => $sliders ?? [],
            'aboutUsPage' => $aboutUsPage,
            'portfolios'  => $portfolios ?? [],
        ])
            ->layout('components.layouts.web');
    }
}
