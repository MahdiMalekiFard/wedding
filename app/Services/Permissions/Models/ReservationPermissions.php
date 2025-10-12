<?php

declare(strict_types=1);

namespace App\Services\Permissions\Models;

use App\Models\Reservation;

class ReservationPermissions extends BasePermissions
{
    public const All     = "Reservation.All";
    public const Index   = "Reservation.Index";
    public const Show    = "Reservation.Show";
    public const Store   = "Reservation.Store";
    public const Update  = "Reservation.Update";
    public const Toggle  = "Reservation.Toggle";
    public const Delete  = "Reservation.Delete";
    public const Restore = "Reservation.Restore";

    protected string $model = Reservation::class;
}
