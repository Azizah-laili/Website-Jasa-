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
        Schema::create('cartdesigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('logo_id')->nullable()->constrained('logos')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('certificate_id')->nullable()->constrained('certificates')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('design_sosmed_id')->nullable()->constrained('design_sosmeds')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('admin_sosmed_id')->nullable()->constrained('admin_sosmeds')->cascadeOnUpdate()->cascadeOnDelete();
            $table->longText('deskripsi_desain');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartdesigns');
    }
};
