<?php

use App\Livewire\Web\Pages\AboutUsPage;
use App\Livewire\Web\Pages\BlogDetailPage;
use App\Livewire\Web\Pages\BlogPage;
use App\Livewire\Web\Pages\ContactUsPage;
use App\Livewire\Web\Pages\HomePage;
use App\Livewire\Web\Pages\PortfolioDetailPage;
use App\Livewire\Web\Pages\PortfolioPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

// pages
Route::get('blog', BlogPage::class)->name('blog-page');
Route::get('blog/{slug}', BlogDetailPage::class)->name('blog-detail-page');
Route::get('/about-us', AboutUsPage::class)->name('about-us-page');
Route::get('/portfolio-page', PortfolioPage::class)->name('portfolio-page');
Route::get('/portfolio-detail-page/{slug}', PortfolioDetailPage::class)->name('portfolio-detail-page');
Route::get('/contact-us', ContactUsPage::class)->name('contact-us-page');
