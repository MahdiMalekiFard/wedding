<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $admin = User::updateOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name'     => 'Admin',
            'mobile'   => '9100000000',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole(Role::where('name', RoleEnum::ADMIN->value)->first());
    }
}
