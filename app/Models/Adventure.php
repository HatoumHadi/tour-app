<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Adventure extends Model
{
    use HasTranslations, HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'city_id',
        'user_id',
    ];


    public array $translatable = [
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'json',
        'description' => 'json'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function photoGallery(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(PhotoGallery::class, 'tag');
    }
}
