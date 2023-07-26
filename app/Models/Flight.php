<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline',
        'flight_number',
        'departure_airport',
        'departure_city_id',
        'departure_time',
        'arrival_airport',
        'arrival_city_id',
        'arrival_time',
        'duration',
        'aircraft_type',
        'price',
        'status',
        'date',
    ];

    public function getDepartureTimeAttribute($date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('h:m A');
    }

    public function getArrivalTimeAttribute($date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('h:m A');
    }

    public function photoGallery(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(PhotoGallery::class, 'tag');
    }

    public function cityDeparture(): BelongsTo
    {
        return $this->belongsTo(City::class,  'departure_city_id', 'id');
    }

    public function cityArrival(): BelongsTo
    {
        return $this->belongsTo(City::class,  'arrival_city_id', 'id');
    }

}
