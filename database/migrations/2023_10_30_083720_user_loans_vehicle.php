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
        Schema::create('user_loans_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('vehicle');
            $table->date('loan_date');
            $table->date('return_date');
            $table->string('status');
            $table->text('loan_notes')->nullable();
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehicle')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_loans_vehicle');
    }
};
