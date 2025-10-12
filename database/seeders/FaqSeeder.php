<?php

namespace Database\Seeders;

use App\Actions\Faq\StoreFaqAction;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/wedding.php');

        foreach ($data['faqs'] as $faq) {
            StoreFaqAction::run([
                'title'        => $faq['title'],
                'description'  => $faq['description'],
                'category_id'  => $faq['category_id'],
                'favorite'     => $faq['favorite'],
                'ordering'     => $faq['ordering'],
                'published'    => $faq['published'],
                'published_at' => $faq['published_at'],
            ]);
        }
    }
}
