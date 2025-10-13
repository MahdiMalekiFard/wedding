<?php

namespace App\Models;

use App\Enums\BooleanEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTranslationAuto;

/**
 * @property string $title
 * @property string $description
 */
class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'guest', 'date', 'description',
    ];

    protected $casts = [
        'date'       => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'date'       => 'datetime',
    ];

    /**
     * Model Configuration --------------------------------------------------------------------------
     */


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
