<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Hotel extends Model
{
    use HasTranslations, HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'rating',
        'city_id',
        'country_id',
    ];

    public array $translatable = [
        'name',
        'address',
    ];

    protected $casts = [
        'name' => 'json',
        'address' => 'json'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function photoGallery(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(PhotoGallery::class, 'tag');
    }

}