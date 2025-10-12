<?php

namespace App\Models;

use App\Enums\BooleanEnum;
use App\Helpers\Constants;
use App\Traits\HasSlugFromTranslation;
use App\Traits\HasTranslationAuto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property string $title
 * @property string $description
 */
class ArtGallery extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslationAuto;
    use InteractsWithMedia;
    use HasSlugFromTranslation;

    public array $translatable = [
        'title', 'description',
    ];

    protected $table = 'art_galleries';

    protected $fillable = [
        'published',
        'languages',
        'slug',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'published' => BooleanEnum::class,
        'languages' => 'array',
    ];

    /** Model Configuration -------------------------------------------------------------------------- */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
             ->singleFile()
             ->useFallbackUrl('/assets/admin/img/default/user-avatar.png')
             ->registerMediaConversions(function () {
                 $this->addMediaConversion(Constants::RESOLUTION_100_SQUARE)->fit(Fit::Crop, 100, 100);
                 $this->addMediaConversion(Constants::RESOLUTION_854_480)->fit(Fit::Crop, 854, 480);
                 $this->addMediaConversion(Constants::RESOLUTION_1280_720)->fit(Fit::Crop, 1280, 720);
             });

        $this->addMediaCollection('images')
             ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
             ->registerMediaConversions(function () {
                 $this->addMediaConversion(Constants::RESOLUTION_100_SQUARE)->fit(Fit::Crop, 100, 100);
                 $this->addMediaConversion(Constants::RESOLUTION_854_480)->fit(Fit::Crop, 854, 480);
                 $this->addMediaConversion(Constants::RESOLUTION_1280_720)->fit(Fit::Crop, 1280, 720);
             });

        $this->addMediaCollection('videos')
             ->acceptsMimeTypes(['video/mp4', 'video/avi', 'video/mov', 'video/wmv', 'video/webm']);
    }

    /**
     * Model Relations --------------------------------------------------------------------------
     */

    /**
     * Model Scope --------------------------------------------------------------------------
     */

    /**
     * Model Attributes --------------------------------------------------------------------------
     */

    /**
     * Model Custom Methods --------------------------------------------------------------------------
     */
}
