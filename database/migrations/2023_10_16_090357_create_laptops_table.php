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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_asset')->nullable();
            $table->string('status');
            $table->date('date_used')->nullable();
            $table->string('processor');
            $table->string('ram');
            $table->string('main_storage');
            $table->string('extend_storage')->nullable();
            $table->string('vga')->nullable();
            $table->string('monitor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
