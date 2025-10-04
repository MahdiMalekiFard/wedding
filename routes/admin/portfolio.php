<?php

declare(strict_types=1);


use App\Livewire\Admin\Pages\Portfolio\PortfolioUpdateOrCreate;
use App\Livewire\Admin\Pages\Portfolio\PortfolioTable;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin/portfolio', 'as' => 'admin.portfolio.'], function () {
    Route::get('/', PortfolioTable::class)->name('index');
    Route::get('create', PortfolioUpdateOrCreate::class)->name('create')->can('create,App\Models\Portfolio');
    Route::get('{portfolio}/edit', PortfolioUpdateOrCreate::class)->name('edit')->can('update,portfolio');
});
