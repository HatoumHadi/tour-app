<?php

namespace App\Models;

use App\Definitions\AboutUsType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUs extends Model
{
    use HasTranslations;

    public $translatable = [
        'value'
    ];
    protected $casts = [
        'type' => AboutUsType::class,
        'icon_enabled' => 'boolean'
    ];
}
