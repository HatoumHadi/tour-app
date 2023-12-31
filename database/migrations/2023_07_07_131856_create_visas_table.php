<?php

use App\Models\Country;
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
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->string('passport_number');
            $table->foreignIdFor(Country::class, 'visa_country_id')->constrained('countries');
            $table->foreignIdFor(Country::class, 'nationality_country_id')->constrained('countries');
            $table->date('application_date')->nullable();
            $table->enum('status', ['valid', 'expired', 'approved', 'denied', 'pending', 'revoked', 'overstay'])
                ->default('pending');
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};
