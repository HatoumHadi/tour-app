<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'city_id',
        'country_id',
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
