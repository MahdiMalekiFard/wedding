<?php

namespace App\Livewire\Web\Pages;

use App\Models\Blog;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;

    public $tag                    = null;
    public $category_id            = null;
    protected $queryString         = ['tag', 'category_id'];
    protected string $paginationTheme = 'bootstrap';

    public function render(): View
    {
        $blogs = Blog::query()
                     ->where('published', true)
                     ->when($this->tag, fn ($query) => $query->withAnyTags([$this->tag]))
                     ->when($this->category_id, fn ($query) => $query->where('category_id', $this->category_id))
                     ->paginate(4);

        return view('livewire.web.pages.blog-page', compact('blogs'))
            ->layout('components.layouts.web');
    }
}
