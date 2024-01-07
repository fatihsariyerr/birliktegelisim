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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('baslik')->nullable();
            $table->string('icerik')->nullable();
            $table->string('kime')->nullable();
            $table->string('kimden')->nullable();
            $table->string('randevutarihi')->nullable();
            $table->string('randevusaati')->nullable();
            $table->string('okundu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
