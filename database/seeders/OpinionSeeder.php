<?php

namespace Database\Seeders;

use App\Actions\Opinion\StoreOpinionAction;
use Exception;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/wedding.php');

        foreach ($data['opinions'] as $row) {
            $opinion = StoreOpinionAction::run([
                'user_name'      => $row['user_name'],
                'company'      => $row['company'],
                'published'    => $row['published'],
                'published_at' => $row['published_at'],
                'ordering'     => $row['ordering'],
                'view_count'   => $row['view_count'],
                'comment'      => $row['comment'],
            ]);

            // Add image for the opinions
            try {
                $opinion->addMedia($row['image'])
                     ->preservingOriginal()
                     ->toMediaCollection('image');
            } catch (Exception) {
                // do nothing
            }
        }
    }
}
