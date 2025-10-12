<?php

namespace App\Livewire;

use App\Models\ArtGallery;
use Illuminate\View\View;
use Livewire\Component;

class GalleryPage extends Component
{
    public function render(): View
    {
        $artGalleries = ArtGallery::where('published', true)->paginate(6);

        return view('livewire.gallery-page', ['artGalleries' => $artGalleries])
            ->layout('components.layouts.web');
    }
}
