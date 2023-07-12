<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoGallery extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tag',
        'tag_id',
        'media',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function transportations(): HasMany
    {
        return $this->hasMany(Transportation::class);
    }

    public function travelInsurances(): HasMany
    {
        return $this->hasMany(TravelInsurance::class);
    }

    public function visas(): HasMany
    {
        return $this->hasMany(Visa::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }

    public function carRentals(): HasMany
    {
        return $this->hasMany(CarRental::class);
    }

    public function adventures(): HasMany
    {
        return $this->hasMany(Adventure::class);
    }
}
