<?php

namespace Database\Seeders;

use App\Actions\Team\StoreTeamAction;
use Exception;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/wedding.php');

        foreach ($data['teams'] as $row) {
            $team = StoreTeamAction::run([
                'name'    => $row['name'],
                'slug'    => $row['slug'],
                'job'     => $row['job'],
                'special' => $row['special'],
                'body'    => $row['body'],
                'config'  => $row['config'],
            ]);

            // Add image for the teams

            try {
                $team->addMedia($row['image'])
                     ->preservingOriginal()
                     ->toMediaCollection('image');
            } catch (Exception) {
                // do nothing
            }
        }
    }
}
