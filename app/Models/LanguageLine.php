<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Translatable\HasTranslations;

class LanguageLine extends Model
{
    use HasTranslations;

    protected $fillable = [
        'group',
        'key',
        'text'
    ];

    public $translatable = [
        'text'
    ];

    protected $casts = [
        'text' => 'json'
    ];

    public static function boot()
    {
        parent::boot();

        $flushGroupCache = function (self $languageLine) {
            $languageLine->flushGroupCache();
        };

        static::saved($flushGroupCache);
        static::deleted($flushGroupCache);
    }

    public static function getCacheKey(string $group, string $locale): string
    {
        return "spatie.translation-loader.{$group}.{$locale}";
    }

    public function flushGroupCache()
    {
        foreach ($this->getTranslatedLocales('text') as $locale) {
            Cache::forget(static::getCacheKey($this->group, $locale));
        }
    }
}
