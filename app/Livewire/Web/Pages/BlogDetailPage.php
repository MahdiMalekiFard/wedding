<?php

namespace App\Livewire\Web\Pages;

use App\Enums\CategoryTypeEnum;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\View\View;
use Livewire\Component;

class BlogDetailPage extends Component
{
    public Blog $blog;

    public function mount(string $slug): void
    {
        $this->blog = Blog::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        $recentBlogs = Blog::latest()->whereNot('id', $this->blog?->id)->where('published', true)->limit(3)->get() ?? [];
        $categories = Category::where('type', CategoryTypeEnum::BLOG)->where('published', true)->limit(8)->get() ?? [];

        return view('livewire.web.pages.blog-detail-page', [
            'blog'        => $this->blog,
            'recentBlogs' => $recentBlogs ?? [],
            'categories'  => $categories ?? [],
        ])->layout('components.layouts.web');
    }
}
