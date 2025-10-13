<?php

namespace App\Actions\Reservation;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Reservation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class UpdateReservationAction
{
    use AsAction;

    public function __construct(
    ) {}


    /**
     * @param Reservation $reservation
     * @param array{
     *     name:string,
     *     email:string,
     *     guest:string,
     *     date:string,
     *     description?:string,
     * } $payload
     * @return Reservation
     * @throws Throwable
     */
    public function handle(Reservation $reservation, array $payload): Reservation
    {
        return DB::transaction(function () use ($reservation, $payload) {
            $reservation->update($payload);

            return $reservation->refresh();
        });
    }
}
