<?php

namespace App\Actions\Reservation;

use App\Models\Reservation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class StoreReservationAction
{
    use AsAction;

    public function __construct()
    {
    }

    /**
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
    public function handle(array $payload): Reservation
    {
        return DB::transaction(function () use ($payload) {
            return Reservation::create($payload)->refresh();
        });
    }
}
