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
        private readonly SyncTranslationAction $syncTranslationAction,
    ) {}


    /**
     * @param Reservation $reservation
     * @param array{
     *     title:string,
     *     description:string
     * }               $payload
     * @return Reservation
     * @throws Throwable
     */
    public function handle(Reservation $reservation, array $payload): Reservation
    {
        return DB::transaction(function () use ($reservation, $payload) {
            $reservation->update($payload);
            $this->syncTranslationAction->handle($reservation, Arr::only($payload, ['title', 'description']));

            return $reservation->refresh();
        });
    }
}
