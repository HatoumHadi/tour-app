<?php

use App\Models\Hotel;
use App\Models\User;
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
        Schema::create('hotel_reservations', function (Blueprint $table) {
            $table->id();
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('number_of_guests');
            $table->enum('status', ['Waitlist', 'Cancelled', 'Confirmed']);
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Hotel::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_reservations');
    }
};
