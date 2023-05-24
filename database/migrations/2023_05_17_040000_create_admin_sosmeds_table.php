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
        Schema::create('admin_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->string('name_admin');
            $table->decimal('harga_admin', 15, 2);
            $table->longText('deskripsi_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_sosmeds');
    }
};
