<?php

use App\Models\Car;
use App\Models\PhotoGallery;
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
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type',['sedan', 'suv', 'coupe', 'minivan', 'luxury car', 'off-road vehicle']);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('num_of_days');
            $table->string('price');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(PhotoGallery::class)->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_rentals');
    }
};
