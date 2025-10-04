<?php

namespace App\Livewire\Web\Pages;

use App\Enums\CategoryTypeEnum;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Tags\Tag;

class BlogPage extends Component
{
    use WithPagination;

    public $tag                    = null;
    public $category_id            = null;
    protected $queryString         = ['tag', 'category_id'];
    protected string $paginationTheme = 'bootstrap';

    public function render(): View
    {
        $categories = Category::where('type', CategoryTypeEnum::BLOG)->limit(8)->get() ?? [];
        $blogs = Blog::query()
                     ->where('published', true)
                     ->when($this->tag, fn ($query) => $query->withAnyTags([$this->tag]))
                     ->when($this->category_id, fn ($query) => $query->where('category_id', $this->category_id))
                     ->paginate(4);
        $recentBlogs = Blog::latest()->limit(3)->get() ?? [];
        $blogTagIds = DB::table('taggables')->where('taggable_type', Blog::class)->pluck('tag_id')->toArray();
        $tags = Tag::whereIn('id', $blogTagIds)->get();

        return view('livewire.web.pages.blog-page', compact('blogs', 'categories', 'recentBlogs', 'tags'))
            ->layout('components.layouts.web');
    }
}
