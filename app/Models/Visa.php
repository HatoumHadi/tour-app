<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visa extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'passport_number',
        'nationality_country_id',
        'visa_country_id',
        'application_date',
        'status',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function visaCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'visa_country_id');
    }

    public function nationalityCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'nationality_country_id');
    }
}
