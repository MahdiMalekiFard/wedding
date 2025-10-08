<?php

namespace App\Models;

use App\Enums\YesNoEnum;
use App\Helpers\Constants;
use App\Traits\HasSchemalessAttributes;
use App\Traits\HasSlugFromTranslation;
use App\Traits\HasTranslationAuto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemalessAttributes\SchemalessAttributes;

/**
 * @property string $title
 * @property string $description
 */
class Team extends Model implements HasMedia
{
    use HasFactory, HasSchemalessAttributes, InteractsWithMedia, HasTranslationAuto;

    protected $fillable = [
        'name', 'slug', 'job', 'special', 'config', 'languages',
    ];

    protected $casts = [
        'config'           => 'array',
        'special'          => YesNoEnum::class,
        'extra_attributes' => 'array',
        'languages'        => 'array',
    ];

    public array $translatable = [
        'body',
    ];

    /** Model Configuration -------------------------------------------------------------------------- */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
             ->singleFile()
             ->useFallbackUrl('/assets/admin/img/default/user-avatar.png')
             ->registerMediaConversions(function () {
                 $this->addMediaConversion(Constants::RESOLUTION_100_SQUARE)->fit(Fit::Crop, 100, 100);
                 $this->addMediaConversion(Constants::RESOLUTION_720_SQUARE)->fit(Fit::Crop, 720, 720);
             });
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

    /** Model Custom Methods -------------------------------------------------------------------------- */
    public function extra(): SchemalessAttributes
    {
        return SchemalessAttributes::createForModel($this, 'extra_attributes');
    }
}
