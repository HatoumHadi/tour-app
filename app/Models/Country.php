<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'is_visa',
        'is_ticket',
        'is_adventure',
        'is_hotel',
        'is_packages',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function places(): HasMany
    {
        return $this->hasMany(Place::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }

}
