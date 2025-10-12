<?php

declare(strict_types=1);


use App\Livewire\Admin\Pages\Reservation\ReservationUpdateOrCreate;
use App\Livewire\Admin\Pages\Reservation\ReservationTable;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin/reservation', 'as' => 'admin.reservation.'], function () {
    Route::get('/', ReservationTable::class)->name('index');
    Route::get('create', ReservationUpdateOrCreate::class)->name('create')->can('create,App\Models\Reservation');
    Route::get('{reservation}/edit', ReservationUpdateOrCreate::class)->name('edit')->can('update,reservation');
});
