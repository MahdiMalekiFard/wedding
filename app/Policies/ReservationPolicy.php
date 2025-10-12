<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Reservation;
use App\Models\User;
use App\Services\Permissions\PermissionsService;

class ReservationPolicy
{

    public function viewAny(User $user): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Index'));
    }

    public function view(User $user, Reservation $reservation): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Show'));
    }

    public function create(User $user): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Store'));
    }

    public function update(User $user, Reservation $reservation): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Update'));
    }

    public function delete(User $user, Reservation $reservation): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Delete'));
    }

    public function restore(User $user, Reservation $reservation): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class, 'Restore'));
    }

    public function forceDelete(User $user, Reservation $reservation): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Reservation::class));
    }
}
