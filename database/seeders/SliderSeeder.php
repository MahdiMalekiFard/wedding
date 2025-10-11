<?php

namespace Database\Seeders;

use App\Actions\Slider\StoreSliderAction;
use Exception;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/wedding.php');

        foreach ($data['sliders'] as $row) {
            $slider = StoreSliderAction::run([
                'title'       => $row['title'],
                'subtitle'    => $row['subtitle'],
                'description' => $row['description'],
                'published'   => $row['published'],
            ]);

            // Add image for slider
            if (array_key_exists('image', $row)) {
                try {
                    $slider->addMedia($row['image'])
                         ->preservingOriginal()
                         ->toMediaCollection('image');
                } catch (Exception) {
                    // do nothing
                }
            }
        }
    }
}
