<?php

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
            $table->string('departure_city');
            $table->string('departure_time');
            $table->string('arrival_airport');
            $table->string('arrival_city');
            $table->string('arrival_time');
            $table->string('duration');
            $table->string('aircraft_type');
            $table->string('price');
            $table->string('status');
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
