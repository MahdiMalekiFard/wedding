<?php

use App\Livewire\Web\Pages\BlogDetailPage;
use App\Livewire\Web\Pages\BlogPage;
use App\Livewire\Web\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

// pages
Route::get('blog', BlogPage::class)->name('blog-page');
Route::get('blog/{slug}', BlogDetailPage::class)->name('blog-detail-page');
