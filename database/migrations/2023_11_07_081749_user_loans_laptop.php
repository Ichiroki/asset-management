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
        Schema::create('user_loans_laptop', function (Blueprint $table) {
            $table->id();
            $table->uuid('index');
            $table->unsignedBigInteger('user_id');
            $table->date('loan_date');
            $table->date('return_date');
            $table->string('status');
            $table->string('purpose');
            $table->unsignedBigInteger('laptop_id');
            $table->string('information')->nullable();
            $table->string('loan_status')->nullable()->default('Waiting Approval');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('laptop_id')->references('id')->on('laptops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_loans_laptop');
    }
};
