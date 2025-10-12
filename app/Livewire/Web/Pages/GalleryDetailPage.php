<?php

namespace App\Livewire\Web\Pages;

use App\Models\ArtGallery;
use Illuminate\View\View;
use Livewire\Component;

class GalleryDetailPage extends Component
{
    public ArtGallery $artGallery;

    public function mount(string $slug): void
    {
        $this->artGallery = ArtGallery::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        return view('livewire.web.pages.gallery-detail-page', ['artGallery' => $this->artGallery])
            ->layout('components.layouts.web');
    }
}
