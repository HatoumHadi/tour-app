<?php

use App\Models\PhotoGallery;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('company')->nullable();
            $table->timestamp('departure_date')->nullable();
            $table->timestamp('return_date')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
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
        Schema::dropIfExists('transportations');
    }
};
