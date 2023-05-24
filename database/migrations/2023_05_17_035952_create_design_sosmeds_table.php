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
        Schema::create('design_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->string('name_design');
            $table->decimal('harga_design', 15, 2);
            $table->longText('deskripsi_design');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design_sosmeds');
    }
};
