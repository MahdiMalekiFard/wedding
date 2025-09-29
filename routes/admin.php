<?php

use App\Livewire\Admin\Auth\LoginPage;
use App\Livewire\Admin\Pages\Dashboard;
use App\Livewire\Admin\Shared\DynamicTranslate;

// authentication
Route::get('admin/auth/login', LoginPage::class)->name('admin.auth.login');
Route::get('admin/auth/logout', function () {
    auth()->logout();

    return redirect()->away(route('admin.auth.login'));
})->name('admin.auth.logout');


Route::group(['middleware' => ['admin.panel', 'cors', 'area:admin', 'admin.transFallback']], function () {
    Route::get('admin', Dashboard::class)->name('admin.dashboard');
    Route::get('utility/translate/{class}/{id}', DynamicTranslate::class)->name('admin.dynamic-translate');

    $files = array_diff(scandir(__DIR__ . '/admin', SCANDIR_SORT_ASCENDING), ['.', '..']);
    foreach ($files as $file_name) {
        require_once sprintf('admin/%s', $file_name);
    }
});
