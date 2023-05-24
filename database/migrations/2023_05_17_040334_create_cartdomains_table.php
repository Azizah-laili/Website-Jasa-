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
        Schema::create('cartdomains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('domain_id')->constrained('domains')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name_domain')->unique();
            $table->string('nameserver_1');
            $table->string('nameserver_2');
            $table->string('nameserver_3')->nullable();
            $table->string('nameserver_4')->nullable();
            $table->string('nameserver_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartdomains');
    }
};
