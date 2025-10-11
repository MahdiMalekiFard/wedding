<?php

namespace Database\Seeders;

use App\Actions\Category\StoreCategoryAction;
use App\Actions\Portfolio\StorePortfolioAction;
use App\Enums\CategoryTypeEnum;
use App\Enums\SeoRobotsMetaEnum;
use Exception;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/wedding.php');

        $category = StoreCategoryAction::run([
            'title'           => 'portfolio test category',
            'description'     => 'this is portfolio test category description',
            'slug'            => 'portfolio-test-category',
            'ordering'        => 3,
            'published'       => true,
            'type'            => CategoryTypeEnum::PORTFOLIO->value,
            'seo_title'       => 'portfolio test category',
            'seo_description' => 'this is portfolio test category description',
            'canonical'       => null,
            'old_url'         => null,
            'redirect_to'     => null,
            'robots_meta'     => SeoRobotsMetaEnum::INDEX_FOLLOW,
        ]);

        foreach ($data['portfolios'] as $row) {
            $portfolio = StorePortfolioAction::run([
                'title'       => $row['title'],
                'body'        => $row['body'],
                'slug'        => $row['slug'],
                'published'   => $row['published'],
                'category_id' => $category?->id,
                'seo_title'       => $row['seo_options']['title'],
                'seo_description' => $row['seo_options']['description'],
                'canonical'       => $row['seo_options']['canonical'],
                'old_url'         => $row['seo_options']['old_url'],
                'redirect_to'     => $row['seo_options']['redirect_to'],
                'robots_meta'     => $row['seo_options']['robots_meta'],
            ]);

            // Add image for slider
            if (array_key_exists('image', $row)) {
                try {
                    $portfolio->addMedia($row['image'])
                              ->preservingOriginal()
                              ->toMediaCollection('image');
                } catch (Exception) {
                    // do nothing
                }
            }
        }
    }
}
