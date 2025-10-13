<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // necessary
            RolePermissionSeeder::class,
            AdminSeeder::class,
            PageSeeder::class,

            // fake
            CategorySeeder::class,
            BlogSeeder::class,
            SliderSeeder::class,
            PortfolioSeeder::class,
            TeamSeeder::class,
            FaqSeeder::class,
            OpinionSeeder::class,
        ]);
    }
}
