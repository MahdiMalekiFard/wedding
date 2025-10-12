<?php

namespace App\Actions\Reservation;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class DeleteReservationAction
{
    use AsAction;

    /**
     * @throws Throwable
     */
    public function handle(Reservation $reservation): bool
    {
        return DB::transaction(function () use ($reservation) {
            return $reservation->delete();
        });
    }
}
