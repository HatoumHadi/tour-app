<?php

use App\Models\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->string('flight_number');
            $table->string('departure_airport');
            $table->unsignedBigInteger('departure_city_id');
            $table->foreign('departure_city_id', 'fk_departure_city_id')->references('id')->on('cities');
            $table->timestamp('departure_time');
            $table->string('arrival_airport');
            $table->unsignedBigInteger('arrival_city_id');
            $table->foreign('arrival_city_id', 'fk_arrival_city_id')->references('id')->on('cities');
            $table->timestamp('arrival_time');
            $table->string('duration');
            $table->enum('aircraft_type', ['ICAO', 'EASA']);
            $table->string('price');
            $table->enum('status', ['Scheduled', 'Delayed', 'Departed', 'In Air', 'Landed', 'Arrived', 'Cancelled']);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
