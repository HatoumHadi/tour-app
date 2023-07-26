<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline',
        'flight_number',
        'departure_airport',
        'departure_city',
        'departure_time',
        'arrival_airport',
        'arrival_city',
        'arrival_time',
        'duration',
        'aircraft_type',
        'price',
        'status',
        'date',
    ];


    public function photoGallery(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(PhotoGallery::class, 'tag');
    }

}
